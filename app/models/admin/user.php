<?php
    namespace App\Models\Admin;
    use Illuminate\Database\Eloquent\Model;

    class User extends Model {
        protected $table = "users";

        public $fillable = ['username', 'password', 'email', 'role'];

        public $timestamps = false;
    }
?>