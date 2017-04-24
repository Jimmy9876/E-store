<?php $__env->startSection('aimeos_scripts'); ?>
	##parent-placeholder-61281cf43bb2886fb221a3f42295d941045fa3c3##
    <script type="text/javascript" src="<?php echo asset('packages/aimeos/shop/themes/aimeos-detail.js'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_header'); ?>
    <?= $aiheader['basket/mini'] ?>
    <?= $aiheader['catalog/stage'] ?>
    <?= $aiheader['catalog/detail'] ?>
    <?= $aiheader['catalog/session'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_head'); ?>
    <?= $aibody['basket/mini'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_stage'); ?>
    <?= $aibody['catalog/stage'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_body'); ?>
    <?= $aibody['catalog/detail'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_aside'); ?>
    <?= $aibody['catalog/session'] ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>