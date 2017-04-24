<?php $__env->startSection('aimeos_header'); ?>
    <?= $aiheader['basket/mini'] ?>
    <?= $aiheader['account/profile'] ?>
    <?= $aiheader['account/history'] ?>
    <?= $aiheader['account/favorite'] ?>
    <?= $aiheader['account/watch'] ?>
    <?= $aiheader['catalog/session'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_head'); ?>
    <?= $aibody['basket/mini'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_body'); ?>
    <?= $aibody['account/profile'] ?>
    <?= $aibody['account/history'] ?>
    <?= $aibody['account/favorite'] ?>
    <?= $aibody['account/watch'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_aside'); ?>
    <?= $aibody['catalog/session'] ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>