<?php
    namespace App\Models\User;
    use Illuminate\Database\Eloquent\Model;

    class ProductTopping extends Model {
        protected $table = "product_topping";

        public $fillable = ['product_id', 'topping_id', 'variation_id'];

        public $timestamps = false;
    }
?>