<?php 


/*Function what verify if a number is positive, 0 or negative */ 
function verificador($numero){
    $number1=$numero;
    $mensaje="";
    if($number1>0){
        $mensaje="El numero es positivo";
    } elseif($number1<0){
        $mensaje="El numero es negativo";
    } else{
        $mensaje="El numero es 0";
    }
return $mensaje;
}


?>