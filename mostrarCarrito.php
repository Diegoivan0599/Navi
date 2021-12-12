<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
;

?>
<br>
<h3>Lista de Carrito</h3>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>estilo.css">

<?php if(!empty ($_SESSION['CARRITO'])){?>
<table class="table table table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0;?>
       <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <tr>
            <td width="40%"><?php echo $producto['Nombre']?></td>
            <td width="15%" class="text-center"><?php echo $producto['Cantidad']?></td>
            <td width="20%" class="text-center">$<?php echo $producto['Precio']?></td>
            <td width="20%" class="text-center">$<?php echo number_format($producto['Precio']*$producto['Cantidad'],2);?></td>
            <td width="5%" class="text-center">
            <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
          <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button></td>

            </form>
        </tr>
        <?php $total=$total+($producto['Precio']*$producto['Cantidad']);?>
        <?php }?>

        <tr>
        <td colspan="3" align="right"><h3>Total</h3></td>
        <td align="right"><h3>$<?php echo number_format($total,2);?></h3> </td>
        <td></td>
        
        </tr>
        <tr>
        <td colspan="=5">
        <form action="pagar.php" method="post">
        <div class="alert alert-danger  ">
        <div class="form-group align-center">
            <label for="my-input">Correo de contacto:</label>
            <input id="email" class="form-control" type="email" name="email" placeholder="Ingrese Su correo de contacto" required>
            </div>
            <small id="emailHelp"
            class="fomr-text text-muted">Se le confirmara la compra en este correo</small><br>
            <label for="my-input">Contraseña:</label>
            <input id="email" class="form-control" type="password" name="contra" placeholder="Ingrese Su contraseña de acceso" required>
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="bntAccion" value="proceder">Ir a Pagar</button>
        </form>
                </td>
        </tr>



    </tbody>
</table>
<?php } else{?>
<div class="alert alert-success">
No hay productos en el carrito
</div>
<?php };
include 'templates/pie.php'; ?>
