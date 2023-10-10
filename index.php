<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>
    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Direcciones</td>
                <td>Telefonos</td>
                <td>Correos</td>
                <td>Usuarios</td>
                <td>Contraseña</td>
                <td>OPCIONES</td>
            </tr>
            <?php
            $conx=mysqli_connect("localhost","root","","dbprueba");
            $sql= "SELECT id, nombre, apellido, direccion, telefono, correo, usuario, contrasenia FROM talumno order by id desc";
            $rta= mysqli_query($conx, $sql);
            while($mostrar=mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                    <td><?php echo $mostrar['5'] ?></td>
                    <td><?php echo $mostrar['6'] ?></td>
                    <td><?php echo $mostrar['7'] ?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?>&
                        nombre=<?php echo $mostrar['1'] ?>&
                        apellido=<?php echo $mostrar['2'] ?>&
                        direccion=<?php echo $mostrar['3'] ?>&
                        telefono=<?php echo $mostrar['4'] ?>&
                        correo=<?php echo $mostrar['5'] ?>&
                        usuario=<?php echo $mostrar['6'] ?>&
                        contrasenia=<?php echo $mostrar['7']?>
                        ">EDITAR</a>
                        <a href="sp_eliminar.php">ELIMINAR</a>

                    </td>

                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>