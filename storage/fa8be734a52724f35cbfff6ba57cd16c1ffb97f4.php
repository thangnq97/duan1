<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/product-detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="container">
     <div class="detail">
        <div class="row">
            <img class="img" src="<?php echo e($item->image); ?>">
        </div>
        <div class="left">
            <h4><?php echo e($item->name); ?></h4>
            <p class="content-item2"><?php echo e($item->price); ?>đ</p>
        </div>
        <div class="list-detail">
            <form action="add-cart?id=<?php echo e($item->id); ?>" method="POST">
                <div class="list">
                    <input class="number" type="number" name="quanity" value="1">
                    <button class="content-item3" type="submit" name="submit">Đặt hàng</button>
                </div>
                <div class="list">
                    <h3>Chọn size</h3>
                    <div class="content-radio">
                        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($k == 0): ?>
                                <label>
                                    <input checked type="radio" name="size" value="<?php echo e($v->id); ?>"> Size <?php echo e($v->name); ?>

                                </label>
                            <?php else: ?>
                            
                                <label>
                                    <input type="radio" name="size" value="<?php echo e($v->id); ?>"> Size <?php echo e($v->name); ?>

                                </label>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
    
                <div class="list">
                    <h3>Chọn đường</h3>
                    <div class="content-radio"><label>
                        <input checked type="radio" name="sugar" value="50">
                      50% đường
                      </label>
                      <label>
                        <input type="radio" name="sugar" value="70">
                       70% đường
                      </label>
                      <input type="radio" name="sugar" value="100">
                     100% đường
                      </label>
                      <input type="radio" name="sugar" value="0">
                     không đường
                       </label>
                    </div>
                </div>
                <div class="list">
                    <h3>Chọn đá</h3>
                    <div class="content-radio"><label>
                        <input checked type="radio" name="ice" value="50">
                      50% đá
                      </label>
                      <label>
                        <input type="radio" name="ice" value="70">
                       70% đá
                      </label>
                      <label>
                        <input type="radio" name="ice" value="100">
                       100% đá
                      </label>
                      <label>
                      <input type="radio" name="ice" value="0">
                        không đá
                      </label>
                    </div>
                </div>
                <div class="list">
                    <h3>Chọn Topping</h3>
                    <div class="content-radio2">
                        <?php $__currentLoopData = $topping; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="topping">
                                <label for="topping<?php echo e($top->id); ?>">
                                    <input type="checkbox" name="topping[]" id="topping<?php echo e($top->id); ?>" value="<?php echo e($top->id); ?>"> Thêm <?php echo e($top->name); ?>

                                </label>
                                <p>+ <?php echo e($top->price); ?>đ</p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </form>
           <a href="./all-product"> <button class="content-item4">Quay Về</button> </a>
           <h4 for="comment">Bình luận của khách hàng:</h4>
           <div class="id-comment">
               <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="box">
                        <div class="box-conent">
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->id == $com->user_id): ?>
                                    <h5><?php echo e($user->username); ?>: </h5>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo e($com->content); ?></p>
                        </div>
                        <h5><?php echo e($com->create_at); ?></h5>
                    </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if($user): ?>
                <form method="POST" action="./add-comment?id=<?php echo e($item->id); ?>">
                    <input type="hidden" value="<?php echo e($user['id']); ?>" name="user_id">
                    <input type="hidden" value="<?php echo e($item->id); ?>" name="product_id">
                    <h4 for="content">Bình luận:</h4>
                    <textarea id="content" name="content" required></textarea>
                    <input type="submit" name="submit" value="Gửi">
                </form>
            <?php else: ?>
                <p>Vui lòng đăng nhập để bình luận <i class="fa-solid fa-arrow-right"></i> <a href="./sign-in?id=<?php echo e($item->id); ?>">Sign in</a></p>    
            <?php endif; ?>
          
            
        </div>
        
     </div> 
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\duan1\app\views/user/productDetail.blade.php ENDPATH**/ ?>