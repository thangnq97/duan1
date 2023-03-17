<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class Variation extends Model {
        protected $table = "variation";

        public $fillable = ['size_id', 'topping_id', 'product_id', 'quanity', 'price'];

        public $timestamps = false;
    }
?>