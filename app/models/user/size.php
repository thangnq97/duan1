<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class Size extends Model {
        protected $table = "size";

        public $fillable = ['name'];

        public $timestamps = false;
    }
?>