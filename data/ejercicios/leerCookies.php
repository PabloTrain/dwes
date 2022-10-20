<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar resultado</title>
</head>
<body>
    
    <h1>Página mostrar elecciones a través cookies</h1>
    <?php

        if (isset($_POST['mostrar'])) {

            //Recuperamos el valor de la cookie a través de su nombre
            $idioma = $_COOKIE["cookieidioma"];
            $marca = $_COOKIE["cookiemarca"];

            if($idioma=="español"){
                echo "<br>Hola";
            } else if($idioma=="ingles"){
                echo "<br>Hello";
            } else if($idioma=="aleman"){
                echo "<br>Hallo";
            }

            if($marca=="toyota"){
                echo "<br>La marca de coche elegida es Toyota";
            } else if($marca=="mercedes"){
                echo "<br>La marca de coche elegida es Mercedes";
            } else if($marca=="porche"){
                echo "<br>La marca de coche elegida es Porche";
            }
            
        }  
    ?>
</body>
</html>