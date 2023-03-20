<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><?php echo e($item->id); ?></p>
    <p><?php echo e($item->name); ?></p>
    <p><?php echo e($item->detail); ?></p>
    <img src="<?php echo e($item->image); ?>" style="width: 150px;height: 150px;"> 
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin:30px 0;">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($user->id == $comment->user_id): ?>
                    <p><?php echo e($user->username); ?></p>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($comment->content); ?></p>
            <p><?php echo e($comment->create_at); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form method="POST" action="./add-comment?id=<?php echo e($item->id); ?>">
        <input type="hidden" value="<?php echo e($user->id); ?>" name="user_id">
        <input type="hidden" value="<?php echo e($item->id); ?>" name="product_id">
        <label for="content">Comment</label> <br>
        <textarea name="content" id="" cols="30" rows="5"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/user/productDetail.blade.php ENDPATH**/ ?>