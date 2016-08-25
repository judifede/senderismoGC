<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="contenedor">
        <h1>Bienvenido a nuestro foro</h1>
        <div id="showing">
            <strong>Showing: </strong>
            <button>All</button>
            <button>Open</button>
            <button>Solved</button>
        </div>
        <?php if (Gate::check('create_post',$users)): ?>
        <?php echo e(Form::open(array('url' => 'forum/create'))); ?>

            <?php echo e(Form::submit('Crear Nuevo Post', ['id' => 'crearPost'])); ?>

        <?php echo e(Form::close()); ?>

        <?php endif; ?>
        <article class="hilosActuales">
            <img src="<?php echo e(asset('img/comunidad/userThais.png')); ?>" class="fotoUser">
            <h4>Experiencias</h4>
            <p>Posted by <strong>Thais</strong>. Publicado el dia: 2016-03-10 11:37:08</p>
        </article>
        <article class="hilosActuales">
            <img src="<?php echo e(asset('img/comunidad/userDiego.png')); ?>" class="fotoUser">
            <h4>Sugerencias para la página</h4>
            <p>Posted by <strong>Diego</strong>. Publicado el dia: 2016-03-11 09:10:42</p>
        </article>
        
    </section>
    <img src="img/icons/flecha-arriba.svg" id="flechaSubir" onclick="window.scrollTo(0, 0)"/>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', ['comunidadStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>