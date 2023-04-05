<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./public/css/giohang.css">
</head>
<body>
    <div class="container"> 
        <div class="header">
            <h2 class="header-item">SHOPPING CART</h2>
            <div class="header-icon">
                <a href="./">Home</a> > <a href="./show-cart">Shopping cart</a>
            </div>
            
        </div>
        
        @if ($data)
            <table id="cart" class="table table-hover table-condensed"> 
                <thead> 
                <tr> 
                <th style="width:30%">Tên sản phẩm</th> 
                <th style="width:20%">Mô tả</th> 
                <th style="width:10%">Topping</th> 
                <th style="width:8%">Số lượng</th> 
                <th style="width:22%" class="text-center">Thành tiền</th> 
                <th style="width:10%"> </th> 
                </tr> 
                </thead> 
                <tbody>
                @foreach ($data as $k => $v)
                    <tr> 
                        <td data-th="Product">
                            <h4 class="nomargin">{{$v[0]}}</h4>
                        </td>
                        <td data-th="Product"><p class="nomargin">Size: {{$v[1]}}, Đường: {{$v[2]}}%, Đá: {{$v[3]}}%</p></td>
                        <td data-th="Product">
                            @foreach ($v[4] as $top)
                               <p class="nomargin">{{$top}}<br></p>
                            @endforeach
                        </td>
                        <td data-th="Product"><p class="nomargin">{{$v[5]}}</p></td> 
                        <td data-th="Product" class="text-center"><p class="nomargin">{{$v[6]}}đ</p></td> 
                        <td class="actions" data-th="">
                            <a href="./remove-cart-index?index={{$k}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Xóa</a>
                        </td> 
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td><a href="./all-product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td> 
                    <td></td> 
                <td colspan="2" class="hidden-xs"> </td> 
                <td class="hidden-xs text-center"><strong>Tổng tiền: {{$total_price}} đ</strong>
                </td> 
                <td><a href="./confirm-cart" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td> 
                </tr> 
                </tfoot> 
            </table>
        @else
            <table id="cart" class="table table-hover table-condensed"> 
                <thead> 
                <tr> 
                <th style="width:30%">Tên sản phẩm</th> 
                <th style="width:20%">Mô tả</th> 
                <th style="width:10%">Topping</th> 
                <th style="width:8%">Số lượng</th> 
                <th style="width:22%" class="text-center">Thành tiền</th> 
                <th style="width:10%"> </th> 
                </tr> 
                </thead> 
                <tbody>
                    <tr> 
                        <td data-th="Product">
                            <h4 class="nomargin"></h4>
                        </td>
                        <td data-th="Product"></td>
                        <td data-th="Product">
                            
                            
                           
                        </td>
                        <td data-th="Product"><p class="nomargin"></p></td> 
                        <td data-th="Product" class="text-center"><p class="nomargin"></p></td> 
                        <td class="actions" data-th="">
                            
                        </td> 
                    </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td><a href="./all-product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td> 
                    <td></td> 
                <td colspan="2" class="hidden-xs"> </td> 
                <td class="hidden-xs text-center"><strong>Tổng tiền: 0đ</strong>
                </td> 
                <td><a href="./confirm-cart" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td> 
                </tr> 
                </tfoot> 
            </table> 
            <h3>Giỏ hàng trống</h3>
            <a href="./all-product">Tiếp tục đặt hàng</a>
        @endif
       </div>
</body>
</html>