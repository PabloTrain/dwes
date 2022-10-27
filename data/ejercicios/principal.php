<?php
//Para unirse a una sesión ya iniciada
session_start();

//Para que no se acceda directamente a esta página sin iniciar sesión
if(!isset($_SESSION["usuariook"])){
    //Redirecciona a la página de login
    header("Location: login.php");
}

echo "<title>Principal</title>";
echo "<br>Bienvenido " . $_SESSION["usuariook"]["user"];
echo "<br>El valor de tu rol es " . $_SESSION["usuariook"]["rol"];
echo "<br><a href='logout.php'>Ir a logout</a>";