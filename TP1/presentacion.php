<?php

$info=$_POST ?? [];

//Funcion que me dice que valor esta vacio o no 
function chekeo($info){
    $error="";
    $errores="";
    foreach($info as $clave => $valor1){
        if(empty($valor1)){
            $error="Ingreso un valor vacio en ".$clave."\n";
            $errores=$errores.$error."\n";
        }
    }
return $errores;
}

$nombre="";
$apellido="";
$edad=0;
$direccion="";
if(chekeo($info)==""){
    $nombre=$info["nombre"];
    $apellido=$info["apellido"];
    $edad=$info["edad"];
    $direccion=$info["direccion"];
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentacion</title>
    <link rel="stylesheet" href="formulario3.css">
</head>

<body>
    <main class="container">
        <section class="presentacion">
            <form action="presentacion.php" method="post">    
                <p><span class="titulo1"> Fomulario de ingreso</span></p>
                <br>
                <?php if(chekeo($info)==""): ?>
                <p><span class="titulo1"> Nombre: </span></p>
                <?php echo $nombre ?>
                <br>
                <p><span class="titulo1">Apellido:</span></p>
                <?php echo $apellido ?>
                <br>
                <p><span class="titulo1">Edad:</span></p>
                <?php echo $edad ?>
                <p><span class="titulo1">Dirección:</span></p>
                <?php echo $direccion ?>
                <br>
                <br>
                <?php else: ?>
                <br>
                <?php echo "Hay problemas en los campos "; ?>
                <br>
                <?php echo chekeo($info) ?>
                <?php endif ?>
            </form>


        </section>
    </main>

</body>

                <!-- En pocas palabras no cambia mucho al cambiar el metodo a GET solo que los datos se 
                 se ven por la URL. A lo que me lleva a decir que si es poca la informacion, mandalos por GET
                 Si es un formulario largo, madalo por POST que te oculta de paso la info aunque no es
                 garantia, Otra ventaja del POST es que la informacion no queda guardada en el historial o URL -->
    

</html>