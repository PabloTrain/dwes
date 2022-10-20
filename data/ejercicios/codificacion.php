<?php
//FUNCIONES SERIALIZE, UNSERIALIZE, JSON_ENCODE, JSON_DECODE

$capitales = ["España" => "Madrid", "Francia"=> "Paris"];

$infotrans =""; //Infromación trasnformada
$infonotrans = ""; //Información no transfromada

$infotrans = serialize($capitales);
echo "<br>INFORMACIÓN SERIALIZADA: <br>";
var_dump($infotrans);

$infonotrans = unserialize($infotrans);
echo "<br>INFORMACIÓN UNSERIALIZADA: <br>";
var_dump($infonotrans);



//INFORMACIÓN CODIFICADA EN JSON;
echo "<br><br><b>INFORMACIÓN CODIFICADA EN JSON</b>";

$infotrans = json_encode($capitales);
echo "<br>INFORMACIÓN JSON: <br>";
var_dump($infotrans);

$infonotrans = json_decode($infotrans);
echo "<br>INFORMACIÓN ORIGINAL: <br>";
var_dump($infonotrans);
