<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Bill extends Model {
        protected $table = "bill";

        public $fillable = ['fullname', 'phone', 'email', 'address', 'total_price', 'status_id', 'user_id'];
    }
?>