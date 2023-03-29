<?php
    namespace App\Controllers\User;
    use App\Controllers\BaseController;
use App\Models\Admin\Product;
use App\Models\User\Size;
use App\Models\User\Topping;

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
                array_push($data,['price' => $total_price]);
                array_push($_SESSION['cart'],$data);
            }
            // header("location:./product-detail?id=$id");
            header("location:./show-cart");
        }

        public function showCart() {
            echo '<pre>';
            var_dump($_SESSION['cart']);
        }

        public function removeCart() {
            unset($_SESSION['cart']);
            header('location:./product-detail?id=2');
        }
    }
?>