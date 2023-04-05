<?php $__env->startSection('main-content'); ?>
    <form action="./save-add-product" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="mb-3 mt-3 form-group">
            <label for="email" class="control-label">Name</label>
            <input type="text" name="name" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Price</label>
            <input type="text" name="price" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Image</label>
            <input class="form-control" type="file" name="image" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label for="" class="control-label">Brand</label>
            <select name="brand_id" id="" class="form-control" required>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/product/addProduct.blade.php ENDPATH**/ ?>