<?php $__env->startSection('main-content'); ?>
    <form action="./save-edit-banner?id=<?php echo e($banner->id); ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3 mt-3 form-group">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3 mt-3 form-group">
            <img style="width: 150px;height: 150px;" src="<?php echo e($banner->image); ?>">
        </div>
        <div class="mb-3 mt-3 form-group">
            <label class="form-label">Brand</label>
            <select name="brand_id" class="form-control">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($brand->id); ?>"
                        <?php if($brand->id == $banner->brand_id): ?>
                            selected
                        <?php endif; ?>    
                    ><?php echo e($brand->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/banner/editBanner.blade.php ENDPATH**/ ?>