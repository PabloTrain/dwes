<?php
//Para unirse a una sesión ya iniciada
session_start();

//Para eliminar una sesion
$_SESSION = array();//Se asigna la sesión a un array vacío
session_destroy();//Se destruye la información de la sesión, no destruye la cookie
setcookie(session_name(), '', time()-7200, '/');//Se caduca la cookie

echo "<br>La página se ha cargado " . $_SESSION["contador"] . " veces.";
echo "<br>El objeto es una " . $_SESSION["objeto"];