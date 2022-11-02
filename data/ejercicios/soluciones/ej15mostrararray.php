<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de mostrar array</h1>
    <?php

        //Comprobamos que ha pulsado el botón enviar
        if (isset($_POST['enviar'])) {
            
            //Guardamos el array en una variable
            $nombre = $_POST['nombres'];

            //No comprobamos si está vacío porque en el html esta puesto el campo required
            foreach ($nombre as $nom) {
                //Mostramos los 3 nombres introducidos en el fomulario
                echo "<br>Nombre: " . $nom;
            }            
            
        }  
    ?>
</body>
</html>