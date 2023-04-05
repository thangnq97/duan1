
<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>ROLE</th>
            <th>
                <a class="btn btn-success" href="./add-user">Add new</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->password); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->role); ?></td>
                <td>
                    <a class="btn btn-primary" href="./edit-user?id=<?php echo e($user->id); ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-user?id=<?php echo e($user->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/user/userManager.blade.php ENDPATH**/ ?>