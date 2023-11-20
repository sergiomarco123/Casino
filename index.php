<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino</title>
</head>
<body>
    <h1>Casino Online</h1>
    <?php

    if (isset($_COOKIE["visitas"])) {
        setcookie("visitas",$_COOKIE["visitas"]+1, time()+60*30);
        $numeroVisita= "Esta es su visita numero: " . $_COOKIE["visitas"]. " en la última mrdia hora";
    } else {
        setcookie("visitas", 1, time()+60*30);//guarda la coockie 30 minutos con valor 1
        $numeroVisita="Es su primera vez en esta web en la última media hora";
    }

    session_start();
        include_once 'app/Funciones.php';
            //Muestra bienvenida
        if (!isset($_REQUEST['accion'])){
           //falta  $numeroVisita=$coockieVisita;
            include_once 'app/entrada.php';
        }else{
            switch ($_REQUEST['accion']){
        
                case "Pagar":
                    //falta $cantidadApostar
                    $ResultadoApuesta="";
                    $cantidadApostar="Saldo disponible: ". $_POST['cantidad'];
                    $_SESSION['cantidadTotal']=$_POST['cantidad'];
                    include_once 'app/apuesta.php';
                    break;     
                case "Apostar":
                    $ResultadoApuesta=ResultadoApuesta($_POST['Opcion'],$_POST['cantidadApuesta'],$_SESSION['cantidadTotal']);
                    $cantidadApostar="";
                    include_once  'app/apuesta.php';
                    break;
                case "Abandonar":
                    $Rfinal="Su resultado final es de: ". $_SESSION['cantidadTotal'];
                    include_once 'app/despedida.php';
            }
        }
    ?>
</body>
</html>
