

<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$servicio = $_POST['servicio'];
$observacion = $_POST['observacion'];


?>

<?php
$conexion = mysqli_connect("localhost", "root", "", "hojadevida") or
    die("Problemas con la conexión");

mysqli_query($conexion, "insert into contactos(nombre, correo, servicio, observacion) values 
                       ('$_REQUEST[nombre]', '$_REQUEST[correo]', '$_REQUEST[servicio]', '$_REQUEST[observacion]')")
    or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body>
    <h1>ME COMUNICARE LO MAS PRONTO POSIBLE</h1>
    <a href="../index.html"><h1>REGRESAR A PAGINA PRINCIPAL</h1></a>
</body>
</html>