<?php
    namespace App\Models\User;
    use Illuminate\Database\Eloquent\Model;

    class Variation extends Model {
        protected $table = "variation";

        public $fillable = ['size_id', 'quanity', 'total_price', 'sugar', 'ice', 'bill_detail_id'];

        public $timestamps = false;
    }
?>