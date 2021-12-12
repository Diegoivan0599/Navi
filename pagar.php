<?php
/* CORREO ACCESO A CUENTA landen69z_v628h@pebih.com
CONTRASEÑA: casa57003106 */


include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?> 

<?php
    $total=0;
    $SID= session_id();
    $Correo= $_POST['email'];
    $contra=$_POST['contra'];
    $sqll=("SELECT correo from tbl_clientes where correo='$Correo'AND clave='$contra'");
$result = mysqli_query($conexion,$sqll);
$row_cnt = mysqli_num_rows($result);

if($row_cnt>0){
    foreach($_SESSION['CARRITO'] as $indice=>$producto){

    $total=$total+($producto['Precio']*$producto['Cantidad']);

    
    }
    $sql=$pdo->prepare("INSERT INTO tbl_ventas (ClaveTransaccion, PaypalDatos, 
    Fecha, Correo, Total, status)
    VALUES (:ClaveTransaccion, :Correo, NOW(), :Correo, :Total, 'pendiente' );");

    $sql->bindParam(":ClaveTransaccion", $SID);
    $sql->bindParam(":Correo", $Correo);
    $sql->bindParam(":Total", $total);
    $sql->execute();

     $idVenta=$pdo->lastInsertId();

     foreach($_SESSION['CARRITO'] as $indice=>$producto){

         $sql=$pdo->prepare ("INSERT INTO  tbl_detalleventa (IDventa, IDproducto, PrecioUnitario, Cantidad, Pagado) 
         VALUES (:IDventa, :IDproducto, :PrecioUnitario,:Cantidad, '0')");
          $sql->bindParam(":IDventa", $idVenta);
          $sql->bindParam(":IDproducto", $producto['ID']);
          $sql->bindParam(":PrecioUnitario", $total);
          $sql->bindParam(":Cantidad", $producto['Cantidad']);

          $sql->execute();
     }
}

else{
    echo'<script type="text/javascript">
    alert("Error en la validacion de su cuenta");
    window.location.href="registro.php";
    </script>';
}

?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<style>
    
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }
    
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
            display: inline-block;
        }
    }
    
</style>
<div class="jumbotron text-center">
    <h1 class="display-4">Procesar Pago</h1>    <hr class="my-4">
    <p class="lead">Para finalizar tu compra paga con Paypal la cantidad de:</p>
    <h4>$<?php echo number_format($total,2);?></h4>
    <div id="paypal-button-container"></div>
    <p>El envio de los productos se realizara una vez procesado el pago<br>
    <strong>(Para dudas o aclaraciones: landy@gmail.com)</strong></p>
</div>

<script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'black'   // gold | blue | silver | black
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:   'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: 'insert production client id'
        },

        // Wait for the PayPal button to be clicked

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo $total;?>', currency: 'MXN' }, 
                            description:"Compra de productos a Navi Kicks:$<?php echo number_format($total,2);?>",
                            custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY);?>"
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                window.alert('Pago Realizado con exito');
                window.location="verificador.php";
             
            });
        }
    
    }, '#paypal-button-container');

</script>


<?php include'templates/pie.php' ; 
?>