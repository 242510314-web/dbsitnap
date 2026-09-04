<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Isi title yang kita kirimkn dari views lain-->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!--memanggil link bootstraps-->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    
<div class="container">

    <?php if(session('success')): ?>
        <div class="alert alert-primary">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

</div>

</body>
</html><?php /**PATH C:\laragon\www\siti\dbsitnap\resources\views\layouts\app.blade.php ENDPATH**/ ?>