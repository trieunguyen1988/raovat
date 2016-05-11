 
<?php $__env->startSection('title', 'Tiêu đề trang'); ?>
 
<?php $__env->startSection('sidebar'); ?>
    @parent
 
    <p>Đây là phần thêm vào bên dưới sidebar chính ở layout.</p>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <p>Đây là phần nội dung trong trang.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>