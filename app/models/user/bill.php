<?php
    namespace App\Models\User;
    use Illuminate\Database\Eloquent\Model;

    class Bill extends Model {
        protected $table = "bill";

        public $fillable = ['fullname', 'phone', 'email', 'address'];

        const CREATED_AT = 'create_at';
        const UPDATED_AT = 'update_at';
    }
?>