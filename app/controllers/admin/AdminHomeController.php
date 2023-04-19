<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;

    class AdminHomeController extends BaseController {
        
        public function index() {
            $role = isset($_SESSION['user']) ? $_SESSION['user']['role'] : null;

            if(!$role) {
                header('Location: ./');
                die;
            }

            if($role == 'user') {
                header('Location: ./');
                die;
            }
            $this->render('admin.home',[]);
        }
    }
?>