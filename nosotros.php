<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>estilo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>nosotros.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=yes, maximun-scale=3.0, minimum-scale=1.0">
<title>Navi Kicks | Nosotros</title>   
</head>
<body>
<header class="main-header">
    <div class="container container--flex">
    <div class="logo-container column--50">
        <img src="img/Navi.png"  class="logo" alt="">
    </div>
    <div class="main-header_contactoInfo column--50">
        <p class="main-header__contactoInfo__phone">
            <span class="icon-whatsapp">55-83-21-14-84</span>
        </p>
    <p class="main-header__contactInfo__adress">
        <span class="icon-correo">navikicks@gmail.com</span>
    </p>
    </div>
    </div>
</header>
<nav class="main-nav">
    <div class="container container--flex">
        <span class="icon-menu" id="btnmenu"></span>
        <ul class="menu" id="menu">
            <li class="menu__item"><a href="index.php" class="menu__link ">Inicio</a></li>
            <li class="menu__item"><a href="nosotros.php" class="menu__link menu__link--select">Nosotros</a></li>
            <li class="menu__item"><a href="catalogo.php" class="menu__link">Catalogo</a></li>
            <li class="menu__item"><a href="mostrarCarrito.php" class="menu__link">Carrito(<?php echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);  
            ?>)</a></li>
            <li class="menu__item"><a href="contacto.php" class="menu__link">Contacto</a></li>
        </ul>
        <div class="social-icon">
            <a href="facebook.com" class="social-icon__link"><span class="icon-facebook"></span></a>
            <a href="instagram.com" class="social-icon__link"><span class="icon-instagram"></span></a>
            <a href="registro.php" class="social-icon__link"><span class="icon-login"></span></a>
    </div>
    </div>
</nav>
<section class="banner"><img  class="banner__img" src="https://cdn.sanity.io/images/c1chvb1i/production/fbcedb37c7bfd26a529442642a5ca503255aec8c-640x426.jpg/raf-simons-adidas-response-trail-robot-silver-3.jpg" > <div class="banner__content">Nuestro equipo siempre está a tu servicio</div></section>
<main class="main">
<section class="group group--color">
        <div class="container">
            <h2 class="main__title">¿Por que somos tu mejor opcion?</h2>
            <p class="main__txt">Llevamos mucho tiempo en el mundo de los sneakers, buscamos acercarnos a las tendencias actuales y siempre traer los productos mas buscados y los mejores del mercado</p>     
        </div>
    </section>
    <section class="group our-team">
        <h2 class="group__title">Navi Kicks Ofrece:</h2>
        <div class="container container__flex">
            <div class="column column--33">
                <h3 class="our-team__title">Actualizacion de Stock semanal</h3>
                <img class= "our-team__img" src="https://scontent.fmex11-2.fna.fbcdn.net/v/t1.6435-9/173781925_1093523397803590_8105613881827547562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeEg-6WYYEoPk2B9LC5qNly1ntDjc4HKtXCe0ONzgcq1cGirJZlVjj_tRdWALoofi1Am30h5VzSz92BlbG6JoZwk&_nc_ohc=KI2gSQTTxxgAX9QQyJu&_nc_oc=AQmFQ5kg-UvQvcNE1wMkp-2svA6r770j8qp2AeSGkGXlPIlnOUq43PPbwaQ4GPn6FqavtbBBhakQ9lw3uFeOZARj&tn=J27cnMdx5LWq-uma&_nc_ht=scontent.fmex11-2.fna&oh=120573c113aa009e36ae505348bfda34&oe=61AC6AC1">
                <p class="our-team__txt">Navi Kicks le ofrece una actualizacion del catalogo de productos disponibles de manera semanal, esto permite que siempre encuentre los lanzamientos mas recientes y buscados con nosotros</p>
            </div>
            <div class="column column--33">
                <h3 class="our-team__title">Diferentes metodos de pago</h3>
                <img class= "our-team__img" src="https://scontent.fmex11-4.fna.fbcdn.net/v/t1.6435-9/32952130_2168526523162655_200633251134439424_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeGZIw4fQVg2qpBTL6diN_nChs50vrrTpPiGznS-utOk-Pvy3Q3X0XHm_qskUXLFW3uCDFZ-DLnqgHcLVAZ0RhlE&_nc_ohc=gBYGksOAZ_oAX-CPrCD&_nc_ht=scontent.fmex11-4.fna&oh=11b5549bd5f1b029e2964872b35d82f9&oe=61AB1F09">
                <p class="our-team__txt">En Navi Kicks nos adaptamos a tus formas de pago, ofreciendote opciones de pago via Paypal o si es de tu preferencia por transferencia bancaria o entregas personales en la Ciudad de México</p>
            </div>
            <div class="column column--33">
                <h3 class="our-team__title">Los mejores lanzamientos a lso mejores precios</h3>
                <img class= "our-team__img" src="https://scontent.fmex11-2.fna.fbcdn.net/v/t1.6435-9/142352527_1040504439772153_8495931788968697427_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeEZo8x4IBu8jC8Lkxl5m6uTH2001BN66ykfbTTUE3rrKS24Q1NeA3bbSmycgYEvzfArI20y7Kn5ZzNvY1C6-weC&_nc_ohc=pEuWIH0ezy4AX9evQ4r&_nc_ht=scontent.fmex11-2.fna&oh=5b756b03f573a096ea486efc6d834543&oe=61AB0555" alt="" class="our-team__img">
                <p class="our-team__txt">Con nosotros nunca te perderas de ningun lanzamiento, todos los lanzamientos recientes y futuros llegan a la tienda para ti con los mejores precios del mercado.</p>
            </div>
        </div>


    </section>
<?php include 'templates/pie.php'?>
</body></main>
<script src="js/lib/menu.js"></script>
</body>
</html>