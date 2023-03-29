<?php
    namespace App\Models\User;
    use Illuminate\Database\Eloquent\Model;

    class Size extends Model {
        protected $table = "size";

        public $fillable = ['name', 'price'];

        public $timestamps = false;
    }
?>