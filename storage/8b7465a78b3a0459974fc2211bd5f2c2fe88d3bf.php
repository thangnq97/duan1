<?php $__env->startSection('main-content'); ?>
    <form action="./save-edit-voucher?id=<?php echo e($voucher->id); ?>" method="POST" data-toggle="validator" role="form">
        <div class="form-group">
            <label class="control-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($voucher->name); ?>" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Discount</label>
            <input type="text" name="discount" class="form-control" value="<?php echo e($voucher->discount); ?>" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Min Price</label>
            <input type="text" name="min_price" class="form-control" value="<?php echo e($voucher->min_price); ?>" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Quanity</label>
            <input type="number" name="quanity" class="form-control" value="<?php echo e($voucher->quanity); ?>" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Expired</label>
            <input type="date" name="expired" class="form-control">
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/voucher/editvoucher.blade.php ENDPATH**/ ?>