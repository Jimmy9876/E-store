<?php $__env->startSection('aimeos_header'); ?>
    <?= $aiheader['basket/mini'] ?>
    <?= $aiheader['catalog/filter'] ?>
    <?= $aiheader['catalog/stage'] ?>
    <?= $aiheader['catalog/lists'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_head'); ?>
    <?= $aibody['basket/mini'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_nav'); ?>
    <?= $aibody['catalog/filter'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_stage'); ?>
    <?= $aibody['catalog/stage'] ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aimeos_body'); ?>
     <?= $aibody['catalog/lists'] ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>