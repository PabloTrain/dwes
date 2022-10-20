<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cookies</title>
</head>
<body>
    <h3>Selecciona un idioma</h3>
    <form name="formulariocookeis" action="mostrarejercicioCookies.php" method="POST">
     
        <select name="idiomas" id="idiomas">
                    <option value="español">Español</option>
                    <option value="ingles">Inglés</option>
                    <option value="aleman">Alemán</option>
                    
        </select>
        <h3>Selecciona una marca de coche</h3>
        <select name="marca" id="marca">
                    <option value="toyota">Toyota</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="porche">Porche</option>
        </select>
        <br><br>

        <!-- setcookie("primeracookie", value, time()+300); -->
        <input type="submit" name="enviar" value="Enviar"> 

    </form>
</body>
</html>
