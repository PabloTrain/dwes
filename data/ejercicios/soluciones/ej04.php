<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php

    //Definimos la constante para pdoer adaptar el ejercicio para oros números
    const constante = 10;

    //Creamos un título usando la constante
    echo "<h1>PRIMEROS  " . constante .  " DE LA SUCESSIÓN DE FIBONACCI</h1>";

    //Creamos las variables necesarias y le asignamos los valores para 
    //realizar la succesión de fibonacci
    $sum = 1;
    $num1 = 0;
    $num2 = 1;


    //Usaremos un bucle for para calcular la sucessión de fibbonacci
    for($i=1;$i<=constante;$x=$i++){ 
        
        //Mostramos los resultados 
        echo "<br>" . $sum;

        //Hacemos los calculos necesarios para tener guardado el número anterior
        //y así no perderlo
        $sum = $num1 + $num2;
        $num1 = $num2;
        $num2 = $sum;

        
    };

    
    ?>

</body>
</html>