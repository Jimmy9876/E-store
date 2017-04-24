<?php $__env->startSection('aimeos_header'); ?>
    <?= $aiheader['basket/standard'] ?>
    <?= $aiheader['basket/related'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_body'); ?>
    <?= $aibody['basket/standard'] ?>
    <?= $aibody['basket/related'] ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>