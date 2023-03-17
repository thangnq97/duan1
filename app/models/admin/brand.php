<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class Brand extends Model {
        protected $table = "brands";

        public $fillable = ['name'];

        public $timestamps = false;
    }
?>