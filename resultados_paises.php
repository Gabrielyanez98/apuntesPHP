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
 $busqueda=$_GET["buscar"];
 require("datosConexion.php");

$mysqli = new mysqli($db_host,$db_usuario,$db_password,$db_nombre);
 if($mysqli->connect_error) {
   exit('Error connecting to database'); //Should be a message a typical user could understand in production
 }

$mysqli->set_charset("utf8mb4");
 // mysqli_connect_errno .esta funcion se ejecuta siempre  y cuando no se tenga exito en la conexion con //la base de datos


 $stmt=$mysqli->prepare("select * from artículos where PAÍS DE ORIGEN=?");
 $stmt->bind_param('s',$busqueda);
 $stmt->execute();
$result=$stmt->get_result();
 if($result->fetch_assoc()==0){
  echo "No existe en la base de datos";
  }
 else{
 echo "<table><tr>";
 
 echo "<td> NOMBRE</td>";
 echo "<td> SECCIÓN</td>";
 echo "<td> PRECIO</td>";
 echo "<td> FECHA:</td></tr>";
 echo "<tr>";
while($fila = $result->fetch_assoc()) {
  
  echo "<td> ".$fila['NOMBREARTÍCULO']."</td>";
  echo "<td> ".$fila['SECCIÓN']."</td>";
  echo " <td>".$fila['PRECIO']."</td>";
   echo "<td> ".$fila['FECHA']."</td></tr>";
echo "<br>";
}
 echo "</table>";
}
$stmt->close();
 
 ?>
</body>
</html>