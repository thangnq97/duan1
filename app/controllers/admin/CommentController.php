<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\Admin\Comment;
    use App\Models\Admin\Product;
    use App\Models\Admin\User;

    class CommentController extends BaseController {

        public function index() {
            $comments = Comment::all();
            $users = User::all();
            $products = Product::all();
            
            $this->render('admin.comment.commentManager',[
                                                            'comments' => $comments,
                                                            'users' => $users,
                                                            'products' => $products
                                                        ]);
        }

        public function deleteComment() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location:./comment-manager');
                die;
            }

            $comment = Comment::find($id);
            if(!$comment) {
                header('location:./comment-manager');
                die;
            }

            Comment::destroy($id);
            header('location:./comment-manager');
        }
    }
?>