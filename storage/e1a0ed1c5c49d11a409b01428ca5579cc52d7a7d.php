
<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead class="text-center">
            <th style="width: 3%" class="text-center">FULLNAME</th>
            <th style="width: 3%" class="text-center">PHONE</th>
            <th style="width: 5%" class="text-center">EMAIL</th>
            <th style="width: 15%" class="text-center">ADDRESS</th>
            <th style="width: 3%" class="text-center">TOTAL PRICE</th>
            <th style="width: 10%" class="text-center">STATUS</th>
            <th style="width: 8%" class="text-center">CREATE_AT</th>
            <th style="width: 15%" class="text-center">ACTION</th>
        </thead>
        <tbody class="text-center">
            <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($bill->fullname); ?></td>
                    <td><?php echo e($bill->phone); ?></td>
                    <td><?php echo e($bill->email); ?></td>
                    <td><?php echo e($bill->address); ?></td>
                    <td><?php echo e($bill->total_price); ?></td>
                    <td>
                        <a class="btn btn-primary" onclick="return confirm('Are you sure?')" href="./update-bill?id=<?php echo e($bill->id); ?>"><?php echo e($bill->status); ?></a>
                    </td>
                    <td><?php echo e($bill->create_at); ?></td>
                    <td>
                        <a class="btn btn-success" href="./bill-detail?id=<?php echo e($bill->id); ?>">Detail</a>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="./cancel-bill?id=<?php echo e($bill->id); ?>">Cancel</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/bill/billManager.blade.php ENDPATH**/ ?>