<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\Admin\Product;
    use App\Models\User\Bill;
    use App\Models\User\ProductTopping;
use App\Models\User\Size;
use App\Models\User\Topping;
use App\Models\User\Variation;

    class BillController extends BaseController {
        public function index() {
            $bill = Bill::all();

            $this->render('admin.bill.billManager', ['bills' => $bill]);
        }

        public function billDetail() {
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
            $this->render('admin.bill.billDetail',  [
                                                        'data' => $data

                                                    ]);
        }

        public function updateBill() {
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

            if($bill->status == 'Đang xử lý') {
                $bill->status = 'Đang giao hàng';
                $bill->save();
                header('location: ./bill-manager');
                die;
            }

            if($bill->status == 'Đang giao hàng') {
                $bill->status = 'Đã nhận hàng và thanh toán';
                $bill->save();
                header('location: ./bill-manager');
                die;
            }

            if($bill->status == 'Đã nhận hàng') {
                $bill->status = 'Thành công';
                $bill->save();
                header('location: ./bill-manager');
                die;
            }
            
            if($bill->status == 'Thành công') {
                header('location: ./bill-manager');
                die;
            }

            header('location: ./bill-manager');
        }

        public function cancelBill() {
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

            $bill->status = 'Đã hủy';
            $bill->save();
            header('location: ./bill-manager');
        }
    }
?>