<?php
$host="localhost"; //en todos los casos debe ser localhost
$usuario="root";//usuario de la base de datos
$password="";//password si lo tiene y si no es vacio
$basedatos="tienda";//base de datos a utilizar
$servidor="mysql:dbname=".BD.";host".SERVIDOR;
$conexion=mysqli_connect($host,$usuario,$password,$basedatos);
try{

   $pdo=new PDO($servidor,USUARIO,PASSWORD,
   array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
); 
//echo"<script>alert('Conectado...')</script>";

}
catch (PDOException $e){
   // echo"<script>alert('ERROR...')</script>";

}

?>