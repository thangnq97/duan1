<?php $__env->startSection('main-content'); ?>
    <form action="./save-add-brand" method="POST"  data-toggle="validator" role="form">
        <div class="mb-3 mt-3 form-group">
            <label class="control-label">Name</label>
            <input type="text" name="name" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/brand/addBrand.blade.php ENDPATH**/ ?>