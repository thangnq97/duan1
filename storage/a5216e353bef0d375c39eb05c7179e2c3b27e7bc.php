<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>IMAGE</th>
            <th>BRAND</th>
            <th>
                <a class="btn btn-success" href="./add-banner">Add new</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($banner->id); ?></td>
                <td>
                    <img src="<?php echo e($banner->image); ?>" style="width: 150px; height: 150px;">
                </td>
                <td>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($brand->id == $banner->brand_id): ?>
                            <?php echo e($brand->name); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <a class="btn btn-primary" href="./edit-banner?id=<?php echo e($banner->id); ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-banner?id=<?php echo e($banner->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/banner/bannerManager.blade.php ENDPATH**/ ?>