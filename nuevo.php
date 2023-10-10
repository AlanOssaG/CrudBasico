<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="sp_insertar.php" method="post">
            <table border="1">
                <tr>
                    <td>INGRESAR DATOS:</td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" id="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido" id="apellido"></td>
                </tr>
                <tr>
                    <td>direccion:</td>
                    <td><input type="text" name="direccion" id="direccion"></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="text" name="telefono" id="telefono"></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="correo" id="correo"></td>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usuario" id="usuario"></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="text" name="contrasenia" id="contrasenia"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>