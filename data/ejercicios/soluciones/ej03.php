<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php

    //Definimos la constante para pdoer adaptar el ejercicio para oros números
    define("NUM", 3);

    //Creamos un título usando la constante
    echo "<h1>DIVISIBLES DEL " . NUM .  " DEL 1 AL 10</h1>";

    //Los divisibles de un número son aquellos que al dividirlos dan 0
    //Por lo que usaremos un bucle que va del 1 al 10 y usaremos el operador %
    for($i=1;$i<=10;$x=$i++){ 
        
        //FIltramos para obtener solo los números divisibles por 3
        if($i % NUM == 0){
            //Mostramos el resultado obtenido
            echo "<br>El número " . $i . " es divisible por " . NUM;
        }
    };

    
    ?>

</body>
</html>