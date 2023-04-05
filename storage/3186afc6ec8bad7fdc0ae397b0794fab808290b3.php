<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>Price</th>
            <th>
                <a class="btn btn-success" href="./add-topping">Add new</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $topping; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($top->id); ?></td>
                <td><?php echo e($top->name); ?></td>
                <td><?php echo e($top->price); ?></td>
                <td>
                    <a class="btn btn-primary" href="./edit-topping?id=<?php echo e($top->id); ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-topping?id=<?php echo e($top->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/topping/toppingManager.blade.php ENDPATH**/ ?>