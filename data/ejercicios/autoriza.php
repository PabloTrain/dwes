<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de chequeo de credenciales</h1>
    <h2>Bienvenido</h2>
    <?php
    
        if (isset($_POST['envio']) && !empty($_POST['nombreusu'])) {
            $usuario = $_POST['nombreusu'];
            echo "<br> El nombre del usuario introducido es : " . $usuario;
        }else {
            echo "<br><h3> No has introducido nigún usuario</h3>";
        }
        
        echo "<br> La contraseña del usuario introducida es : " . $_POST['passwd']; 

        //Recogia valores checkbox

        if (isset($_POST['envio'])) {
            if (!empty($_POST['asignaturas'])) {
            
                $asignaturas = $_POST['asignaturas'];
                
                foreach ($asignaturas as $asignatura) {
                    echo "<br> Te encata el modulo " . $asignatura;
                }

                //var_dump($asignaturas);

            }else {
                echo "<br><p> No te gusta DAW</p>";
            }
        }     
        
        //Recogia valores radiobutom

        if (isset($_POST['envio'])) {
            if (!empty($_POST['edad'])) {
            
                $edad = $_POST['edad'];                
                echo "<br>Rango de edad: ". $edad;

            }else {
                echo "<br><p> No has elegido un rango de edad</p>";
            }
        } 

        //Recogia de listas desplegables

        if (isset($_POST['envio'])) {
            if (!empty($_POST['equipos'])) {
            
                $equipo = $_POST['equipos'];                
                echo "<br>Tu equipo favorito es: ". $equipo;

            }else {
                echo "<br><p> No tienes un equipo preferido</p>";
            }
        }

        //Recogia de listas desplegables multiples

        if (isset($_POST['envio'])) {

            $equipos = $_POST['equiposm'];

            if (!empty($equipos)) {
            
                foreach ($equipos as $equipo) {
                    echo "<br> Eres fan del " . $equipo;
                }            

            }else {
                echo "<br><p> No tienes equipos preferidos</p>";
            }
        }

        //Recogia de un valor hidden

        if (isset($_POST['envio'])) {
            $ip = $_POST['ip'];

            if (!empty($ip)) {
             
                echo "<br> La IP del servidor es " . $ip;
                
            }else{
                echo "<br> No se ha podido encontrar la IP del servidor";
            }
        }   

    ?>
</body>
</html>