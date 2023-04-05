<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;

    class AdminHomeController extends BaseController {
        
        public function index() {
            $this->render('admin.home',[]);
        }
        
        public function addSession() {
            $_SESSION['admin'] = [];
        }
        public function destroySession() {
            session_destroy();
        }
    }
?>