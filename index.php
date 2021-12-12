
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=yes, maximun-scale=3.0, minimum-scale=1.0">
<title>Navi Kicks</title>   
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
            <li class="menu__item"><a href="index.php" class="menu__link menu__link--select">Inicio</a></li>
            <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
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
<section class="banner"><img  class="banner__img" src="img/banner.jpg" > <div class="banner__content">El par que necesitas esta aqui </div></section>
<main class="main">
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Bienvenido a la mejor opcion de compa</h2>
            <p class="main__txt">Aqui encontraras la mas selecta venta de sneakers a los mejores precios.</p>
            <p>Conoce nuestra variedad de productos y la calidad de nuestro servicio</p>     
        </div>
    </section>
    <section class="group especial">


    <div class="slider">
        <ul>
            <li><img src="https://images.stockx.com/images/Rick-Owens-x-Dr-Martens-1461-Bex-Derbys.jpg?fit=fill&bg=FFFFFF&w=480&h=320&auto=compress&q=90&dpr=1&trim=color&updated_at=1625238463&pad=0&fm=webp" alt=""></li>
            <li><img src="https://images.stockx.com/images/adidas-YZY-QNTM-Barium-Kids.png?fit=fill&bg=FFFFFF&w=480&h=320&auto=compress&q=90&dpr=1&trim=color&updated_at=1609436059&pad=0&fm=webp" alt=""></li>
            <li><img src="https://images.stockx.com/images/Air-Jordan-1-Retro-High-J-Balvin-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1608232129" alt=""></li>
            <li><img src="https://images.stockx.com/images/adidas-Ozweego-Raf-Simons-Bright-Yellow-Night-Navy-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1616757246" alt=""></li>
        </ul>
    </div>
</section>
    <section class="group main__about__description group--color ">
    <div class="container container--flex">
    <div class=" containter">
    <div class="column"></div>
  <h3 class="main__title">Gran variedad de productos</h3>
  <p class="main__txt">Nuestra amplia y variada seleccion de productos permite que encuentres el producto ideal para ti, ademas de ofrecerte los mejores precios del mercado</p>
<a href="contacto.php" class=" btn btn--contact">Ir a catalogo</a>
</div>
</div>
</section>
<section class="group our-team">
        <h2 class="group__title">Nuevos productos:</h2>
        <div class="container container__flex">
            <div class="column column--33">
                <h3 class="our-team__title">Vans x Comme Des Garcons</h3>
                <img class= "our-team__img" src="https://images.stockx.com/images/Vans-Authentic-Comme-des-Garcons-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1606767166">
                <p class="our-team__title" font-size=bold>Talla: 6MX</p>
                <p class="our-team__title" font-size=bold>$3500.00</p>

            </div>
            <div class="column column--33">
                <h3 class="our-team__title">Air Fear Of God Raid Black</h3>
                <img class= "our-team__img" src="https://images.stockx.com/images/Nike-Air-Fear-Of-God-Strap-Black-Product.jpg?fit=fill&bg=FFFFFF&w=480&h=320&auto=compress&q=90&dpr=1&trim=color&updated_at=1608522460&pad=0&fm=webp">
                <p class="our-team__title">Talla: 6MX</p>
                <p class="our-team__title">$5900.00</p>

            </div>
            <div class="column column--33">
                <h3 class="our-team__title"> Bad Bunny Pink Easter Egg</h3>
                <img class= "our-team__img" src="https://www.allcitycanvas.com/wp-content/uploads/2021/03/bad-bunny-presento-adidas-forum-buckle-low-pink-one.jpg">
                <p class="our-team__title">Talla: 7MX</p>
                <p class="our-team__title">$10000.00</p>

            </div>
        </div>
<?php include 'templates/pie.php'?>
</body></main>
<script src="js/lib/menu.js"></script>
</body>
</html>