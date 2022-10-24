<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php

    //Definimos la constante para pdoer adaptar el ejercicio para oros números
    const constante = 3;

    //Creamos un título usando la constante
    echo "<h1>DIVISIBLES DEL " . constante .  " DEL 1 AL 10</h1>";

    //Los divisibles de un número son aquellos que al dividirlos dan 0
    //Por lo que usaremos un bucle que va del 1 al 10 y usaremos el operador %
    for($i=1;$i<=10;$x=$i++){ 
        
        if($i % constante == 0){
            echo "<br>El número " . $i . " es divisible por " . constante;
        }
    };

    
    ?>

</body>
</html>