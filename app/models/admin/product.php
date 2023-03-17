<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model {
        protected $table = "products";

        public $fillable = ['name', 'detail', 'brand_id'];

        const CREATED_AT = 'create_at';
        const UPDATED_AT = 'update_at';
    }
?>