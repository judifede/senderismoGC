<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Senderismo GC</title>
    <link rel="shortcut icon" href="<?php echo e(asset('img/Logo.ico')); ?>" type="image/x-icon">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
    <?php if(isset($loginStyle) && $loginStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <?php endif; ?>
    <?php if(isset($indexStyle) && $indexStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <?php endif; ?>
    <?php if(isset($rutasStyle) && $rutasStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/sendero.css')); ?>">
    <?php endif; ?>
    <?php if(isset($estadoStyle) && $estadoStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/estado.css')); ?>">
    <?php endif; ?>
    <?php if(isset($eventoStyle) && $eventoStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/event.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/calendar.css')); ?>">
    <?php endif; ?>
    <?php if(isset($normativaStyle) && $normativaStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/normativa.css')); ?>">
    <?php endif; ?>
    <?php if(isset($comunidadStyle) && $comunidadStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/comunidad.css')); ?>">
    <?php endif; ?>
    <?php if(isset($galeriaStyle) && $galeriaStyle): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/galery.css')); ?>">
    <?php endif; ?>

</head>
<body onscroll="estadoScroll()" onload="ponerSeleccion(), cambiaFotoUserMenu()">
    <header>
        <p>Senderismo Gran Canaria</p>
        <p>Vive una experiencia única</p>
    </header>
    <nav class="main-nav" >       
        <!-- Left Side Of Navbar -->
            <ul>
                <li id="liHome" ><a href="<?php echo e(url('/')); ?>" name="home">
                <img src="<?php echo e(asset('img/icons/home.svg')); ?>" alt="Home" id="home" ></a></li>
                <li class="dropdown" onmouseleave="contraer()" onmouseover="desplegar2()" id="menuSenderos">
                <a href="javascript:void(0)" class="dropbtn" name="senderos" onmouseover="desplegar2()">
                    <img src="<?php echo e(asset('img/icons/sendero.svg')); ?>" alt="Senderos" id="senderos" class="iconos" >
                    Senderos
                </a>
                <div class="dropdown-content" id="senderosDropdown" >
                    <a href="<?php echo e(url('sendero')); ?>"><img src="<?php echo e(asset('img/icons/address.svg')); ?>" alt="Ruta" id="ruta" class="iconos" >Rutas</a>
                    <a href="<?php echo e(url('estado')); ?>"><img src="<?php echo e(asset('img/icons/flag.svg')); ?>" alt="Estado" id="estado" class="iconos" >Estado de los senderos</a>
                    <a href="<?php echo e(url('normativa')); ?>"><img src="<?php echo e(asset('img/icons/news.svg')); ?>" alt="Normativa" id="normativa" class="iconos" >Normativa</a>
                </div>
                </li>
                <li class="dropdown" onmouseleave="contraer2()" onmouseover="desplegar3()" id="menuMovil">
                <a href="javascript:void(0)" class="dropbtn" name="desplegableMovil" onmouseover="desplegar3()"><img src="<?php echo e(asset('img/icons/menu.svg')); ?>" alt="DesplegableMovil" id="desplegableMovil" class="iconos" ></a>
                <div class="dropdown-content" id="dropdownMovil" >
                    <a href="<?php echo e(url('evento')); ?>" name="eventoMovil"><img src="<?php echo e(asset('img/icons/calendar.svg')); ?>" alt="EventoMovil" id="eventoMovil" class="iconos" ></a>
                    <a href="<?php echo e(url('comunidad')); ?>" name="comunidadMovil"><img src="<?php echo e(asset('img/icons/comunidad.svg')); ?>" alt="ComunidadMovil" id="comunidadMovil" class="iconos" ></a>
                    <a href="<?php echo e(url('multimedia')); ?>" name="multimediaMovil"><img src="<?php echo e(asset('img/icons/video-camera.svg')); ?>" alt="MultimediaMovil" id="multimediaMovil" class="iconos" ></a>
                </div>
                </li>
                <li id="listaEvento"><a href="<?php echo e(url('evento')); ?>" name="evento"><img src="<?php echo e(asset('img/icons/calendar.svg')); ?>" alt="Evento" id="evento" class="iconos" >Eventos</a></li>
                <li id="listaComunidad"><a href="<?php echo e(url('comunidad')); ?>" name="comunidad"><img src="<?php echo e(asset('img/icons/comunidad.svg')); ?>" alt="Comunidad" id="comunidad" class="iconos" >Comunidad</a></li>
                <li id="listaMultimedia"><a href="<?php echo e(url('multimedia')); ?>" name="multimedia"><img src="<?php echo e(asset('img/icons/video-camera.svg')); ?>" alt="Multimedia" id="multimedia" class="iconos" >Multimedia</a></li>

            <!-- Right Side Of Navbar -->
                 <ul id="der">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li class="liAuthentication, dropdownUser"><a href="<?php echo e(url('/login')); ?>" name="acceder"><img src="<?php echo e(asset('img/icons/login.svg')); ?>" alt="Acceder" id="acceder" class="iconos" >Acceder</a></li>
                    <?php else: ?>
                        <li class="dropdown, dropdownUser" id="Autenticado">
                            <img src="" id="fotoUserMenu">
                            <a href="javascript:void(0)" class="dropbtn" onclick="desplegar()" id="enlaceUser" >
                                <?php echo e(Auth::user()->username); ?>

                            </a>
                                
                            <div class="dropdown-content" id="loginDropdown">
                                <a href="#"><img src="<?php echo e(asset('img/icons/tools.svg')); ?>" alt="Ajustes" id="ajustes" class="iconos" >Ajustes</a>
                                <a href="<?php echo e(url('/logout')); ?>"><img src="<?php echo e(asset('img/icons/logout.svg')); ?>" alt="Salir" id="salir" class="iconos" >Salir</a>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </ul>
        </div>
    </nav>
    
    <?php echo $__env->yieldContent('content'); ?>
    <footer>
        <div id="footerIzq">
            <p id="about">Sobre nosotros</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis.</p>
        </div>
        <div id="footerCen">
            <p>&#169; Copyright 2016, Desarrollado por Thais Hernández y Diego Fernández.</p>
        </div>
        <div id="footerDer">
            <img src="<?php echo e(asset('img/icons/instagram.svg')); ?>" class="redesSociales" />
            <img src="<?php echo e(asset('img/icons/facebook.svg')); ?>" class="redesSociales" />
            <img src="<?php echo e(asset('img/icons/twitter.svg')); ?>" class="redesSociales" />
        </div>
    </footer>
    <!-- JavaScripts -->
    <script src="<?php echo e(asset('js/dropdown_navbar.js')); ?>"></script>
    <script src="<?php echo e(asset('js/login.js')); ?>"></script>
    <script src="<?php echo e(asset('js/common.js')); ?>"></script>
    <script src="<?php echo e(asset('js/expand.js')); ?>"></script>
    <script src="<?php echo e(asset('js/menuActivo.js')); ?>"></script>
</body>
</html>
