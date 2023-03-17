<?php
    session_start();

    // mong muốn tất cả các request đều đi qua file index.php
    $url = isset($_GET['url']) ? $_GET['url'] : '/';

    require_once './vendor/autoload.php';
    require_once './commons/database-config.php';

    use App\Controllers\Admin\AdminHomeController;
    use App\Controllers\User\UserHomeController;
    use App\Controllers\Admin\ProductController;

    switch ($url) {
        case '/':
            if(isset($_SESSION['admin'])) {
                $ctr = new AdminHomeController();
                $ctr->index();
            }else {
                $ctr = new UserHomeController();
                $ctr->index();
            }
            break;
        case 'all-product':
            $ctr = new UserHomeController();
            $ctr->allProduct();
            break;
        case 'product-detail':
            $ctr = new UserHomeController();
            $ctr->productDetail();
            break;
        case 'product-manager':
            $ctr = new ProductController();
            $ctr->index();
            break;
        case 'add-product':
            $ctr = new ProductController();
            $ctr->addProduct();
            break;
        case 'save-add-product':
            $ctr = new ProductController();
            $ctr->saveAddProduct();
            break;
        case 'delete-product':
            $ctr = new ProductController();
            $ctr->deleteProduct();
            break;
        case 'edit-product':
            $ctr = new ProductController();
            $ctr->editProduct();
            break;
        case 'save-edit-product':
            $ctr = new ProductController();
            $ctr->saveEditProduct();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>