<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class BillDetail extends Model {
        protected $table = "bill_detail";

        public $fillable = ['price', 'quanity', 'unit_price', 'bill_id', 'variation_id'];

        public $timestamps = false;
    }
?>