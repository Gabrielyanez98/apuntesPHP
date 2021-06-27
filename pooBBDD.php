
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

        $conexion = neww mysqli("localhost", "root", "", "pruebas");

        if($conexion -> connect_errno){
            echo "Falló la conexión " . $conexion-> connect_errno;
        }

        //mysqli_set_charset ($conexion, "utf8");

        $conexion-> set_charset("utf8");

        $sql="SELECT * FROM `artículos`";

        //$resultados = mysqli_query($conexion, $sql);

        $resultados = $conexion -> query($sql);

        if($conexion -> errno){
            die($conexion -> error);
        }

        //while($fila = mysqli_fetch_array($resultados, mysql_assoc)){}

        while ($fila = $resultados -> fetch_assoc()){
            echo "<table ><tr><td>";

            echo $fila['FECHA'] . "</td><td> ";

            echo $fila['NOMBRE ARTÍCULO']. "</td><td> ";

            echo $fila['PAÍS DE ORIGEN'] . "</td><td></tr></table> ";

            echo "<br>";

            echo "<br>";
        }

        //mysqli_colse($conexion);

        $conexion -> close();

    ?>
</body>
</html>