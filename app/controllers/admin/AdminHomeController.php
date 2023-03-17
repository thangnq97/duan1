<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;

    class AdminHomeController extends BaseController {
        
        public function index() {
            echo 'Trang chu admin';
        }
        
        public function addSession() {
            $_SESSION['admin'] = [];
        }
        public function destroySession() {
            session_destroy();
        }
    }
?>