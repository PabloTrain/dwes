<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Formulario credenciales</h1>
        <form name="miformulario" action="/autoriza.php" method="POST">
            <p>
            <label for="nombre">Introduce nombre: </label>
            <input type="text" name="nombreusu" id="nombreusu"> 
            </p>

            <p>
                <label for="password">Introduce la contraseña: </label>
                <input type="password" name="passwd" id="passwd"> 
            </p>

            <p>
                <br><label>Selecciona tu asignatura preferida</label>
                <br><input type="checkbox" name="asignaturas[]" id="asignaturas1" value="Diseño de interfaces"><label for="asignaturas1">Diseño de interfaces</label>
                <br><input type="checkbox" name="asignaturas[]" id="asignaturas2" value="Despliegue de aplicaciones web"><label for="asignaturas2">Despliegue de aplicaciones web</label>
                <br><input type="checkbox" name="asignaturas[]" id="asignaturas3" value="Desarrollo web en entorno servidor"><label for="asignaturas3">Desarrollo web en entorno servidor</label>
                <br><input type="checkbox" name="asignaturas[]" id="asignaturas4" value="Desarrollo web en entorno cliente"><label for="asignaturas4">Desarrollo web en entorno cliente</label>

            </p> 

            <p>
                <label>Selecciona tu rango de edad</label>
                <br><input type="radio" name="edad" id="edad1" value="0 - 18"><label for="edad1">0 - 18</label>
                <br><input type="radio" name="edad" id="edad2" value="19 - 45"><label for="edad2">19 - 45</label>
                <br><input type="radio" name="edad" id="edad3" value="46 - 64"><label for="edad3">46 - 64</label>
                <br><input type="radio" name="edad" id="edad3" value="65 - 100"><label for="edad4">65 - 100</label>
            </p>

            <p>Elige tu equipo de fútbol favorito</p>
            <p>         
                <select name="equipos" id="equipos">
                    <option value="Arsenal FC">Arsenal FC</option>
                    <option value="Tottenham Spurs">Tottenham Spurs</option>
                    <option value="Manchester City">Manchester City</option>
                    <option value="Chelsea FC">Chelsea FC</option>
                </select>
            </p>

            <p>Elige tus equipos de fútbol favoritos</p>
            <p>         
                <select name="equiposm[]" size="3" required>
                    <option value="Arsenal FC">Arsenal FC</option>
                    <option value="FC Barcelona">FC Barcelona</option>
                    <option value="Real Zaragoza">Real Zaragoza</option>
                    <option value="Olympique de Lyon">Olympique de Lyon</option>
                    <option value="Borussia Dortmund">Borussia Dortmund</option>
                </select>
            </p> 

            <!-- Para un elemento predefinido hay que poner checked -->

            <input type="hidden" name="ip" value="<?= $_SERVER["SERVER_ADDR"]?>">


            <input type="submit" name="envio" value="Enviar">

        </form>

    </body>
</html>