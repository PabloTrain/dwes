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

        //Recuperamos el valor de la cookie a través de su nombre
        $idioma = $_COOKIE["cookieidioma"];
        $marca = $_COOKIE["cookiemarca"];

        $mensajeidioma = "";
        $mensajemarca = "";

        if(isset($idioma) && isset($marca)){
            if($idioma=="español"){
                $mensajeidioma = "Bienvenido, querido usuario.";
                $mensajemarca = "La marca de coche elegida es ";

            } else if($idioma=="ingles"){
                $mensajeidioma = "Welcome dear user.";
                $mensajemarca = "The chosen car brand is ";

            } else if($idioma=="aleman"){
                $mensajeidioma = "Willcommen lieber Benutzer.";
                $mensajemarca = "Your favourite car brand is ";

            } else{
                //Si no selecciona nada, por defecto será en español
                $mensajeidioma = "Bienvenido, querido usuario";
            }

            $mensajemarca = $mensajemarca . $marca . ".";

            //Mostramos la soluccion
            echo "<br>" . $mensajeidioma;
            echo "<br>" . $mensajemarca;

        } else{
            //No existen cookies
            echo "<br>Debes seleccionar algunos datos";
            echo "<br><a href='FormularioejercicioCookies.html'>Volver al formulario</a>";
        }          
    ?>
</body>
</html>