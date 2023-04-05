<?php $__env->startSection('main-content'); ?>
    <form action="./save-add-size" method="POST">
        <div class="mb-3 mt-3 form-group">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3 mt-3 form-group">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/size/addSize.blade.php ENDPATH**/ ?>