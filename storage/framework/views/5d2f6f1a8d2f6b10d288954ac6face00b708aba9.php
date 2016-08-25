<?php $__env->startSection('content'); ?>
    <section class="contenedor">
        <h1>Senderos de Gran Canaria</h1>
        <select>
            <option>Filtrar por: </option>
            <option>Duración</option>
            <option>Dificultad</option>
            <option>Recomendadas</option>
        </select>
        <article>
            <a href="" class="infoCerrada cerrado" onclick="activar(1); return false;">
                <img src="img/icons/flecha-abajo.svg" id="flecha1" alt="flechaabajo"/>
                <h2>Roque Nublo</h2>
            </a>
            <div class="infoAbierta" id="info1">
                <img src="img/fotos/ROQUE NUBLO 4.jpg" id="roqueNublo1" alt="RoqueNublo1"/>
                <strong><p>Descripción</p></strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere in nisl efficitur placerat. Curabitur ipsum odio, 
                pharetra eget diam a, ultricies finibus dui. Nulla et egestas nulla. Etiam accumsan massa orci, id bibendum augue mattis sit amet. 
                Cras non risus quis ex tristique sodales sed ac justo.</p>
                <div class="duracion"><img src="img/icons/clock.svg" id="clock" alt="clock"/><p>Duración aproximada: 1 h. 45 min.</p></div>
                <strong><p class="localizacion">Localización</p></strong>
                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d19933.306814825733!2d-15.621837849284757!3d27.971122159075367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x0%3A0xb269dbd67d50e6cc!2sRoque+Nublo!3m2!1d27.9702053!2d-15.612548599999998!4m5!1s0xc40860d20985bed%3A0xb269dbd67d50e6cc!2sRoque+Nublo%2C+35360+Isla+de+Gran+Canarias%2C+Las+Palmas!3m2!1d27.9702053!2d-15.612548599999998!5e0!3m2!1ses!2ses!4v1457601054611" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               

            </div>

        </article>
        <article>
            <a href="" class="infoCerrada cerrado" onclick="activar(2); return false;">
                <img src="img/icons/flecha-abajo.svg" id="flecha2" alt="flechaabajo"/>
                <h2>Tenteniguada</h2>
            </a>
            <div class="infoAbierta" id="info2">
                <img src="img/fotos/ROQUE NUBLO 4.jpg" id="roqueNublo1" alt="RoqueNublo1" />
                <strong><p>Descripción</p></strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere in nisl efficitur placerat. Curabitur ipsum odio, 
                pharetra eget diam a, ultricies finibus dui. Nulla et egestas nulla. Etiam accumsan massa orci, id bibendum augue mattis sit amet. 
                Cras non risus quis ex tristique sodales sed ac justo.</p>
                <div class="duracion"><img src="img/icons/clock.svg" id="clock" alt="clock"/><p>Duración aproximada: 1 h. 45 min.</p></div>
                <strong><p class="localizacion">Localización</p></strong>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9965.100861319394!2d-15.52820302188829!3d27.987923802803216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc4090be08ef940d%3A0xa0d2cef945aaa1cb!2s35216+Tenteniguada%2C+Las+Palmas!5e0!3m2!1ses!2ses!4v1457604701995" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

               
            </div>
        </article>
        <article>
            <a href="" class="infoCerrada cerrado" onclick="activar(3); return false;">
                <img src="img/icons/flecha-abajo.svg" id="flecha3" alt="flechaabajo" />
                <h2>Barranco de los Cernícalos</h2>
            </a>
            <div class="infoAbierta" id="info3">
                <img src="img/fotos/ROQUE NUBLO 4.jpg" id="roqueNublo1" alt="RoqueNublo1"/>
                <strong><p>Descripción</p></strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla posuere in nisl efficitur placerat. Curabitur ipsum odio, 
                pharetra eget diam a, ultricies finibus dui. Nulla et egestas nulla. Etiam accumsan massa orci, id bibendum augue mattis sit amet. 
                Cras non risus quis ex tristique sodales sed ac justo.</p>
                <div class="duracion"><img src="img/icons/clock.svg" id="clock" alt="clock"/><p>Duración aproximada: 1 h. 45 min.</p></div>
                <strong><p class="localizacion">Localización</p></strong>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14094.930990243764!2d-15.492859380750662!3d27.971469897215872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc4099e287898c65%3A0x13af2a0defc5dc50!2sBarranco+de+los+Cern%C3%ADcalos%2C+Las+Palmas!5e0!3m2!1ses!2ses!4v1457604821953" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                
            </div>
        </article>
    </section>
    <img src="img/icons/flecha-arriba.svg" id="flechaSubir" onclick="window.scrollTo(0, 0)"/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', ['rutasStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>