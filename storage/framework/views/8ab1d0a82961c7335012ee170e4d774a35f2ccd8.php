<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section class="contenedor">
        <h1>Últimos mensajes enviados al foro</h1>
        <article class="hilo">
            <?php foreach($users as $user): ?>
            <div class="perfil" >
                <p class="nombreUser"><?php echo e($user->username); ?></p>
                <img src="img/comunidad/user.png" class="fotoUser"/>
            </div>
                <?php foreach($posts as $post): ?>
                <div class="texto">
                    <?php if($post->user_id == $user->id): ?>
                    <p><?php echo e($post->post); ?></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            <?php endforeach; ?>

            <p class="publiUser">Publicado el dia: <?php echo e($post->created_at); ?></p>
        </article>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', ['comunidadStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>