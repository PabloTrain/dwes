<?php
//Para unirse a una sesión ya iniciada
session_start();

//Cerrar sesion
$_SESSION = array();//Se asigna la sesión a un array vacío = unset($_SESSION)
session_destroy();//Se destruye la información de la sesión, no destruye la cookie
setcookie(session_name(), '', time()-7200, '/');//Se caduca la cookie

echo "<br> Cerrandos sesión...";

//Ir a la pantalla de LOG IN
echo "<br><a href='login.php'>Ir a log in</a>";