<?php
    namespace App\Models\User;
    use Illuminate\Database\Eloquent\Model;

    class Voucher extends Model {
        protected $table = "voucher";

        public $fillable = ['name', 'discount', 'min_price', 'quanity'];

        protected $dates = ['expired'];

        public $timestamps = false;
    }
?>