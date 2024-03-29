<?php
    namespace App\Controllers\User;
    use App\Controllers\BaseController;
    use App\Models\Admin\Product;
    use App\Models\User\Bill;
    use App\Models\User\Size;
    use App\Models\User\Topping;
    use App\Models\User\Voucher;
    use App\Models\User\Variation;
    use App\Models\User\ProductTopping;

    class Cart extends BaseController {
        public function addCart() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(isset($_POST['submit'])) {
                $_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
                $data = $_POST;
                $pro_price = Product::find($id)->price;
                $size_price = Size::find($data['size'])->price;
                $topping_price = 0;
                $quanity = $data['quanity'];
                foreach($data['topping'] as $k => $v):
                    $topping_price += Topping::find($v)->price;
                endforeach;
                $total_price = intval($quanity) * ($pro_price + $topping_price + $size_price);
                array_push($data, $total_price, $id);
                array_push($_SESSION['cart'],$data);
            }
            header("location:./show-cart");
        }

        public function removeCartByIndex() {
            $index = isset($_GET['index']) ? $_GET['index'] : null;
            if($index == null) {
                header('location: ./');
                die;
            }
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location: ./show-cart');
        }

        public function showCart() {
            // echo '<pre>';
            // var_dump($_SESSION['cart']);die;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
            $data = [];
            $total_price = 0;
            foreach($cart as $item):
                $total_price += $item[0];
                $product = Product::find($item[1])->name;
                $size = Size::find($item['size'])->name;
                $sugar = $item['sugar'];
                $ice = $item['ice'];
                $quanity = $item['quanity'];
                if(isset($item['topping'])) {
                    foreach($item['topping'] as $top):
                        $topping = isset($topping) ? $topping : [];
                        $top_name = Topping::find($top)->name;
                        array_push($topping, $top_name);
                    endforeach;
                }else {
                    $topping = [];
                }
                $price = $item[0];
                array_push($data,[$product, $size, $sugar, $ice, $topping, $quanity, $price]);
                unset($topping);
            endforeach;
            $_SESSION['total_price'] = $total_price;

            $now = date('Y-m-d H:i:s');
            // echo '<pre>';
            // var_dump($data);
            $voucher = Voucher::where('min_price', "<=", $total_price)->where('quanity', ">", 0)->where('expired', ">=", $now)->get();
            $vouchers = ($voucher) ? $voucher : null;
            $allVoucher = Voucher::all();
            $minVoucher = Voucher::where('id', ">=", 0)->orderBy('min_price', 'ASC')->take(1)->get();
            // echo '<pre>';
            // var_dump($voucher);die;
            $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            $this->render('user.showCart',[
                                            'data' => $data,
                                            'total_price' => $total_price,
                                            'vouchers' => $vouchers,
                                            'all_voucher' => $allVoucher,
                                            'min_price' => $minVoucher,
                                            'msg' => $msg
                                          ]);
        }

        public function removeCart() {
            unset($_SESSION['cart']);
            header('location:./product-detail?id=2');
        }

        public function confirmCart() {
            // echo "<pre>";
            // var_dump($_SESSION['cart']);die;
            $voucher = isset($_POST['voucher']) ? $_POST['voucher'] : null;
            $this->render('user.confirmBill', ['voucher' => $voucher]);
        }


        public function saveConfirmCart() {
            // echo "<pre>";
            // var_dump($_SESSION['cart']);die;
            // var_dump($_POST);die;
            $data = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
            $voucher = isset($_POST['voucher']) ? $_POST['voucher'] : null;
            $user = isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;
            $bill = $_POST;
            $total_price = isset($_SESSION['total_price']) ? $_SESSION['total_price'] : 0;
            
            $bill = new Bill();
            $bill->fill($_POST);
            $bill->total_price = $total_price;
            $bill->user_id = $user;
            // var_dump($voucher);die;
            if($voucher) {
                $bill->voucher_id = $voucher;
                $voucherEdit = Voucher::find($voucher);
                $voucher_quanity = $voucherEdit->quanity - 1;
                $voucherEdit->quanity = $voucher_quanity;
                $voucherEdit->save();
            }
            $bill->save();

            $bill_id = $bill->id;
            foreach($data as $item) {
               $variation = new VariationHandler();
               $variation_id = $variation->saveVariation($item, $bill_id);
               if(isset($item['topping'])) {
                foreach($item['topping'] as $top) {
                    $product_topping = new VariationHandler;
                    // $top_num = intval($top);
                    $product_topping->saveProductTopping($item[1], $variation_id, $top);
                }
               }else {
                    $product_topping = new VariationHandler();
                    $product_topping->saveProductTopping($item[1], $variation_id);
               }
            }
            unset($_SESSION['cart']);
            unset($_SESSION['total_price']);
            $msg = 'Đơn hàng đã được đặt thành công, vui lòng để ý điện thoại!';
            header("location:./show-cart?msg=$msg");
        }

        public function history() {
            $user_id = isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;
            if(!$user_id) {
                header('location: ./');
            }

            $bills = Bill::where('user_id', $user_id)->get();
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
            $this->render('user.history', ['bills' =>$bills, 'user' =>$user]);
        }

        public function historyDetail() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./bill-manager');
                die;
            }

            $bill = Bill::find($id);
            if(!$bill) {
                header('location: ./bill-manager');
                die;
            }

            $variations = Variation::where('bill_id', $id)->get();
            // echo '<pre>';
            // var_dump($variations);die;
            $data = [];
            foreach($variations as $var) {
                $var_id = $var->id;
                $product_topping = ProductTopping::where('variation_id', $var_id)->take(1)->get();
                $pro_id = $product_topping[0]->product_id;
                $product_name = Product::find($pro_id)->name;

                $quanity = $var->quanity;

                $size_id = $var->size_id;
                $size = Size::find($size_id)->name;

                $product_topping = ProductTopping::where('variation_id', $var_id)->get();
                $allTopping = [];
                foreach($product_topping as $item) {
                    $pro_top = $item->id;
                    $topping_id = ProductTopping::find($pro_top)->topping_id;
                    if($topping_id) {
                        $topping_name = Topping::find($topping_id)->name;
                        array_push($allTopping,$topping_name);
                    }
                }
                
                array_push($data, [$product_name, $size, $allTopping, $quanity]);
            }
            // echo '<pre>';
            // var_dump($data);die;
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
            $this->render('user.historyDetail',  [
                                                        'data' => $data,
                                                        'user' => $user
                                                    ]);
        }
    }
?>