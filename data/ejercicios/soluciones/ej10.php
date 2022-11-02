<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
   
    <?php
        //Creamos el array asociativo
        $quintetoinicial = array(
            "base" => "Luka Donic",
            "escolta" => "Nikola Jokic",
            "alero" => "Giannis Antetokounmpo",
            "alapivot" => "Jayson Tatum",
            "pivot" => "Devin Booker"
        );

        //Recorremos el array asociativo a través de un foreach
        //Mostramos la clave y el valor de array en una frase
        foreach($quintetoinicial as $posicion => $jugador){
            //Imprimimos el resultado
            echo "<br> El " . $posicion . " es " . $jugador;
        }
    ?>

</body>
</html>