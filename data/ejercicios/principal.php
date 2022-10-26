<?php
//Para unirse a una sesión ya iniciada
session_start();

echo "<br>Bienvenido " . $_SESSION["usuario"];
echo "<br><a href='logout.php'>Ir a logout</a>";