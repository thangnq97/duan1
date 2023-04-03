<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tocotocotea</title>
    <link rel="stylesheet" href="/brand.css">
</head>
<body>
    <div class="container">
        <div class="item-header">
            <div class="item-menu"> 
                <ul>
                    <li><a href="brand.html"> <img src="/images/Logo-ngang-01.png" alt=""></a></li>
                    <li><a href="brand.html">Trang Chủ</a></li>
                    <li><a href="Product.html">Sản Phẩm</a></li>
                    <li><a href="introduction.html">Giới Thiệu</a></li>
                    <li><a href="#">Tuyển Dụng</a></li>
                    <li><a href="#">Chuyển Nhượng</a></li>
                </ul> 
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
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/TS pho mai.png" alt="" class="imgfluid">
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Trà Sữa Phô Mai Tươi</p>
                      <p class="content-item2">25,000đ <del>28,000đ</del></p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/dâu tây.png" alt="" class="imgfluid"> 
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Trà Dâu Tây Kem Phô Mai</p>
                      <p class="content-item2">25,000đ <del>46,000đ</del></p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/mận hạt sen.png" alt="" class="imgfluid">
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Sữa Chua Mận Hạt Sen</p>
                      <p class="content-item2">25,000đ <del>48,000đ</del></p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/hạt sen.png" alt="" class="imgfluid">
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Trà Mận Hạt Sen</p>
                      <p class="content-item2">25,000đ <del>48,000đ</del></p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
    
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/ô long xoài.png" alt="" class="imgfluid">
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Ô Long Xoài Kem Cà Phê</p>
                      <p class="content-item2">25,000đ <del>49,000đ</del></p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/trà đào bưởi.png" alt="" class="imgfluid">
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Trà Đào Bưởi Hồng Trân Châu</p>
                      <p class="content-item2">25,000đ <del>38,000đ</del></p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/milk tea.png" alt="" class="imgfluid">
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Instant Milk Tea - Strawberry..</p>
                      <p class="content-item2">165,000đ </p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
              <div class="content-item">
                  <div class="content-img">
                      <img src="./images/milk tea cam.png" alt="" class="imgfluid">
                  </div>
                  <div class="content-row">
                      <p class="content-item1">Instant Milk Tea - Original - Se...</p>
                      <p class="content-item2">160,000đ </p>
                      <button class="content-item3">Đặt hàng</button>
                  </div>
              </div>
    
              
          </div>
      </section>
      <div class="content-footer">
        <button class="content-footer1">
            <a href="Product.html"  class="xemtatca">XEM TẤT CẢ</a>
        </button>
    </div>
    </div>
    <div class="item-story">
        <div class="img-story"><img src="/images/story.png" alt=""></div>
        <div class="conten-story"> 
            <div class="sp-story"><img src="/images/hcmp187996_801721.jpg" alt=""></div>
            <div class="sp-story"><img src="/images/img20160624170058708.jpg" alt=""></div>
            <div class="sp-story"><img src="/images/img20160624170058927.jpg" alt=""></div>
            <div class="sp-story"><img src="https://th.bing.com/th/id/OIP.CXUsekh0rcvStZMRrEETNAHaFj?pid=ImgDet&w=199&h=149&c=7&dpr=1.3" alt=""></div>
            <div class="sp-story"><img src="https://toplist.vn/images/800px/tocotoco-330962.jpg" alt=""></div>
            <div class="sp-story"><img src="https://media-cdn.tripadvisor.com/media/photo-s/19/8f/f7/5c/20191011-204130-largejpg.jpg" alt=""></div>
     
        </div>
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
    <div class="item-footer">
      <p style="color: rgb(176, 110, 24); margin-bottom: 30px;">CHÍNH SÁCH THÀNH VIÊN <br></p>
      <P>Chính sách thành viên <br></p>
      <p>Hình thức thanh toán <br></p>
      <p>Vận chuyển giao nhận <br></p>
      <p>Đổi trả hoàn tiền<br></p>
      <p>Bảo vệ thông tin cá nhân <br></p>
      <p>Bảo trì ,bảo hành </p>
    </div>

  </div>
    </div>
      

        
    </div>
    
     
      
    </div>

</body>
</html>