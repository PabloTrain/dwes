<?php
//crear una si no esta creada o unirse a una sesión ya creada
session_start();

//$_SESSION["Nombre de la variabl]

//Crear una sesion de contador de visitas si no existe
if(!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 0;

}else{
    //si ya existe, lo incrementa
    $_SESSION["contador"]++;

}

$_SESSION["objeto"] = "pelota";

echo "He visitado la página " . $_SESSION["contador"] . " veces.";

echo "<br><a href='sesion2.php'>Ir a sesion 2</a>";