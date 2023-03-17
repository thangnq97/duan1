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
        <form action="./save-edit-product?id=<?php echo e($product->id); ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo e($product->name); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Detail</label>
                <textarea class="form-control" name="detail" id="" cols="30" rows="10"><?php echo e($product->detail); ?></textarea>
            </div>
            <img src="<?php echo e($product->image); ?>" style="width: 200px;height: 200px;margin: 20px 0;">
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input class="form-control" type="file" name="image">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Brand</label>
                <select name="brand_id" id="" class="form-control">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($brand->id); ?>" <?php if($brand->id == $product->brand_id): ?> selected <?php endif; ?>><?php echo e($brand->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/admin/editProduct.blade.php ENDPATH**/ ?>