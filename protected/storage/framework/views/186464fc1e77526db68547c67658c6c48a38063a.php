<html>
    <head>
        <title>Admin - <?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <h1>Administrator</h1>
        <?php $__env->startSection('sidebar'); ?>
            <h3>Đây là sidebar chính.</h3>
        <?php echo $__env->yieldSection(); ?>
 
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>