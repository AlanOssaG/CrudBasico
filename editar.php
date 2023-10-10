<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id=$_GET['id'];
$nombre= $_GET['nombre'];
$apellido= $_GET['apellido'];
$direccion= $_GET['direccion'];
$telefono= $_GET['telefono'];
$correo= $_GET['correo'];
$usuario= $_GET['usuario'];
//$contrasenia= $_REQUEST['contrasenia'];
//echo $nombre;
?>
    <div>
        <form action="sp_insertar.php" method="post">
            <table border="1">
                <tr>
                    <td>INGRESAR DATOS:</td>
                    <td><input type="text" name="id" id="id" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" id="nombre" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido" id="apellido" value="<?=$apellido?>"></td>
                </tr>
                <tr>
                    <td>direccion:</td>
                    <td><input type="text" name="direccion" id="direccion" value="<?php $direccion?>"></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="text" name="telefono" id="telefono" value="<?php $telefono?>"></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="correo" id="correo" value="<?php $correo?>"></td>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usuario" id="usuario" value="<?php $usuario?>"></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="text" name="contrasenia" id="contrasenia" value="<?php $contrasenia?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>