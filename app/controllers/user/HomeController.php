<?php
    namespace App\Controllers\User;

    use App\Controllers\Admin\ProductController;
    use App\Controllers\Admin\UserController;
    use App\Controllers\BaseController;
    use App\Models\Admin\Product;
    use App\Models\Admin\Brand;
    use App\Models\Admin\Comment;
    use App\Models\Admin\User;
    use App\Models\User\Size;
    use App\Models\User\Topping;

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
            $this->render('user.home', [
                                    'listItem' => $result,
                                    'brands' => $brands
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
            if($id) {
                $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
                $size = Size::all();
                $topping = Topping::all();
                $comments = Comment::where('product_id', '=', $id)->get();
                $users = User::all();
                $item = Product::find($id);
                $this->render('user.productDetail', [
                                                    'item' => $item,
                                                    'comments' => $comments,
                                                    'users' => $users,
                                                    'user' => $user,
                                                    'sizes' => $size,
                                                    'topping' => $topping
                                                    ]);
            }
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
            if(isset($_POST['submit'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                foreach($users as $user) {
                    if(!empty($email) && !empty($username)) {
                        if($user->email == $email && $user->username == $username) {
                            $password = $user->password;
                            header("location: ./forgot-password?msg=$password");
                            die;
                        }
                    }
                }
            }
            header('location:./forgot-password?msg=không tìm thấy tài khoản');
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