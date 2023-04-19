<?php
    namespace App\Controllers\User;

    use App\Controllers\Admin\ProductController;
    use App\Controllers\Admin\UserController;
    use App\Controllers\BaseController;
    use App\Models\Admin\Product;
    use App\Models\Admin\Brand;
    use App\Models\Admin\Comment;
    use App\Models\Admin\User;
use App\Models\User\Bill;
use App\Models\User\ProductTopping;
use App\Models\User\Size;
    use App\Models\User\Topping;
use App\Models\User\Variation;

    class HomeController extends BaseController{
        
        public function index() {
            $brands = Brand::where('status', 'Còn hàng')->get();
            $brands_id = [];
            foreach($brands as $brand) {
                array_push($brands_id, $brand->id);
            }

            $listItem = [];
            $products = Product::all();
            foreach($products as $product) {
                foreach($brands_id as $brand_id) {
                    if($product->brand_id == $brand_id) {
                        array_push($listItem, $product);
                    }
                }
            }

            $result = [];
            if(count($listItem) > 7) {
                for ($i=0; $i < 8; $i++) { 
                    array_push($result,$listItem[$i]);
                }
            }else {
                $result = $listItem;
            }
            // echo '<pre>';
            // var_dump($result);die;
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
            $this->render('user.home', [
                                    'listItem' => $result,
                                    'brands' => $brands,
                                    'user' => $user
                                ]);
        }

        public function news() {
            $this->render('user.news',[]);
        }

        public function allProduct() {
            $msg = '';
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $listItem = Product::where('brand_id',$id)->get();
            }
            if(isset($_GET['search'])) {
                $search = $_GET['search'];
                $listName = Product::where('name', 'LIKE', '%'.$search.'%')->get();

                $brands = Brand::where('status', 'Còn hàng')->get();
                $brands_id = [];
                foreach($brands as $brand) {
                    array_push($brands_id, $brand->id);
                }

                $listItem = [];
                foreach($listName as $item) {
                    foreach($brands_id as $brand_id) {
                        if($item->brand_id == $brand_id) {
                            array_push($listItem, $item);
                        }
                    }
                }
            }

            if(!isset($_GET['id']) && !isset($_GET['search'])) {
                $brands = Brand::where('status', 'Còn hàng')->get();
                $brands_id = [];
                foreach($brands as $brand) {
                    array_push($brands_id, $brand->id);
                }

                $listItem = [];
                $products = Product::all();
                foreach($products as $product) {
                    foreach($brands_id as $brand_id) {
                        if($product->brand_id == $brand_id) {
                            array_push($listItem, $product);
                        }
                    }
                }
            }
            $brands = Brand::where('status', 'Còn hàng')->get();
            $this->render('user.allProduct',[
                                            'listItem' => $listItem,
                                            'brands' => $brands,
                                            'msg' => $msg
                                            ]);
        }

        public function productDetail() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./');
                die;
            }

            $product = Product::find($id);
            if(!$product) {
                header('location: ./');
                die;
            }
            
            $product->views = $product->views + 1;
            $product->save();

            $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
            $user_id = isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;

            $bills = Bill::where('user_id', $user_id)->get();
            $check = false;
            foreach($bills as $bill) {
                $bill_status = $bill->status;
                if($bill_status == 'Thành công') {
                    $bill_id = $bill->id;
                    $vars = Variation::where('bill_id',  $bill_id)->get();
                    foreach($vars as $var) {
                        $var_id = $var->id;
                        $allProTop = ProductTopping::where('variation_id', $var_id)->get();
                        foreach($allProTop as $item) {
                            if($item->product_id == $id) {
                                $check = true;
                            }
                        }
                    }
                }
            }
            
            $user = $check ? $user : null;
            
            $size = Size::all();
            $topping = Topping::all();
            $comments = Comment::where('product_id', '=', $id)->get();
            $item = Product::find($id);
            $this->render('user.productDetail', [
                                                'item' => $item,
                                                'comments' => $comments,
                                                'user' => $user,
                                                'sizes' => $size,
                                                'topping' => $topping
                                                ]);
        }

        public function register() {
            $this->render('user.register',[]);
        }
        
        public function saveRegister() {
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $user = new User();
                $user->fill($data);

                if(empty($_POST['role'])) {
                    $user->role = 'user';
                }

                // $imgFile = $_FILES['avatar'];
                // $fileName = '';
                // if($imgFile['size'] > 0) {
                //     $fileName = './public/imgs/' .$imgFile['name'];
                //     move_uploaded_file($imgFile['tmp_name'], $fileName);
                // }

                // $user->avatar = $fileName;
                $user->save();
            }
            header('location:./sign-in');
        }

        public function signIn() {
            $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            $this->render('user.signIn',['msg' => $msg]);
        }

        public function saveSignIn() {
            // var_dump($_POST);die;
            $msg = '';
            $users = User::all();
            if(isset($_POST['submit'])) {
                foreach($users as $user) {
                    if(!empty($_POST['username']) && !empty($_POST['password'])) {
                        if($_POST['username'] == $user->username && $_POST['password'] == $user->password) {
                            $_SESSION['user']['id'] = $user->id;
                            $_SESSION['user']['username'] = $user->username;
                            $_SESSION['user']['role'] = $user->role;
                            header('location: ./');
                            die;
                        }
                    }else {
                        // var_dump($_POST);die;
                        $msg = 'Tài khoản hoặc mật khẩu không đúng';
                        header("location: ./sign-in?msg=$msg");
                        die;
                    }
                }
                $msg = 'Tài khoản hoặc mật khẩu không đúng';
                header("location: ./sign-in?msg=$msg");
            }
            
        }

        public function signOut() {
            unset($_SESSION['user']);
            header('location:./');
        }

        public function forgotPasswordView() {
            $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            $this->render('user.forgotPassword', ['msg' => $msg]);
        }

        public function forgotPassword() {
            $users = User::all();
            $msg = '';
            if(isset($_POST['submit'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                foreach($users as $user) {
                    if(!empty($email) && !empty($username)) {
                        if($user->email == $email && $user->username == $username) {
                            $password = $user->password;
                            $msg = $password;
                            header("location: ./forgot-password?msg=$msg");
                            die;
                        }
                    }
                }
                $msg = 'Không tìm thấy tài khoản';
                header("location:./forgot-password?msg=$msg");
            }
            
        }

        public function editPassword() {
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

            if($user) {
                $this->render('user.rePassword', ['user' => $user]);
            }else {
                header('location:./register');
            }
        }

        public function saveEditPassword() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./edit-password');
                die;
            }

            $user = User::find($id);
            if(!$user) {
                header('location: ./edit-password');
                die;
            }

            $password = $_POST['password'];
            $user->password = $password;
            $user->save();
            header('location: ./sign-in');
        }
    }
?>