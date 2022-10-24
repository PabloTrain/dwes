<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio%</title>
</head>
<body>
    <?php

    //Definimos la constante para pdoer adaptar el ejercicio para oros números
    const constante = 193;

    //Creamos una variable para contar el número de divisores que tiene un número
    //Ya que un número es primo si tiene 2 divisores, el mismo y el 1
    $numdiv = 0;

    //Creamos un título usando la constante
    echo "<h1>DIVISIBLES DEL " . constante .  "</h1>";

    //Los divisibles de un número son aquellos que al dividirlos dan 0
    //Por lo que usaremos un bucle que va del 1 al 10 y usaremos el operador %
    for($i=1;$i<=constante;$x=$i++){ 
        
        if(constante % $i == 0){
            $numdiv++;
            echo "<br>El número " . $i . " es divisor del " . constante;
            
        }
    };

    if($numdiv<=2){
        echo "<br>El número " . constante . " es primo, ya que solo es divisible pro el mismo " .
                " y el 1.";
    }

    
    ?>

</body>
</html>