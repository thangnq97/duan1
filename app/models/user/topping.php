<?php
    namespace App\Models\User;
    use Illuminate\Database\Eloquent\Model;

    class Topping extends Model {
        protected $table = "topping";

        public $fillable = ['name', 'price'];

        public $timestamps = false;
    }
?>