<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert">
            <?php echo e(session('success')); ?>

            <?php echo Form::open(['route' => '/comunidad']); ?>

                <?php echo e(Form::button('Volver a debate intenso')); ?>

            <?php echo Form::close(); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', ['comunidadStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>