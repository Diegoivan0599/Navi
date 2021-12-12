
    <?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>estilo.css">

<br>
<h3>Registrate para finalizar tu compra</h3>
<form action="vRegistro.php" method="post">
        <div class="alert alert-danger">
        <div class="form-group align-center">
        <label for="my-input">Nombre (s):</label>
            <input id="nombre" class="form-control column__txt" type="text" name="nombre" placeholder="Ingrese Su nombre" required>
            <label for="my-input">Apellido paterno:</label>
            <input id="a_paterno" class="form-control column__txt" type="text" name="a_paterno" placeholder="Ingrese Su apellido paterno" required>
            <label for="my-input">Apellido materno:</label>
            <input id="a_materno" class="form-control column__txt" type="text" name="a_materno" placeholder="Ingrese Su apellido materno" required>
            <label for="my-input">Correo de contacto:</label>
            <input id="email" class="form-control column__txt" type="email" name="email" placeholder="Ingrese Su correo de contacto" required>
            <label for="my-input">Telefono de contacto :</label>
            <input id="email" class="form-control column__txt" type="text" name="tel" placeholder="Ingrese Su telefono de contacto" required>
            <label for="my-input">Telefono de contacto 2 (Opcional):</label>
            <input id="email" class="form-control column__txt" type="text" name="tel2" placeholder="Ingrese Su telefono de contacto">
            <label for="my-input">Dirección:</label>
            <input id="direccion" class="form-control column__txt" type="text" name="direccion" placeholder="Ingrese Su direccion" required>
            <label for="my-input">Dirección 2 (Opcional):</label>
            <input id="direccion" class="form-control column__txt" type="text" name="direccion1" placeholder="Ingrese Su direccion">
            <label for="my-input">Dirección 3 (opcional):</label>
            <input id="direccion" class="form-control column__txt" type="text" name="direccion2" placeholder="Ingrese Su direccion">
            <label for="my-input">Contraseña:</label>
            <input id="email" class="form-control column__txt" type="password" name="contra" placeholder="Ingrese Su contraseña de acceso" required>
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="bntAccion" value="proceder">Registrarse</button>
        </form>
        <?php include'templates/pie.php'; ?>