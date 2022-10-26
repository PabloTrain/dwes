<?php
//Para unirse a una sesión ya iniciada
session_start();

echo "<title>Principal</title>";
echo "<br>Bienvenido " . $_SESSION["usuariook"]["user"];
echo "<br><a href='logout.php'>Ir a logout</a>";