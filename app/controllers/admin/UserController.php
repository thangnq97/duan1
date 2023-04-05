<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\Admin\User;

    class UserController extends BaseController{

        public function index() {
            $users = User::all();

            $this->render('admin.user.userManager', [
                                                        'users' => $users
                                                    ]);
        }

        public function addUser() {
            $this->render('admin.user.addUser',[]);
        }

        public function saveAddUser() {
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
                header('location: ./user-manager');
            }
        }

        public function editUser() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./user-manager');
                die;
            }
            $user = User::find($id);
            $this->render('admin.user.editUser',[
                                                    'user' => $user
                                                ]);
        }

        public function saveEditUser() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./user-manager');
                die;
            }

            $user = User::find($id);
            if(!$user) {
                header("location: ./user-manager");
                die;
            }

            $data = $_POST;
            $user->fill($data);

            if(empty($_POST['role'])) {
                $user->role = 'user';
            }

            // $imgFile = $_FILES['avatar'];
            // $fileName = $user->avatar;
            
            // if($imgFile['size'] > 0) {
            //     $fileName ='./public/imgs/' .$imgFile['name'];
            //     move_uploaded_file($imgFile['tmp_name'], './public/imgs/'.$imgFile['name']);
            // }
            
            // $user->avatar = $fileName;
            $user->save();
            header("location: ./user-manager");
        }

        public function deleteUser() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./user-manager');
                die;
            }

            $user = User::find($id);
            if(!$user) {
                header("location: ./user-manager");
                die;
            }
            User::destroy($id);
            header('location: ./user-manager');
        }
    }
?>