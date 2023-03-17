<?php
    namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Admin\Product;
use App\Models\Admin\Brand;
    
    class UserHomeController extends BaseController{
        
        public function index() {
            $listItem = Product::all()->take(9);
            $brands = Brand::all();   
            $this->render('user.home', [
                                    'listItem' => $listItem,
                                    'brands' => $brands
                                ]);
        }

        public function allProduct() {
            $listItem = Product::all();
            $this->render('user.allProduct',[
                                            'listItem' => $listItem
                                            ]);
        }

        public function productDetail() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if($id) {
                $item = Product::find($id);
                $this->render('user.productDetail', [
                                                    'item' => $item
                                                    ]);
            }
        }
    }
?>