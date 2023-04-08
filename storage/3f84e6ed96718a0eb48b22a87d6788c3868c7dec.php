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
        
        <?php if($data): ?>
            <table id="cart" class="table table-hover table-condensed"> 
                <thead> 
                <tr> 
                <th style="width:23%">Tên sản phẩm</th> 
                <th style="width:20%">Mô tả</th> 
                <th style="width:17%">Topping</th> 
                <th style="width:8%">Số lượng</th> 
                <th style="width:22%" class="text-center">Thành tiền</th> 
                <th style="width:10%"> </th> 
                </tr> 
                </thead> 
                <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr> 
                        <td data-th="Product">
                            <h4 class="nomargin"><?php echo e($v[0]); ?></h4>
                        </td>
                        <td data-th="Product"><p class="nomargin">Size: <?php echo e($v[1]); ?>, Đường: <?php echo e($v[2]); ?>%, Đá: <?php echo e($v[3]); ?>%</p></td>
                        <td data-th="Product">
                            <?php $__currentLoopData = $v[4]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <p class="nomargin"><?php echo e($top); ?><br></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td data-th="Product"><p class="nomargin"><?php echo e($v[5]); ?></p></td> 
                        <td data-th="Product" class="text-center"><p class="nomargin"><?php echo e($v[6]); ?>đ</p></td> 
                        <td class="actions" data-th="">
                            <a href="./remove-cart-index?index=<?php echo e($k); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Xóa</a>
                        </td> 
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4" class="hidden-xs"> </td> 
                    <td class="hidden-xs text-center"><strong>Tổng: <span  class="price"><?php echo e($total_price); ?></span> đ</strong></td>
                    <td></td> 
                </tr>
                <tr>
                    <td>
                        <a href="./all-product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td>
                    <td class="hidden-xs min-price">Mua ít nhất <?php echo e($min_price[0]->min_price); ?>đ để nhận voucher</td>
                    <td class="text-right"></td>
                    <form action="./confirm-cart" method="POST">
                        <td>
                            <?php if($vouchers): ?>
                                <select class="voucher" name="voucher">
                                        <option value="0">--Chọn Voucher--</option>
                                    <?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($voucher->id); ?>">
                                            <?php echo e($voucher->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <?php endif; ?>
                        </td>
                        <td class="hidden-xs text-center">
                            <strong>Tổng tiền: <span class="total-price"><?php echo e($total_price); ?></span> đ</strong>
                        </td>
                        <td>
                            <input type="submit" value="Thanh toán" name="submit" class="btn btn-success btn-block">
                        </td>
                    </form>
                </tr> 
                </tfoot> 
            </table>
        <?php else: ?>
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
                <td>
                </td> 
                </tr> 
                </tfoot> 
            </table> 
            <div class="message">
                <h3>Giỏ hàng trống</h3>
                <p><?php echo e($msg); ?></p>
            </div>
        <?php endif; ?>
       </div>
       <script>
            var data = <?php echo json_encode($all_voucher, 15, 512) ?>;
            // console.log(data[0]);
            var price = document.querySelector('.price');
            var voucher = document.querySelector('.voucher');
            var totalPrice = document.querySelector('.total-price');

            voucher.addEventListener('change', () => {
                var discount = data.filter(ele => ele.id == voucher.value);
                // console.log(discount[0].discount);
                console.log(discount);
                if(discount.length > 0) {
                    totalPrice.innerText = price.innerText - discount[0].discount;
                }else {
                    totalPrice.innerText = price.innerText;
                }
                // console.log(totalPrice.innerText);
            })
       </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/user/showCart.blade.php ENDPATH**/ ?>