<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <form action="./save-edit-banner?id=<?php echo e($banner->id); ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <img style="width: 150px;height: 150px;" src="<?php echo e($banner->image); ?>">
            </div>
            <div class="mb-3 mt-3">
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
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/banner/editBanner.blade.php ENDPATH**/ ?>