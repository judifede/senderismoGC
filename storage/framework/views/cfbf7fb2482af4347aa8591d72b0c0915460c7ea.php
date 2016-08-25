<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(['route' => 'forum.store','method'=>'POST'])); ?>

        <?php echo csrf_field(); ?>

        <?php echo e(Form::textarea('post', null, ['size' => '60x8'])); ?>

        <?php echo e(Form::submit('Enviar Post')); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', ['comunidadStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>