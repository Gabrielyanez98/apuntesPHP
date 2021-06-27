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

//$busqueda = $_GET["buscar"];

$cod = $_GET["c_art"];

$sec = $_GET["seccion"];

$nom = $_GET["n_art"];

require("datosConexion.php");


$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";

    exit();
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion, "utf8");
 
$consulta = "DELETE FROM `artículos` WHERE `NOMBRE ARTÍCULO` = '$nom'";

$resultados = mysqli_query($conexion, $consulta);

if($resultados==false){
    echo "Error en la consulta";
}else {
    //echo "Registro eliminado<br><br>";

    //echo mysqli_affected_rows($conexion);
    if(mysqli_affected_rows($conexion) == 0){
        echo "No hay registros que eliminar con ese criterio";
    } else {
        echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
    }

}


mysqli_close($conexion);
?> 
</body>
</html>