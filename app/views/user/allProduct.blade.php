<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tocotoco.product</title>
    <link rel="stylesheet" href="./public/css/sanpham.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="connatner">
        <div class="item-menu">
            <div class="bgr" style="background-color: black; opacity: 0.6; height: 250px;">
                <div class="banner-menu">
                    <a href="#"><img src="./public/imgs/Logo-ngang-01.png" alt=""> </a>
                </div>
                <div class="item-list">
                    <ul>
                        <li><a href="./">Trang Chủ</a></li>
                        <li><a href="./all-product">Sản Phẩm</a></li>
                        <li><a href="./news">Giới Thiệu</a></li>
                        <li><a href="./show-cart">Giỏ hàng</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="content">
            <div class="content-trai">
                @foreach ($brands as $item)
                <a href="./all-product?id={{$item->id}}">
                    <div class="list-conten">
                        <h3>{{$item->name}}</h3>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="content-phai">
                <div class="sanpham">
                    <div class="sanpham-item">
                        <div class="sanpham-icon">
                            <h1>Sản Phẩm Nổi Bật</h1>
                        </div>
                        <form class="sanpham-row" method="GET" action="./all-product">
                            <input type="text" placeholder="Tìm Kiếm" name="search">
                        </form>
                        <div class="icon-giohang">
                            <a href="./show-cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>

                    <div class="sanpham-body">
                        @foreach ($listItem as $item)
                        <div class="content-item">
                            <div class="content-img">
                                <img src="{{$item->image}}" alt="" class="imgfluid">
                            </div>
                            <div class="content-row">
                                <p class="content-item1">{{$item->name}}</p>
                                <p class="content-item2">{{$item->price}}đ</p>
                                <a href="./product-detail?id={{$item->id}}"><button class="content-item3">Đặt hàng</button></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


            </div>

        </div>
    </div>
    </div>
</body>

</html>