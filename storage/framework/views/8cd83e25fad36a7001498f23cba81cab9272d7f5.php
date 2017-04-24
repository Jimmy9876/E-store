<?php $__env->startSection('aimeos_styles'); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('packages/aimeos/shop/themes/elegance/common.css')); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('packages/aimeos/shop/themes/elegance/aimeos.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('packages/aimeos/shop/themes/jquery-ui.custom.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('packages/aimeos/shop/themes/aimeos.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('packages/aimeos/shop/themes/elegance/aimeos.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>