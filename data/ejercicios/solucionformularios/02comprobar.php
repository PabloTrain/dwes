<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de comprobar nombre</h1>
    <?php
    
    $nombres = array("Pablo", "Juan", "Mateo", "María");
    $comprobar = false;

        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];

            if (!empty($nombre)) {  
                foreach($nombres as $nom){
                    if($nombre == $nom){
                        echo "<br> Hola " . $nombre; 
                        $comprobar = true;
                    }
                }
                if($comprobar == false){
                    header("Location: http://www.ejercicios.local/solucionformularios/02formularionombre.html");
                    exit();
                }
            }
        }  
    ?>
</body>
</html>