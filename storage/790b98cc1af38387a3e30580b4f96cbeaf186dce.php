
<?php $__env->startSection('main-content'); ?>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>CONTENT</th>
            <th>USERNAME</th>
            <th>PRODUCT</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($comment->id); ?></td>
                <td><?php echo e($comment->content); ?></td>
                <td>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($user->id == $comment->user_id): ?>
                            <?php echo e($user->username); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($product->id == $comment->product_id): ?>
                            <?php echo e($product->name); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-comment?id=<?php echo e($comment->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/comment/commentManager.blade.php ENDPATH**/ ?>