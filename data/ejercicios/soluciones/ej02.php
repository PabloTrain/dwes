<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    //Definimos la constante para poderla adaptar a otros números
    define("NUM", 8);

    //Creamos un título usando la constante
    echo "<h1>Tabla del " . NUM . "</h1>";

    //Realizamos un bucle que va desde el 0 al 10 que son los valores por 
    //los que se multiplica una tabla de multiplicar
    for($i=0;$i<=10;$x=$i++){ 
        
        echo "<br>" . NUM . " * " . $i . " = " . (NUM*$i);
    };

    
    ?>

</body>
</html>