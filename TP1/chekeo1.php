<?php 

$num1= $_GET['numero'] ?? '';
$usuario1= $_GET['usuario'] ?? '';

$num1= trim($num1);

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>
<body>
    <main class="container result"> 
        <section class=box-result>

        <h1>RESULTADO</h1>
        <br>

        <?php if($usuario1==""): ?>
        <p align="center">No se ingreso un nombre de usuario </p>
        <?php else: ?>
        <?php  echo $usuario1 ?>
        <br>
        <?php echo verificador($num1) ?>
        <?php endif; ?>
        <br>
        <p><b>Pagina anterior</b> <link><a href="formulario1.html" >...</a></p>


        </section>

    </main>
    
</body>
</html>