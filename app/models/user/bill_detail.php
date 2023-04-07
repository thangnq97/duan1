<?php
    namespace App\Models\User;
    use Illuminate\Database\Eloquent\Model;

    class BillDetail extends Model {
        protected $table = "bill_detail";

        public $fillable = ['total_price', 'bill_id', 'voucher_id'];

        public $timestamps = false;
    }
?>