<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
$nombre = $_POST["nombre"];
$a_paterno = $_POST["a_paterno"];
$a_materno = $_POST["a_materno"];
$correo = $_POST["email"];
$telefono=$_POST["tel"];
$telefono2=$_POST["tel2"];
$direccion = $_POST["direccion"];
$direccion2=$_POST["direccion1"];
$direccion3=$_POST["direccion2"];
$contraseña = $_POST["contra"];
if(!empty($nombre) && !empty($a_paterno) && !empty($a_materno) && !empty($correo) && !empty($contraseña))
{
  //se establece la conexion dentro de la variable $conectar
    //Ejecucion de la sentencia SQL
   
    
$sql=("SELECT correo from tbl_clientes where correo='$correo'");
$result = mysqli_query($conexion,$sql);
$row_cnt = mysqli_num_rows($result);

if($row_cnt>0){
 echo'<script type="text/javascript">
 alert("Correo repetido");
 window.history.go(-1);
 </script>';
 
}else{
    
    $consulta = ("INSERT into tbl_clientes (Nombre, a_paterno, a_materno,correo, telefono, telefono2, direccion, direccion2, direccion3, clave) 
    values ('$nombre','$a_paterno','$a_materno','$correo', '$telefono', '$telefono2', '$direccion', '$direccion2', '$direccion3','$contraseña')");
    $result_1=mysqli_query($conexion,$consulta);

    if(isset ($result_1)){
        echo'<script type="text/javascript">
        alert("USUARIO REGISTRADO CORRECTAMENTE");
        window.location.href="mostrarCarrito.php";
        </script>';
    }else if (!$result_1){
        die("FALLO LA INSERCIÓN");
    } 
}
   

}else {

   echo'<script type="text/javascript">
   alert("Rellene todos los campos");
   window.history.go(-1);
   </script>';


}


?>
