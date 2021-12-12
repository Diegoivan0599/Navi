<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

$total=0;
$token=random_int(1,100);
foreach($_SESSION['CARRITO'] as $indice=>$producto){
    $total=$total+($producto['Precio']*$producto['Cantidad']);
}
$consulta = ("UPDATE tbl_detalleventa SET Pagado='1', token_pago='$token' WHERE PrecioUnitario='$total'");
    $result_1=mysqli_query($conexion,$consulta);
$consulta2="UPDATE tbl_ventas SET status='aprobado' WHERE Total='$total'";
$result_2=mysqli_query($conexion, $consulta2);
    if(isset ($result_1)){
      
?>
    <div class="jumbotron">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>estilo.css">

        <h1 class="display-4">Pago Procesado con exito</h1>
        <p class="lead">Gracias por comprar en Navi Kicks</p>
        <p class="lead">TOTAL DE COMPRA: $ <?php echo $total?></p>
        </div>
        <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
                            <th>Articulo</th>
							<th>Precio</th>
                            <th>Cantidad</th>
						</tr>
					</thead>      
    
    <?php   
      foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $precioo=$producto['Precio'];
        $articulo=$producto['Nombre'];
        $cant=$producto['Cantidad'];
    $actualizastock="UPDATE tbl_productos SET stock='0' WHERE Precio='$precioo'";
    $result_3=mysqli_query($conexion, $actualizastock);

?>
<tbody>
				<tr>
		<td><?php echo $articulo?></td>
	<td><?php echo $precioo?></td>
    <td><?php echo $cant?></td>
	
						</tr>
					</tbody>
					<?php }}
							 ?>
				</table>
			</div>
			
		</div>
	</div>
    <?php session_destroy();
                        include'templates/pie.php'; ?>
	