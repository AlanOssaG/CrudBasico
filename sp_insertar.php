<?php
$nom= $_POST['nombre'];
$apellido= $_POST['apellido'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$correo= $_POST['correo'];
$usuario= $_POST['usuario'];
$contrasenia= $_POST['contrasenia'];
    $conx=mysqli_connect("localhost","root","","dbprueba");
    $sql= "INSERT INTO talumno (nombre, apellido, direccion, telefono, correo, usuario, contrasenia) VALUES('$nombre','$apellido','$direccion','$telefono','$correo','$usuario','$contrasenia')";
    $rta= mysqli_query($conx, $sql);
    if(!$rta){
        echo "No se inserto!";
    }
    else{
        header("Location: index.php");
    }

?>