<?php $__env->startSection('aimeos_header'); ?>
     <?= $aiheader['checkout/standard'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_body'); ?>
    <?= $aibody['checkout/standard'] ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>