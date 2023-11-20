<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino</title>
</head>
<body>
    <h2>Apuesta</h2>
    <?=$ResultadoApuesta?>
    <?=$cantidadApostar?>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    Cantidad a apostar: <input name="cantidadApuesta" type="number" value=0 size=4 ><br>
    <label>
        Tipo de apuesta:
            <input type="radio" name="Opcion" value="par">
            Par
        </label>
        <label>
            <input type="radio" name="Opcion" value="impar">
            Impar
        </label>
    <input type="submit" name="accion" value="Apostar">	
    <input type="submit" name="accion" value="Abandonar">	
    </form>
</body>
</html>