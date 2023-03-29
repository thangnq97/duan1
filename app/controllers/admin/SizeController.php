<?php
    namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User\Size;

    class SizeController extends BaseController {
        
        public function index() {
            $sizes = Size::all();

            $this->render('admin.size.sizeManager',['sizes' => $sizes]);
        }

        public function addSize() { 
            $this->render('admin.size.addSize',[]);
        }

        public function saveAddSize() {
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $size = new Size();
                $size->fill($data);
                $size->save();
            }
            header('location:./size-manager');
        }

        public function editSize() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./size-manager');
                die;
            }

            $size = Size::find($id);
            if(!$size) {
                header('location:./size-manager');
                die;
            }

            $this->render('admin.size.editSize', ['size' => $size]);
        }

        public function saveEditSize() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./size-manager');
                die;
            }

            $size = Size::find($id);
            if(!$size) {
                header('location:./size-manager');
                die;
            }

            $data = $_POST;
            $size->fill($data);
            $size->save();
            header('location:./size-manager');
        }

        public function deleteSize() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./size-manager');
                die;
            }

            $size = Size::find($id);
            if(!$size) {
                header('location:./size-manager');
                die;
            }

            Size::destroy($id);
            header('location:./size-manager');
        }
    }
?>