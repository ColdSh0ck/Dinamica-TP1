<?php



//Verifico si el arreglo GET me llego con algun valor Vacio 
/*
$i=0;
$max= count($_GET);
$stop=true;
$error1="";
while($i<$max && $stop){
    if(empty($_GET[$i])){
        $stop=false;
        $error1="Hay datos vacios";
    }
}
    */

$entradaL=$_GET['lunesEntrada'] ?? '';
$salidaL=$_GET['lunesSalida'] ?? '';
$entradaM=$_GET['martesEntrada'] ?? '';
$salidaM=$_GET['martesSalida'] ?? '';
$entradaMi=$_GET['miercolesEntrada'] ?? '';
$salidaMi=$_GET['miercolesSalida'] ?? '';
$entradaJ=$_GET['juevesEntrada'] ?? '';
$salidaJ=$_GET['juevesSalida'] ?? '';
$entradaV=$_GET['viernesEntrada'] ?? '';
$salidaV=$_GET['viernesSalida'] ?? '';


//Cambio mi array asociativo a un array unidimencional
$horarios= array_values($_GET);


//funcion que me verica si en un dia se completo la entrada y salida

function entradaSalida($array){
    $error="";
    for($i=0;$i<count($array);$i=$i+2){

        if(empty($array[$i])!=empty($array[$i+1])){
                $error="Complete bien el campo de los horarios";
            
        }
    }
return $error;
}

//funcion que suma las horas semanales
function sumarHoras($array){
    $horasSemanales=[];
    if(entradaSalida($array)==""){
        for($i=0;$i<count($array);$i+=2){
            if(empty($array[$i])== true){
                $horasSemanales[]=0;
            }else{
                $horasSemanales[]=horaMin($array[$i+1]) - horaMin($array[$i]);
            }
        }
    }
   
return $horasSemanales;
}

//Funcion que toma un string de hora y lo convierte en minutos 
function horaMin($hora){
    $partee=explode(":",$hora);
    $hour=(int)$partee[0];
    $min=(int)$partee[1];
    $minutos=$hour*60 + $min;
return $minutos;
}

//Debo sumar todos los valores del array y dividirlos por 60.
$sumaTotal=0;
if(entradaSalida($horarios)==""){
    foreach(sumarHoras($horarios) as $valor){
        $sumaTotal=$sumaTotal+$valor;
    }
    $resultado=$sumaTotal/60;
}else{
    $resultado=entradaSalida($horarios);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas Web Dinamica</title>
</head>

<body style="background-color: rgb(243, 205, 205);">
    <main class="container" >
        <section class="presentation">
            <br>
            <br>
            <p align="center"><big> Horas de Cursado <b>Programación Web Dinamica</b></big></p>
            <br>

            <br>
            <p align="center"> <?php echo $resultado." HORAS DE CURSADO POR SEMANA"   ?> </p>
            
            <br>
            
            

        </section>
    </main>
</body>

</html>








