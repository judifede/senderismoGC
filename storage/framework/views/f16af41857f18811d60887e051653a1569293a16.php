<?php $__env->startSection('content'); ?>
    <!--contenedor slider = #c-slider-->
    <div id="c-slider">
        <div id="slider">
            <section>
                <img src="img/FotosGaleria/BARRANCO DE LOS CERNICALOS.jpg" alt="">
            </section>

            <section>
                <img src="img/FotosGaleria/CALDERA PINOS DE GALDAR.jpg" alt="">
            </section>

            <section>
                <img src="img/FotosGaleria/CRUZ DE TEJEDA2.jpg" alt="">
            </section>

            <section>
                <img src="img/FotosGaleria/TAMADABA.jpg" alt="">
            </section>
        </div>
        
        <div id="btn-prev">&#60;</div>
        <div id="btn-next">&#62;</div>
    </div>
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/slider.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', ['galeriaStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>