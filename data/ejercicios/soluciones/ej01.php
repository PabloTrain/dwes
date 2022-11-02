<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
   <h1>FICHA CON DATOS PERSONALES GUARDADOS EN VARIABLES</h1>
    <?php
    //Definimos las variables que después meteremos en la tabla
    $nombre = "Pablo";
    $apellidos = "Traín cardiel";
    $edad = "21 años";
    $telefono = "606952355";
    $email = "pablotrain25@gmail.com";

    //Creamos la tabla con print, eco,usando la concatenación
    echo "<table>";
        //Uso del echo y concatenando lo que se muestra
        echo "<tr>";
            echo "<th> Nombre </td>" . "<td> ". $nombre ." </td>";
        echo "</tr>";

        //Comillas simples
        print_r('<tr>');
            print_r('<th> Apellidos </td>');
            print_r('<td>'. $apellidos .'</td>');
        print_r('</tr>');

        //Concatenando parte por parte
        echo "<tr>" . "<th> Edad </td>" . "<td> ". $edad ." </td></tr>";

        //Comillas dobles
        print_r("<tr>");
            print_r("<th> Teléfono </td>");
            print_r("<td>". $telefono ."</td>");
        print_r("</tr>");

        //Uso del print concatenando todo junto
        print_r('<tr><th> Email </td><td> '. $email .' </td></tr>');

    print_r("</table>");
    ?>

</body>
</html>