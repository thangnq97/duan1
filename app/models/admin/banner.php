<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Banner extends Model {
        protected $table = "banner";

        public $fillable = ['brand_id'];

        public $timestamps = false;
    }
?>