
<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead class="text-center">
            <th>PRODUCT</th>
            <th>SIZE</th>
            <th>TOPPING</th>
            <th>QUANTITY</th>
            <th><a class="btn btn-primary" href="./bill-manager">Back</a></th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item[0]); ?></td>
                    <td><?php echo e($item[1]); ?></td>
                    <td>
                        <?php $__currentLoopData = $item[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($topping); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($item[3]); ?></td>
                    <td>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/bill/billDetail.blade.php ENDPATH**/ ?>