<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="syle.css">
</head>
<body>
    <div class="container"> 
        <div class="header">
            <h2 class="header-item">SHOPPING CART</h2>
            <div class="header-icon">
                <a href="Product.html ">Home</a> > <a href="">Shopping cart</a>
            </div>
            
        </div>
        
        <table id="cart" class="table table-hover table-condensed"> 
         <thead> 
          <tr> 
           <th style="width:50%">Tên sản phẩm</th> 
           <th style="width:10%">Giá</th> 
           <th style="width:8%">Số lượng</th> 
           <th style="width:22%" class="text-center">Thành tiền</th> 
           <th style="width:10%"> </th> 
          </tr> 
         </thead> 
         <tbody><tr> 
          <td data-th="Product"> 
           <div class="row"> 
            <div class="col-sm-2 hidden-xs"><img src="/img/Tra-Dau-Tam-Pha-Le-Tuyet-2-copy.jpg " alt="Sản phẩm 1" class="img-responsive" width="100">
            </div> 
            <div class="col-sm-10"> 
             <h4 class="nomargin">Trà Dâu Tằm</h4> 
             <p>Mô tả của sản phẩm 1</p> 
            </div> 
           </div> 
          </td> 
          <td data-th="Price">200.000 đ</td> 
          <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
          </td> 
          <td data-th="Subtotal" class="text-center">200.000 đ</td> 
          <td class="actions" data-th="">
           <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
           </button> 
           <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
           </button>
          </td> 
         </tr> 
         <tr> 
          <td data-th="Product"> 
           <div class="row"> 
            <div class="col-sm-2 hidden-xs"><img src="/img/Tra-O-Long-Sua-2-copy.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
            </div> 
            <div class="col-sm-10"> 
             <h4 class="nomargin">Trà Sữa Ô long</h4> 
             <p>Mô tả của sản phẩm 2</p> 
            </div> 
           </div> 
          </td> 
          <td data-th="Price">300.000 đ</td> 
          <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
          </td> 
          <td data-th="Subtotal" class="text-center">300.000 đ</td> 
          <td class="actions" data-th="">
           <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
           </button> 
           <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
           </button>
          </td> 
         </tr> 
         </tbody><tfoot> 
          <tr class="visible-xs"> 
           <td class="text-center"><strong>Tổng 200.000 đ</strong>
           </td> 
          </tr> 
          <tr> 
           <td><a href="" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
           </td> 
           <td colspan="2" class="hidden-xs"> </td> 
           <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
           </td> 
           <td><a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
           </td> 
          </tr> 
         </tfoot> 
        </table>
       </div>
</body>
</html>