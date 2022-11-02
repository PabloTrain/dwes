<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
   
    <?php
        //Añadimos los elementos al array de uno en uno
        $quintetoinicial[] = "Luka Donic";
        $quintetoinicial[] = "Nikola Jokic";
        $quintetoinicial[] = "Giannis Antetokounmpo";
        $quintetoinicial[] = "Jayson Tatum";
        $quintetoinicial[] = "Devin Booker";

        //Mostramos el nombre con un foreach
        echo "<br>Indicando solo los nombres";
        echo "<ul>";

        //Recorremos el array
        foreach($quintetoinicial as $eljugador){
            echo "<li>" . $eljugador . "</li>";
        }
        echo "</ul>";

        //Mostramos el nombre a través de la posición usando el bucle for -> $array[posicion]
        echo "<br>Imprimir indicando la posición del nombre en el array(0, 1, 2, ...)";
        echo "<ul>";
        //Recorremos el array
        for($i = 0; $i <5; $i++){
            echo "<li>" . $quintetoinicial[$i] . "</li>";
        }
        echo "</ul>";
    ?>

</body>
</html>