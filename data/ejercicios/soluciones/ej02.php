<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
    //Definimos la constante para poderla adaptar a otros números
    const constante = 8;

    //Creamos un título usando la constante
    echo "<h1>Tabla del " . constante . "</h1>";

    //Realizamos un bucle que va desde el 0 al 10 que son los valores por 
    //los que se multiplica una tabla de multiplicar
    for($i=0;$i<=10;$x=$i++){ 
        
        echo "<br>" . constante . " * " . $i . " = " . (constante*$i);
    };

    
    ?>

</body>
</html>