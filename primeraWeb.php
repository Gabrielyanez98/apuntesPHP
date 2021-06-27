<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 50%;
            border: 1px dotted red;
            margin: auto;
        }
    </style>
</head>
<body>

    <?php

   /*  require("datosConexion.php");
    

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM artículos WHERE `PAÍS DE ORIGEN`='España'";

    $resultados = mysqli_query($conexion, $consulta);


    while (($fila = mysqli_fetch_row($resultados))){

    echo "<table ><tr><td>";


    echo $fila[0] . "</td><td> ";

    echo $fila[1]. "</td><td> ";
    
    echo $fila[2] . "</td><td> ";

    echo $fila[3] . "</td><td> ";

    echo $fila[4]. "</td><td> </tr> </table> ";

    echo "<br>";

    echo "<br>";

    }

    mysqli_close($conexion); */
    ?>

<?php

require("datosConexion.php");


$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";

    exit();
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM artículos WHERE `PAÍS DE ORIGEN`='España'";

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
?> 
</body>
</html>