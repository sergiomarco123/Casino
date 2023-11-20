<?php

function ResultadoApuesta($apuesta,$valorApuesta,$cantidadTotal){
    
    $msg ="RESULTADO DE LA APUESTA: ";
    $ale = random_int(1, 2);

    //sin saldo no se juega
    if($cantidadTotal<=0 || $valorApuesta>$cantidadTotal || $valorApuesta==0){
        return "<b>SALDO INSUFICIENTE<b> pruebe de nuevo<br> Saldo: ". $cantidadTotal;
    }else{
        //RESULTADOS
        if($apuesta=='par' && $ale==2){
            $msg .=" PAR<br>";
            $msg .="<b>GANASTE</b><br>";
            $cantidadTotal=$cantidadTotal+$valorApuesta*2;
        }
        else if($apuesta=='impar' && $ale==1){
            $msg .=" IMPAR<br>";
            $msg .="<b>GANASTE</b><br>";
            $cantidadTotal=$cantidadTotal+$valorApuesta*2;
        }
        else{
            $msg .="<b>PERDISTE</b><br>";
            $cantidadTotal=$cantidadTotal-$valorApuesta;
        }
        
        $_SESSION['cantidadTotal']=$cantidadTotal;//almacena el saldo restante
        $msg .= "Saldo disponible ".$cantidadTotal;
        return $msg;
    }
}


?>