<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

function ejecuta_consulta ($labusqueda){

//$busqueda = $_GET["buscar"];

require("datosConexion.php");


$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";

    exit();
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM artículos WHERE `NOMBRE ARTÍCULO` LIKE '%$labusqueda%'";

$resultados = mysqli_query($conexion, $consulta);


while (($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

echo "<table ><tr><td>";

echo $fila['FECHA'] . "</td><td> ";

echo $fila['NOMBRE ARTÍCULO']. "</td><td> ";

echo $fila['PAÍS DE ORIGEN'] . "</td><td></tr></table> ";



echo "<br>";

echo "<br>";

}

mysqli_close($conexion);

}
?> 

<body>

    <?php

        $mibusqueda = $_GET["buscar"];

        $mipag = $_SERVER["PHP_SELF"];

        if($mibusqueda != null){
            ejecuta_consulta($mibusqueda);
        } else {
            echo ("<form action ='" . $mipag . " ' method = 'get'>
            <label>Buscar:<input type='text' name = 'buscar'></label>
            <input type = 'submit' name = 'enviando' value = 'Dale!'>
            </form>");

        }
    ?>
    
</body>
</html>