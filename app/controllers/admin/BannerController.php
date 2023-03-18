<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\Admin\Banner;
    use App\Models\Admin\Brand;

    class BannerController extends BaseController {
        public function index() {
            $banners = Banner::all();
            $brands = Brand::all();

            $this->render('admin.banner.bannerManager',[
                                                    'banners' => $banners,
                                                    'brands' => $brands
                                                ]);
        }

        public function addBanner() {
            $brands = Brand::all();
            $this->render('admin.banner.addBanner',['brands' => $brands]);
        }

        public function saveAddBanner() {
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $banner = new Banner();
                $banner->fill($data);

                $imageFile =$_FILES['image'];
                $fileName = '';
                if($imageFile['size'] > 0) {
                    $fileName = './public/imgs/' .$imageFile['name'];
                    move_uploaded_file($imageFile['tmp_name'], $fileName);
                }
                $banner->image = $fileName;
                $banner->save();
                header('location:./banner-manager');
            }
        }

        public function editBanner() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            if(!$id){
                header('location:./banner-manager');
                die;
            }

            $banner = Banner::find($id);
            $brands = Brand::all();
            
            $this->render('admin.banner.editBanner',[
                                                'banner' => $banner,
                                                'brands' => $brands
                                            ]);
        }
    }
?>