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
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>contacto.css">


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
            <li class="menu__item"><a href="nosotros.php" class="menu__link ">Nosotros</a></li>
            <li class="menu__item"><a href="catalogo.php" class="menu__link">Catalogo</a></li>
            <li class="menu__item"><a href="mostrarCarrito.php" class="menu__link">Carrito(<?php echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);  
            ?>)</a></li>
            <li class="menu__item"><a href="contacto.php" class="menu__link menu__link--select">Contacto</a></li>
        </ul>
        <div class="social-icon">
            <a href="facebook.com" class="social-icon__link"><span class="icon-facebook"></span></a>
            <a href="instagram.com" class="social-icon__link"><span class="icon-instagram"></span></a>
            <a href="registro.php" class="social-icon__link"><span class="icon-login"></span></a>
    </div>
    </div>
</nav>
<section class="banner">
    <img  class="banner__img" src="https://www.thedropdate.com/wp-content/uploads/2019/06/S57WS0236-P2803-H4108_launches_hero_landscape_3_1.jpg" >
 <div class="banner__content">Contacta con nosotros</div></section>
<main class="main">
<section class="group contact">
<h2 class="group__title">Contactanos</h2>
    <div class="containter container--flex">
        <div class="contact-information column column--50">
        <h3 class="column__title">Informacion de contacto</h3>
        <p class="column__txt">Navi Kicks es una tienda ubicada en el oriente de la Ciudad de México, puedes contactar con nosotros via Redes sociales, o via telefono o correo, siempre estamos atentos a tus peticiones, sugerencias y reclamaciones.</p>
        <p class="column__txt">Telefono: 5514949633</p>
        <p class="column__txt">Correo: Landy@gmail.com</p>
        <p class="column__txt">Ubicación: Arena #55 delegacion Cuauthemoc</p>
        <p class="column__txt">Instagram: Navi_Kicks99</p>
        </div>
        <form action="" method="post" class="formulario column column--50">
        <label class="formulario__label">Nombre:</label>
        <input type="text" class="formulario-txt" name="nombre">
        <label class="formulario__label">Telefono:</label>
        <input type="text" class="formulario-txt" name="telefono">
        <label class="formulario__label">Correo:</label>
        <input type="text" class="formulario-txt" name="correo">
        <label class="formulario__label">Mensaje:</label>
        <textarea name="mensaje" id="" cols="30" rows="10" class="formulario__textarea"></textarea>
        <input type="submit" class="btn formulario__btn">
    </form>    
</div>
</section>
</main>
<?php include 'templates/pie.php'?>
<script src="js/lib/menu.js"></script>
</body>
</html>