<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class Topping extends Model {
        protected $table = "topping";

        public $fillable = ['name'];

        public $timestamps = false;
    }
?>