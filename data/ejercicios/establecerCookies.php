<?php
    $idioma = $_POST['idiomas']; 
    setcookie("cookieidioma", $idioma, time()+300);
    $marca = $_POST['marcas']; 
    setcookie("cookiemarca", $marca, time()+300);         
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establecer cookies</title>
</head>
<body>
<form name="formulariocookeis" action="leerCookies.php" method="POST">
    <h1>PÁGINA DE ESTABLECER LAS COOKIES</h1>
     <input type="submit" name="mostrar" value="Mostrar Resultado"> 

 </form>
 
</body>
</html>