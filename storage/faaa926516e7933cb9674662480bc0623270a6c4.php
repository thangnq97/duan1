<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>STATUS</th>
            <th>
                <a class="btn btn-success" href="./add-brand">Add new</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($brand->id); ?></td>
                <td><?php echo e($brand->name); ?></td>
                <td><a onclick="return confirm('Are you sure?')" class="btn btn-primary" href="./update-brand?id=<?php echo e($brand->id); ?>"><?php echo e($brand->status); ?></a></td>
                <td>
                    <a class="btn btn-primary" href="./edit-brand?id=<?php echo e($brand->id); ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-brand?id=<?php echo e($brand->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/brand/brandManager.blade.php ENDPATH**/ ?>