
<?php $__env->startSection('main-content'); ?>
    <form action="./save-add-user" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input type="text" name="username" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" name="password" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input type="text" name="email" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">ROLE</label>
            <input type="text" name="role" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/user/addUser.blade.php ENDPATH**/ ?>