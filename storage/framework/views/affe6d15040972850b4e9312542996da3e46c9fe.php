<?php $__env->startSection('content'); ?>
    <h1>Gracias por registrarte <?php echo e($data['username']); ?>. Bienvenido a Senderismo GC </h1>

        <div>
            <a href="<?php echo e(url()); ?>/auth/confirm/email/<?php echo e($data['email']); ?>/confirm_token/<?php echo e($data['confirm_token']); ?>">Please follow the link below to verify your email</a>.<br/>

            If you have problems, please paste the above URL into your web browser.
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>