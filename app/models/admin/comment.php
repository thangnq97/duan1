<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class Comment extends Model {
        protected $table = "comments";

        public $fillable = ['content', 'user_id', 'product_id'];

        const CREATED_AT = 'create_at';
        const UPDATED_AT = 'update_at';
    }
?>