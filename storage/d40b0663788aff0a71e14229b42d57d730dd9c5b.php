<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>Discount</th>
            <th>Min Price</th>
            <th>Quantity</th>
            <th>Expired</th>
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
                <td><?php echo e($voucher->min_price); ?></td>
                <td><?php echo e($voucher->quanity); ?></td>
                <td><?php echo e($voucher->expired); ?></td>
                <td>
                    <a class="btn btn-primary" href="./edit-voucher?id=<?php echo e($voucher->id); ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-voucher?id=<?php echo e($voucher->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/voucher/voucherManager.blade.php ENDPATH**/ ?>