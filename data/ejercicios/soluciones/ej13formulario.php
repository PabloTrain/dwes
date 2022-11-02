<?php
    
    //Función para comprobar si las credenciales son válidas
    function comprobarcredenciales($user){
        //Comprobamos que tiene al menos 3 caracteres y el usuario existe
        if(strlen($user)<3 || !comprobarusuario($user)){

            return false;
        }else{
            return true;
        }
    }

    //Funcion para comprobar que el nombre existe
    function comprobarusuario($user){
        //Array de los usuarios registrados
        $usuariosregistrados = array("Pablo", "Juan", "Mateo", "María");

        //Recorremos el array anterior
        foreach($usuariosregistrados as $userregistrado){
            //Comprobamos si el usuario introducido es igual al el del formulario
            if($userregistrado == $user){
                return true;

            }else{
                return false;
            }
        }
    }

    //Función para mostrar el usuario en el input si no es correcto
    function palabraincorrecta($user){
        //Comprobamos que tiene al menos 3 caracteres y el usuario existe
        if(strlen($user)<3 || !comprobarusuario($user)){
            //Devolvemos el usuario 
            return $user;

        }
    }

    //Comprobamos si el método es el post
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        //Comprobamos que se ha pulsado iniciarsesion
        if(isset($_POST["iniciarsesion"])){
            //recuperamos las credenciales
            $credentials = comprobarcredenciales($_POST["usuario"]);
            //Comprobamos si las credenciales son válidas
            if($credentials == false){
                $error = 1;
            }else{
                //Si son válidas nos lleva a otra página
                header("Location: ej13mostrar.php");
            }
        }    
    }   
?>

<!-- Parte HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <h1>Formulario usuario</h1>
        <?php
            if(isset($error) && $error == 1){
                echo "<p><font color='red'>Nombre incorrecto</font></p>";
            }
        ?>
        <!-- En este caso el código php está en la misma página asi que ponemos un # en vez de la ruta-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <p>
            <label for='usuario'>Usuario </label>
            <input type='text' name='usuario' id='usuario' value="<?php if($error == 1){ echo palabraincorrecta($_POST["usuario"], $_POST["password"]);};?>">
        </p>

        <input type='submit' name='iniciarsesion' value='Iniciar sesión'>
        </form>
    </body>
</html>