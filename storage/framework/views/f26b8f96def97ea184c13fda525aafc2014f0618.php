<?php $__env->startSection('content'); ?>
    <section class="contenedor">
        <h1>Elija una ruta</h1>
        <select>
            <option>Filtrar por: </option>
            <option>Duración</option>
            <option>Dificultad</option>
            <option>Recomendadas</option>
        </select>
        <article>
            <a href="" class="infoCerrada cerrado" onclick="activar(1); return false;">
                <img src="icons/flecha-abajo.svg" id="flecha1" alt="flechaabajo"/>
                <h2>Ruta 1</h2>
            </a>
            <div class="infoAbierta" id="info1">
                <img src="img/Ruta1.jpg"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere in nisl efficitur placerat. Curabitur ipsum odio, 
                pharetra eget diam a, ultricies finibus dui. Nulla et egestas nulla. Etiam accumsan massa orci, id bibendum augue mattis sit amet. 
                Cras non risus quis ex tristique sodales sed ac justo. Integer gravida nunc non gravida tincidunt. Aenean varius nulla augue, 
                quis sollicitudin dolor pharetra at.</p>
                
            </div>

        </article>
        <article>
            <a href="" class="infoCerrada cerrado" onclick="activar(2); return false;">
                <img src="icons/flecha-abajo.svg" id="flecha2" alt="flechaabajo"/>
                <h2>Ruta 2</h2>
            </a>
            <div class="infoAbierta" id="info2">
                <img src="img/Ruta1.jpg"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere in nisl efficitur placerat. Curabitur ipsum odio, 
                pharetra eget diam a, ultricies finibus dui. Nulla et egestas nulla. Etiam accumsan massa orci, id bibendum augue mattis sit amet. 
                Cras non risus quis ex tristique sodales sed ac justo. Integer gravida nunc non gravida tincidunt. Aenean varius nulla augue, 
                quis sollicitudin dolor pharetra at.</p>
            </div>
        </article>
    </section>
    <img src="icons/flecha-arriba.svg" id="flechaArriba" onclick="window.scrollTo(0, 0)"/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>