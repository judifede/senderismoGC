<h1>Bienvenido/a <?php echo e(Auth::user()->username); ?></h1>

<a href="<?php echo e(url()); ?>/auth/confirm/email/<?php echo e('email'); ?>/confirmation_code/<?php echo e('confirmation_code'); ?>">Confirmar mi cuenta</a>
