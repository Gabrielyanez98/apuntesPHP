<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//INSERT INTO `artículos` ( `NOMBRE ARTÍCULO`, `SECCIÓN`) VALUES ( 'CAMISETA CORRER', 'DEPORTES');

$busqueda = $_GET["buscar"];

require("datosConexion.php");


$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";

    exit();
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM artículos WHERE `NOMBRE ARTÍCULO` LIKE '%$busqueda%'";

$resultados = mysqli_query($conexion, $consulta);


while (($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

//echo "<table ><tr><td>";

echo "<form action='Actualizar.php' method='get'>";

echo "<input type='text' name='n_art' value='" .  $fila['NOMBRE ARTÍCULO'] . "'><br>";

echo "<input type='text' name='p_origen' value='" .  $fila['PAÍS DE ORIGEN'] . "'><br>";

echo "<input type='text' name='fecha' value='" .  $fila['SECCIÓN'] . "'><br>";



echo "<input type='submit' name = 'enviando' value = 'Actualizar!'>";


echo "</form>";

}

mysqli_close($conexion);
?> 
</body>
</html>