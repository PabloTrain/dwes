
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    $nombre = "Pablo";
    $apellidos = "Traín cardiel";
    $edad = "21 años";
    $telefono = "606952355";
    $email = "pablotrain25@gmail.com";

    echo "<table>";
        echo "<tr>";
            echo "<th> Nombre </td>";
            echo "<th> Apellidos </td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>". $nombre ."</td>";
            echo "<td>". $apellidos ."</td>";
        echo "</tr>";
    echo "</table>";
    ?>

</body>
</html>