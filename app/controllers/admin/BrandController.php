<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\Admin\Brand;

    class BrandController extends BaseController {

        public function index() {
            $brands = Brand::all();

            $this->render('admin.brand.brandManager', [
                                                    'brands' => $brands                                               
                                                ]);
        }

        public function addBrand() {
            $this->render('admin.brand.addBrand',[]);
        }

        public function saveAddBrand() {
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $brand = new Brand();
                $brand->fill($data);
                $brand->save();
            }
            header('location:./brand-manager');
        }

        public function editBrand() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            if(!$id){
                header('location:./brand-manager');
                die;
            }

            $brand = Brand::find($id);
            
            $this->render('admin.brand.editBrand',[
                                                'brand' => $brand
                                            ]);
        }

        public function saveEditBrand() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            if(!$id){
                header('location:./brand-manager');
                die;
            }

            $brand = Brand::find($id);
            if(!$brand){
                header('location:./brand-manager');
                die;
            }
            $data = $_POST;
            $brand->fill($data);
            $brand->save();
            header('location:./brand-manager');
        }

        public function deleteBrand() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            if(!$id){
                header('location:./brand-manager');
                die;
            }

            $brand = Brand::find($id);
            if(!$brand){
                header('location:./brand-manager');
                die;
            }

            Brand::destroy($id);
            header('location:./brand-manager');
        }
    }
?>