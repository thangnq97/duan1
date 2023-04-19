
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Trang Login</title>
     <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="./public/css/dangnhap.css">
</head>
<body>
    <section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="./public/imgs/anh-tra-sua-dep.jpeg" alt="Hình Ảnh Minh Họa">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>QUÊN MẬT KHẨU</h2>
                <form action="./check-password" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="username" autocomplete="off" required>
                    </div>
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="email" autocomplete="off" required>
                    </div>
                    <div class="input-form">
                        <input type="submit" name="submit" value="Lấy lại mật khẩu">
                    </div>
                </form>
                <p><?php echo e($msg); ?></p>
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/user/forgotPassword.blade.php ENDPATH**/ ?>