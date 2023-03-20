<?php
    namespace App\Controllers\User;

    use App\Controllers\Admin\ProductController;
    use App\Controllers\Admin\UserController;
    use App\Controllers\BaseController;
    use App\Models\Admin\Product;
    use App\Models\Admin\Brand;
    use App\Models\Admin\Comment;
    use App\Models\Admin\User;

    class HomeController extends BaseController{
        
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
                $user = $_SESSION['user'];
                $comments = Comment::where('product_id', '=', $id)->get();
                $users = User::all();
                $item = Product::find($id);
                $this->render('user.productDetail', [
                                                    'item' => $item,
                                                    'comments' => $comments,
                                                    'users' => $users,
                                                    'user' => $user
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

                $imgFile = $_FILES['avatar'];
                $fileName = '';
                if($imgFile['size'] > 0) {
                    $fileName = './public/imgs/' .$imgFile['name'];
                    move_uploaded_file($imgFile['tmp_name'], $fileName);
                }

                $user->avatar = $fileName;
                $user->save();
            }
            header('location:./register');
        }

        public function signIn() {
            $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            $this->render('user.signIn',['msg' => $msg]);
        }

        public function saveSignIn() {
            $msg = '';
            $users = User::all();
            if(isset($_POST['submit'])) {
                foreach($users as $user) {
                    if(!empty($_POST['username']) && !empty($_POST['password'])) {
                        if($_POST['username'] == $user->username && $_POST['password'] == $user->password) {
                            $_SESSION['user']['username'] = $user->username;
                            $_SESSION['user']['avatar'] = $user->avatar;
                            header('location: ./');
                            die;
                        }
                    }else {
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
            session_destroy();
            header('location:./');
        }
    }
?>