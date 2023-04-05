<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php if($data): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Đường</th>
                    <th>Đá</th>
                    <th>Topping</th>
                    <th>Số Lượng</th>
                    <th>Gía</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k =>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($v[0]); ?></td>
                        <td><?php echo e($v[1]); ?></td>
                        <td><?php echo e($v[2]); ?>%</td>
                        <td><?php echo e($v[3]); ?>%</td>
                        <td>
                            <?php $__currentLoopData = $v[4]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($top); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><?php echo e($v[5]); ?></td>
                        <td><?php echo e($v[6]); ?></td>
                        <td><a href="./remove-cart-index?index=<?php echo e($k); ?>">Xóa</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <h3>Tổng tiền: <?php echo e($total_price); ?></h3>
        <a href="./confirm-cart">Xác nhận đặt hàng</a>
    <?php else: ?>
        <h3>Giỏ hàng trống</h3>
        <a href="./">Tiếp tục đặt hàng</a>    
    <?php endif; ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/user/showCart.blade.php ENDPATH**/ ?>