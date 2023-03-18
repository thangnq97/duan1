<?php
    session_start();

    // mong muốn tất cả các request đều đi qua file index.php
    $url = isset($_GET['url']) ? $_GET['url'] : '/';

    require_once './vendor/autoload.php';
    require_once './commons/database-config.php';

    use App\Controllers\Admin\AdminHomeController;
use App\Controllers\Admin\BannerController;
use App\Controllers\Admin\BrandController;
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
        case 'brand-manager':
            $ctr = new BrandController();
            $ctr->index();
            break;
        case 'add-brand':
            $ctr = new BrandController();
            $ctr->addBrand();
            break;
        case 'save-add-brand':
            $ctr = new BrandController();
            $ctr->saveAddBrand();
            break;
        case 'edit-brand':
            $ctr = new BrandController();
            $ctr->editBrand();
            break;
        case 'save-edit-brand':
            $ctr = new BrandController();
            $ctr->saveEditBrand();
            break;
        case 'delete-brand':
            $ctr = new BrandController();
            $ctr->deleteBrand();
            break;
        case 'banner-manager':
            $ctr = new BannerController();
            $ctr->index();
            break;
        case 'add-banner':
            $ctr = new BannerController();
            $ctr->addBanner();
            break;
        case 'save-add-banner':
            $ctr = new BannerController();
            $ctr->saveAddBanner();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>