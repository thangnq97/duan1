<?php $__env->startSection('main-content'); ?>
    <form action="./save-edit-brand?id=<?php echo e($brand->id); ?>" method="POST">
        <div class="mb-3 mt-3 form-group">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($brand->name); ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/brand/editBrand.blade.php ENDPATH**/ ?>