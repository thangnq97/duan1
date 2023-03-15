<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Comment extends Model {
        protected $table = "comments";

        public $fillable = ['content', 'user_id', 'product_id'];
    }
?>