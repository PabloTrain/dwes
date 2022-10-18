<?php
//Sew debe poner la cookie antes de imprimir algo por pantalla
time(); //epoch time, unix -> Tiempo actual en segundos desde 1970
//strtotime("+ 1 week"); --> fecha en ingles a fecha unix (segundos)

//Definir una cookie

$miarray = ["hola", 25, [1,3,5]];
$infoguardar = serialize($miarray);//Devuelve una cadena, en este cado guadamos un array

setcookie("primeracookie", "aceptado", time()+300);
setcookie("segundacookie", $infoguardar, time()+600);

//Caducar una cookie
//setcookie("primeracookie", "aceptado", time()-120);

echo "<h1>Mi primera cookie</h1>";
echo "Valor de la primera cookie: " . $_COOKIE["primeracookie"];
echo "<pre>",
var_dump(unserialize($_COOKIE["segundacookie"]));

echo "<br>Número de cookies creadas: " . count($_COOKIE);












