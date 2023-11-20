<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino</title>
</head>
<body>
    <h2>Bienvenido al casino</h2>
    <?=$numeroVisita?>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    Cantidad para apostar: <input name="cantidad" type="number" value=0 size=4 >
    <input type="submit" name="accion" value="Pagar">
    </form>

</body>
</html>