<?php
    namespace App\Controllers\User;
    use App\Controllers\BaseController;
    use App\Models\Admin\Product;
    use App\Models\User\Size;
    use App\Models\User\Topping;
    use App\Models\User\Voucher;

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
            // echo '<pre>';
            // var_dump($data);
            $voucher = Voucher::where('min_price', "<=", $total_price)->get();
            $vouchers = ($voucher) ? $voucher : null;
            $allVoucher = Voucher::all();
            $minVoucher = Voucher::where('id', ">=", 0)->orderBy('min_price', 'ASC')->take(1)->get();
            // echo '<pre>';
            // var_dump($minVoucher[0]->min_price);die;
            $this->render('user.showCart',[
                                            'data' => $data,
                                            'total_price' => $total_price,
                                            'vouchers' => $vouchers,
                                            'all_voucher' => $allVoucher,
                                            'min_price' => $minVoucher
                                          ]);
        }

        public function removeCart() {
            unset($_SESSION['cart']);
            header('location:./product-detail?id=2');
        }

        public function confirmCart() {
            // var_dump($_POST);die;
            $this->render('user.confirmBill', []);
        }
    }
?>