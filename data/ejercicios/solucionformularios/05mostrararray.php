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
    
    $comprobar = false;

        if (isset($_POST['enviar'])) {
            
            $nombre = $_POST['nombres'];

            if (!empty($nombre)) {
            
                foreach ($nombre as $nom) {
                    echo "<br>Nombre: " . $nom;
                }            

            }

        }  
    ?>
</body>
</html>