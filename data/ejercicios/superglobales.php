<?php
$mihost = $_SERVER['HTTP_HOST'];
echo "<br> El host al que va la petición es " . $mihost;

// -El nombre del servidor:
$nombreserver =  $_SERVER['SERVER_NAME'];
echo "<br> Nombre del servidor: " . $nombreserver;

// -El lenguaje:
$lenguaje =  $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<br> Lenguaje : " . $lenguaje;

// -El nombre de la página actual que realiza la solicitud: 
$nombrepagactual =  $_SERVER['PHP_SELF'];
echo "<br> Nombre de la página actual: " . $nombrepagactual;

// -El tipo de navegador que realiza la solicitud:
$tiponavegador =  $_SERVER['HTTP_USER_AGENT'];
echo "<br> Tipo naVegador : " . $tiponavegador;