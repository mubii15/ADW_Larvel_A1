<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(\Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(\Session::get('success')); ?>

        </div>
    <?php endif; ?>
   
    <div class="row">
       <a href="<?php echo e(url('/create/ticket')); ?>" class="btn btn-success">Create Ticket</a>
       <a href="<?php echo e(url('/tickets')); ?>" class="btn btn-default">All Tickets</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>