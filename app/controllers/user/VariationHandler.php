<?php
    namespace App\Controllers\User;

    use App\Controllers\BaseController;
    use App\Models\User\ProductTopping;
    use App\Models\User\Variation;

    class VariationHandler extends BaseController {

        public function saveVariation($data = [], $bill_id) {
            $total_price = $data[0];
            $ice = $data['ice'];
            $quanity = $data['quanity'];
            $sugar = $data['sugar'];
            $size  =$data['size'];
            $bill = $bill_id;

            $variation = new Variation();
            $variation->quanity = $quanity;
            $variation->ice = $ice;
            $variation->total_price = $total_price;
            $variation->sugar = $sugar;
            $variation->size_id = $size;
            $variation->bill_id = $bill;

            $variation->save();
            return $variation->id;
        }

        public function saveProductTopping($product_id, $variation_id, $topping_id = null) {
            $product_id = $product_id;
            $topping_id = $topping_id;
            $variation_id = $variation_id;

            $product_topping = new ProductTopping();
            $product_topping->product_id = $product_id;
            $product_topping->topping_id = $topping_id;
            $product_topping->variation_id = $variation_id;
            
            $product_topping->save();
        }
    }
?>