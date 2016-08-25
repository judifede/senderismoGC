<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="contenedor">
        <h1>Bienvenido a nuestro foro</h1>
        <article class="hilo">
            <div class="perfil" >
                <p class="nombreUser">Thais</p>
                <img src="img/comunidad/user.png" class="fotoUser" />
            </div>
            <div class="texto">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis, tortor eu feugiat eleifend, augue metus laoreet purus, vel tincidunt ligula orci non nisl. Nullam sed erat volutpat erat porta accumsan non non turpis.</p>
            </div>

            <p class="publiUser">Publicado el dia: 17/12/2000 a las 17:00</p>
        </article>
        <article class="hilo">
            <div class="perfil" >
                <p class="nombreUser" >Judi</p>
                <img src="img/comunidad/user.png" class="fotoUser" />
            </div>
            <div class="texto">
                <p>Me encanta este foro!,augue metus laoreet purus, vel tincidunt ligula orci non nisl. Nullam sed erat volutpat erat porta accumsan non non turpis.</p>
            </div>

            <p class="publiUser">Publicado el dia: 17/12/2000 a las 17:00</p>
        </article>
        <article class="hilo">
            <div class="perfil" >
                <p class="nombreUser" >Perchita</p>
                <img src="img/comunidad/user.png" class="fotoUser" />
            </div>
            <div class="texto">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis, tortor eu feugiat eleifend, augue metus laoreet purus, vel tincidunt ligula orci non nisl. Nullam sed erat volutpat erat porta accumsan non non turpis.</p>
            </div>
            <p class="publiUser">Publicado el dia: 17/12/2000 a las 17:00</p>
        </article>

        
        
        <?php echo e(Form::open(array('url' => 'forum/create'))); ?>

            <?php echo e(Form::submit('Crear Nuevo Post')); ?>

        <?php echo e(Form::close()); ?>

    </section>
    <img src="img/icons/flecha-arriba.svg" id="flechaSubir" onclick="window.scrollTo(0, 0)" />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.senderism', ['comunidadStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>