<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tocotocotea</title>
    <link rel="stylesheet" href="./public/css/trangchu.css">
</head>
<body>
    <div class="container">
        <div class="item-header">
            <div class="item-menu"> 
                <ul>
                    <li><a href=""> <img src="./public/imgs/Logo-ngang-01.png" alt=""></a></li>
                    <li><a href="./">Trang Chủ</a></li>
                    <li><a href="./all-product">Sản Phẩm</a></li>
                    <li><a href="./news">Giới Thiệu</a></li>
                    <li><a href="./show-cart">Giỏ hàng</a></li>
                    <?php if($user): ?> {
                      <li><a href="./history-cart">Lịch sử mua hàng</a></li>
                    }
                        
                    <?php endif; ?>
                </ul>
                <?php if($user): ?>
                  <div class="header-btn btn2">
                    <div class="btn2-content1">
                      <p>Xin chào <?php echo e($user['username']); ?>,</p>
                      <a href="./sign-out">Sign out</a>
                    </div>
                    <?php if($user['role'] == 'admin'): ?>
                      <div class="btn2-content2">
                        <a href="./admin">Đăng nhập admin</a>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php else: ?>
                  <div class="header-btn btn1">
                    <a href="./sign-in">Sign in</a>
                    <a href="./register">Sign up</a>
                  </div>
                <?php endif; ?>
                
            </div>
    </div>
    <div class="banner">
    <div class="sileshow">
      <img id="img" onclick="sile()" src="https://tocotocotea.com/wp-content/uploads/2022/06/Slide_banner-1-1.jpg" alt="">
    </div>
  </div>
  <script>
    var index = 1;
    var imgs = ["https://tocotocotea.com/wp-content/uploads/2022/06/Slide_banner-1-1.jpg","https://tocotocotea.com/wp-content/uploads/2022/06/Slide_banner-2.jpg","https://tocotocotea.com/wp-content/uploads/2022/06/Slide_banner-3.jpg"]
  sile = function (){
    document.getElementById('img').src = imgs[index];
    index++;
    if(index==3){
    index = 0;
  }
  }
  setInterval(sile,2000); 
  </script>
    </div>
    <div class="sp-noibat">
        <div class="item-noibat">
            <p>tocotocotea</p>
            <h3>Sản Phẩm Nổi Bật</h3>
            <img src="/images/item.webp" alt="">
        </div>
        <section class="content">
          <div class="content-body">
              <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content-item">
                    <div class="content-img">
                        <img src="<?php echo e($item->image); ?>" alt="" class="imgfluid">
                    </div>
                    <div class="content-row">
                        <p class="content-item1"><?php echo e($item->name); ?></p>
                        <p class="content-item2"><?php echo e($item->price); ?>đ</p>
                    <a href="./product-detail?id=<?php echo e($item->id); ?>"><button class="content-item3">Đặt hàng</button></a>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </section>
      <div class="content-footer">
        <button class="content-footer1">
            <a href="./all-product"  class="xemtatca">XEM TẤT CẢ</a>
        </button>
    </div>
    </div>
    <div class="item-story">
        <div class="img-story"><img src="./public/imgs/banner-3.jpg" alt=""></div>
         <div class="footer">
    <div class="item-footer">
      <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/ft_logo.png" alt="">
    </div>
    <div class="item-footer">
      <p style="color: rgb(176, 110, 24); margin-bottom: 30px;">CÔNG TY CP TM & DV TACO VIỆT NAM <br></p>
      <p>Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội. <br></p>
      <p>0362150761  <br></p>
      <p>info@tocotocotea.com> <br> </p>
      <p>Số ĐKKD: 0106341306.Ngày cấp: 16/3/2017  <br></p>
      <p>Nơi cấp:Sở kế hoạch và Đầu Tư Thành Phố Hà Nội.</p>


    </div>
    <div class="item-footer">
      <p style="color: rgb(176, 110, 24); margin-bottom: 30px;">VỀ CHÚNG TÔI <br></p>
      <P>Giới thiệu về chúng tôi <br></p>
      <p>Nhượng quyền <br></p>
      <p>Tin tức khuyễn mại <br></p>
      <p>Cửa hàng <br></p>
      <p>Quy định chung <br></p>
      <p>TT liên hệ & ĐKKD</p>
    </div>

  </div>
    </div>
      

        
    </div>
    
     
      
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/user/home.blade.php ENDPATH**/ ?>