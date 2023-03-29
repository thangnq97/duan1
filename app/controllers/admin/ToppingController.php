<?php
    namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User\Topping;

    class ToppingController extends BaseController {

        public function index() {
            $topping = Topping::all();
            $this->render('admin.topping.toppingManager',   [
                                                                'topping' => $topping
                                                            ]);
        }

        public function addTopping() { 
            $this->render('admin.topping.addTopping',[]);
        }

        public function saveAddTopping() {
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $topping = new Topping();
                $topping->fill($data);
                $topping->save();
            }
            header('location:./topping-manager');
        }

        public function editTopping() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./topping-manager');
                die;
            }

            $topping = Topping::find($id);
            if(!$topping) {
                header('location:./topping-manager');
                die;
            }

            $this->render('admin.topping.editTopping', ['topping' => $topping]);
        }

        public function saveEditTopping() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./topping-manager');
                die;
            }

            $topping = Topping::find($id);
            if(!$topping) {
                header('location:./topping-manager');
                die;
            }

            $data = $_POST;
            $topping->fill($data);
            $topping->save();
            header('location:./topping-manager');
        }

        public function deleteTopping() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./topping-manager');
                die;
            }

            $topping = Topping::find($id);
            if(!$topping) {
                header('location:./topping-manager');
                die;
            }

            Topping::destroy($id);
            header('location:./topping-manager');
        }
    }
?>