<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Status extends Model {
        protected $table = "status";

        public $fillable = ['name'];

        public $timestamps = false;
    }
?>