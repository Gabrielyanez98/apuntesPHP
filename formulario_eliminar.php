<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Eliminar artículos</h1>
    <form name="form1", method="get" action="eliminar_registro.php">

    <table>
    <tr>
        <td>Nombre artículo</td>
        <td><label for="c_art"></label>
        <input type="text" name="n_art" id="n_art"></td>
    </tr>
    <tr>
        <td> Sección</td>
        <td><label for="c_art"></label>
        <input type="text" name="seccion" id="seccion"></td>
    </tr>
    <tr>
    <td><input type="submit" name="enviar" value="Eliminar" id="enviar"></td>
    </tr>
    </table>
    

    </form>

</body>
</html>