<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>estilo.css">

    <br>
<?php if ($data!==""){?>
    <div class="alert alert-success"> 
            <?php echo $data;?> 
        <a href= "mostrarCarrito.php" class="badge badge-success">Ver Carrito</a> 
    </div>
    <?php }?>
    <div class="row">
    <?php
        $sentencia=$pdo->prepare("SELECT* from tbl_productos WHERE stock='1'");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
       // print_r($listaProductos);
    ?>
    <?php
    foreach($listaProductos as $producto){?>
<div class="col-4">
        <div class="card alert alert-danger">
            <img 
            title="<?php echo $producto['Nombre'];?>"
            alt="<?php echo $producto['Nombre'];?>"         
            alt="<?php echo $producto['Talla'];?>"
            class="card-img-top" 
            src ="<?php echo$producto['Imagen'];?>"
            height="260px"
            >

            <div class="card-body">
            <span><?php echo $producto['Nombre'];?> </span>
            <h4 class="card-title" >Talla: <?php echo $producto['Talla'];?></h4>
                <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                <p class="card-text">"<?php echo $producto['Descripcion'];?>"</p>

                <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt ($producto['ID'], COD,KEY);?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $producto['Nombre'],COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt ($producto['Precio'],COD,KEY);?>">
                <input type="hidden" name="cantidad" id="cantidad"value="<?php echo openssl_encrypt (1,COD,KEY);?>">
                <button class="btn btn-primary" 
                name="btnAccion" 
                value="agregar" 
                type="submit">
                Agregar a la compra</button>
                </form> 
            </div>
        </div>
    </div>
    <?php } ?>
    <?php 
     include'templates/pie.php'; ?>
    