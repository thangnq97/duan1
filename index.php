<?php
    session_start();

    // mong muốn tất cả các request đều đi qua file index.php
    $url = isset($_GET['url']) ? $_GET['url'] : '/';

    require_once './vendor/autoload.php';
    require_once './commons/database-config.php';

    use App\Controllers\Admin\AdminHomeController;
    use App\Controllers\Admin\BannerController;
    use App\Controllers\Admin\BrandController;
    use App\Controllers\Admin\CommentController;
    use App\Controllers\User\HomeController;
    use App\Controllers\Admin\ProductController;
    use App\Controllers\Admin\SizeController;
    use App\Controllers\Admin\ToppingController;
    use App\Controllers\Admin\VoucherController;
    use App\Controllers\Admin\UserController;
    use App\Controllers\User\Cart;

    switch ($url) {
        case '/':
            $ctr = new HomeController();
            $ctr->index();
            break;
        case 'admin':
            $ctr = new AdminHomeController();
            $ctr->index();
            break;
        case 'add-cart':
            $ctr = new Cart();
            $ctr->addCart();
            break;
        case 'show-cart':
            $ctr = new Cart();
            $ctr->showCart();
            break;
        case 'remove-cart':
            $ctr = new Cart();
            $ctr->removeCart();
            break;
        case 'remove-cart-index':
            $ctr = new Cart();
            $ctr->removeCartByIndex();
            break;
        case 'voucher-manager':
            $ctr = new VoucherController();
            $ctr->index();
            break;
        case 'add-voucher':
            $ctr = new VoucherController();
            $ctr->addVoucher();
            break;
        case 'save-add-voucher':
            $ctr = new VoucherController();
            $ctr->saveAddVoucher();
            break;
        case 'edit-voucher':
            $ctr = new VoucherController();
            $ctr->editVoucher();
            break;
        case 'save-edit-voucher':
            $ctr = new VoucherController();
            $ctr->saveEditVoucher();
            break;
        case 'delete-voucher':
            $ctr = new VoucherController();
            $ctr->deleteVoucher();
            break;
        case 'topping-manager':
            $ctr = new ToppingController();
            $ctr->index();
            break;
        case 'add-topping':
            $ctr = new ToppingController();
            $ctr->addTopping();
            break;
        case 'save-add-topping':
            $ctr = new ToppingController();
            $ctr->saveAddTopping();
            break;
        case 'edit-topping':
            $ctr = new ToppingController();
            $ctr->editTopping();
            break;
        case 'save-edit-topping':
            $ctr = new ToppingController();
            $ctr->saveEditTopping();
            break;
        case 'delete-topping':
            $ctr = new ToppingController();
            $ctr->deleteTopping();
            break;
        case 'size-manager':
            $ctr = new SizeController();
            $ctr->index();
            break;
        case 'add-size':
            $ctr = new SizeController();
            $ctr->addSize();
            break;
        case 'save-add-size':
            $ctr = new SizeController();
            $ctr->saveAddSize();
            break;
        case 'edit-size':
            $ctr = new SizeController();
            $ctr->editSize();
            break;
        case 'save-edit-size':
            $ctr = new SizeController();
            $ctr->saveEditSize();
            break;
        case 'delete-size':
            $ctr = new SizeController();
            $ctr->deleteSize();
            break;
        case 'all-product':
            $ctr = new HomeController();
            $ctr->allProduct();
            break;
        case 'product-detail':
            $ctr = new HomeController();
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
        case 'edit-banner':
            $ctr = new BannerController();
            $ctr->editBanner();
            break;
        case 'save-edit-banner':
            $ctr = new BannerController();
            $ctr->saveEditBanner();
            break;
        case 'delete-banner':
            $ctr = new BannerController();
            $ctr->deleteBanner();
            break;
        case 'user-manager':
            $ctr = new UserController();
            $ctr->index();
            break;
        case 'add-user':
            $ctr = new UserController();
            $ctr->addUser();
            break;
        case 'save-add-user':
            $ctr = new UserController();
            $ctr->saveAddUser();
            break;
        case 'edit-user':
            $ctr = new UserController();
            $ctr->editUser();
            break;
        case 'save-edit-user':
            $ctr = new UserController();
            $ctr->saveEditUser();
            break;
        case 'delete-user':
            $ctr = new UserController();
            $ctr->deleteUser();
            break;
        case 'comment-manager':
            $ctr = new CommentController();
            $ctr->index();
            break;
        case 'delete-comment':
            $ctr = new CommentController();
            $ctr->deleteComment();
            break;
        case 'add-comment':
            $ctr = new CommentController();
            $ctr->addComment();
            break;
        case 'register':
            $ctr = new HomeController();
            $ctr->register();
            break;
        case 'save-register':
            $ctr = new HomeController();
            $ctr->saveRegister();
            break;
        case 'sign-in':
            $ctr = new HomeController();
            $ctr->signIn();
            break;
        case 'save-sign-in':
            $ctr = new HomeController();
            $ctr->saveSignIn();
            break;
        case 'sign-out':
            $ctr = new HomeController();
            $ctr->signOut();
            break;
        case 'forgot-password':
            $ctr = new HomeController();
            $ctr->forgotPasswordView();
            break;
        case 'check-password':
            $ctr = new HomeController();
            $ctr->forgotPassword();
            break;
        case 'edit-password':
            $ctr = new HomeController();
            $ctr->editPassword();
            break;
        case 'save-edit-password':
            $ctr = new HomeController();
            $ctr->saveEditPassword();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>