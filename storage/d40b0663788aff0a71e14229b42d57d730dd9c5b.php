<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>Discount</th>
            <th>
                <a class="btn btn-success" href="./add-voucher">Add new</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($voucher->id); ?></td>
                <td><?php echo e($voucher->name); ?></td>
                <td><?php echo e($voucher->discount); ?></td>
                <td>
                    <a class="btn btn-primary" href="./edit-voucher?id=<?php echo e($voucher->id); ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-voucher?id=<?php echo e($voucher->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/voucher/voucherManager.blade.php ENDPATH**/ ?>