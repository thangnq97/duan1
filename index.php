<?php
    session_start();

    $_SESSION['admin'] = [];
    
    // mong muốn tất cả các request đều đi qua file index.php
    $url = isset($_GET['url']) ? $_GET['url'] : '/';

    require_once './vendor/autoload.php';
    require_once './commons/database-config.php';

    use App\Controllers\Admin\HomeController;

    switch ($url) {
        case '/':
            if(isset($_SESSION['admin'])) {
                $ctr = new HomeController();
                $ctr->index();die;
            }else {
                echo 'giao dien user';
            }
            break;
            
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>