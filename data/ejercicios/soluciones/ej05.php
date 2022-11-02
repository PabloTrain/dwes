<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php

    //Definimos la constante para pdoer adaptar el ejercicio para oros números
    define("NUM", 193);

    //Creamos una variable para contar el número de divisores que tiene un número
    //Ya que un número es primo si tiene 2 divisores, el mismo y el 1
    $numdiv = 0;

    //Creamos un título usando la constante
    echo "<h1>DIVISIBLES DEL " . NUM .  "</h1>";

    //Los divisibles de un número son aquellos que al dividirlos dan 0
    //Por lo que usaremos un bucle que va del 1 al 10 y usaremos el operador %
    for($i=1;$i<=NUM;$x=$i++){ 
        
        if(NUM % $i == 0){
            $numdiv++;//Cada vez que es un divisor se incrementa +1
            //Mostramos los números que son divisores del número que está en la constante
            echo "<br>El número " . $i . " es divisor del " . NUM;
            
        }
    };

    //Mostramos un mensaje distinto en el caso que sea un número primo o no
    if($numdiv<=2){
        //Mensaje número primo
        echo "<br>El número " . NUM . " es primo, ya que solo es divisible pro el mismo " .
                " y el 1.";
    }else{
        //Mensaje número no primmo
        echo "<br>El número " . NUM . " no es primo, tiene más de dos divisores.";
    }

    
    ?>

</body>
</html>