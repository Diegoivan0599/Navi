<?php 
session_start();
$data="";
define('CSS_PATH', 'css/');
    

if (isset($_POST['btnAccion'])){

switch($_POST['btnAccion']){
    case 'agregar':
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $ID= openssl_decrypt($_POST['id'],COD,KEY);
            $data.="ID correcto".$ID."</br>";
        }else{
            $data.="Error en el carrito"."</br>"; break;
        }

        if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
            $Nombre= openssl_decrypt($_POST['nombre'],COD,KEY);
            $data.="Nombre correcto".$Nombre."</br>";
        }else{
            $data.="Error en el carrito2"."</br>"; break;
        }

        if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
            $Precio= openssl_decrypt($_POST['precio'],COD,KEY);
            $data.="Precio correcto".$Precio."</br>";
        }else{
            $data.="Error en el carrito3"."</br>"; break;   
        }

        if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
            $Cantidad= openssl_decrypt($_POST['cantidad'],COD,KEY);
            $data.="Cantidad correcta".$Cantidad."</br>";
        }else{
            $data.="Error en el carrito4"."</br>"; break;
        }
        if (!isset($_SESSION['CARRITO'])){
            $producto=array(
                'ID'=>$ID,
                'Nombre'=>$Nombre,
                'Precio'=>$Precio,
                'Cantidad'=>$Cantidad
            );
            $_SESSION['CARRITO'][0]=$producto;
            $data="Articulo agregado al carrito";

        }else{
            $idProductos=array_column($_SESSION['CARRITO'],"ID");
                if(in_array($ID,$idProductos)){
                    echo"<script>alert('El Articulo ya fue seleccionado')</script>";
                    $data="";
}else{

            $numProductos=count($_SESSION['CARRITO']);
            $producto=array(
                'ID'=>$ID,
                'Nombre'=>$Nombre,
                'Precio'=>$Precio,
                'Cantidad'=>$Cantidad
            );
            $_SESSION['CARRITO'][$numProductos]=$producto;
            $data="Articulo agregado al carrito";

        }
    }

       // $data= print_r($_SESSION,true);
        break;
      case "Eliminar":
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $ID= openssl_decrypt($_POST['id'],COD,KEY);
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                if($producto['ID']==$ID){
                    unset($_SESSION['CARRITO'][$indice]);
                    echo "<script> alert('Articulo Eliminado...');</script>";

                }


            }

        }else{
            $data.="Error en el carrito"."</br>"; break;
        }
        break;



}

}

?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>estilo.css">