<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\Admin\Product;
    use App\Models\Admin\Brand;

    class ProductController extends BaseController {
        
        public function index() {
            $products = Product::all();
            $brands = Brand::all();

            $this->render('admin.product.productManager',[
                                                'products' => $products,
                                                'brands' => $brands
                                                ]);
        }
        
        public function addProduct() {
            $brands = Brand::all();

            $this->render('admin.product.addProduct',[
                                                'brands' => $brands
                                            ]);
        }

        public function saveAddProduct() {
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $product = new Product();
                $product->fill($data);

                $imgFile = $_FILES['image'];
                $fileName = '';
                
                if($imgFile['size'] > 0) {
                    $fileName ='./public/imgs/' .$imgFile['name'];
                    move_uploaded_file($imgFile['tmp_name'], './public/imgs/'.$imgFile['name']);
                }
                $product->image = $fileName;

                $product->save();
                
                header('location: ./product-manager');
            }
        }

        public function deleteProduct() {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                Product::destroy($id);
            }
            header('location: ./product-manager');
        }

        public function editProduct() {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = Product::find($id);
                $brands = Brand::all();
                $this->render('admin.product.editProduct', [
                                                    'product' => $product,
                                                    'brands' => $brands
                                                    ]);
            }
        }

        public function saveEditProduct() {
            
                $id = isset($_GET['id']) ? $_GET['id'] : null;

                if(!$id){
                    header("location: ./product-manager");
                    die;
                }
                
                $product = Product::find($id);
                if(!$product) {
                    header("location: ./product-manager");
                    die;
                }
                $data = $_POST;
                $product->fill($data);

                $imgFile = $_FILES['image'];
                $fileName = $product->image;
                
                if($imgFile['size'] > 0) {
                    $fileName ='./public/imgs/' .$imgFile['name'];
                    move_uploaded_file($imgFile['tmp_name'], './public/imgs/'.$imgFile['name']);
                }
                
                $product->image = $fileName;
                $product->save();
                
                header('location: ./product-manager');
        }
    }
?>