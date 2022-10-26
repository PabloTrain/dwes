<?php
    function comprobarcredenciales($user, $pass){
        if($user=="usuario" && $pass=="1234"){
            $credenciales["user"] = "usuario";
            $credenciales["rol"] = "0";
            return $credenciales;

        }
        if($user=="admin" && $pass=="4567"){
            $credenciales["user"] = "admin";
            $credenciales["rol"] = "1";
            return $credenciales;

        }
        return false;
        
    }//funcion

    //Función para mostrar el usuario si no es correcto
    function palabraincorrecta($user, $pass){
        if(!($user=="usuario" && $pass=="1234") && !($user=="admin" && $pass=="4567")){
            return $user;

        }
    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["iniciarsesion"])){
            $credentials = comprobarcredenciales($_POST["usuario"], $_POST["password"]);
            if($credentials == false){
                $error = 1;
            }else{
                //Si las credenciales son válidas
                session_start();
                $_SESSION["usuariook"] = $credentials;
                header("Location: principal.php");
            }
        }    
    }   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Log in</h1>
        <?php
            if(isset($error) && $error == 1){
                echo "<p><font color='red'>Credenciales inválidas</font></p>";
            }
        ?>
        <!-- En este caso el código php está en la misma página asi que ponemos un # en vez de la ruta-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <p>
            <label for='usuario'>Usuario </label>
            <input type='text' name='usuario' id='usuario' value="<?php if($error == 1){ echo palabraincorrecta($_POST["usuario"], $_POST["password"]);};?>">
        </p>

        <p>
            <label for='password'>Password </label>
            <input type='password' name='password' id='password'>
        </p>

        <input type='submit' name='iniciarsesion' value='Iniciar sesión'>
        </form>
    </body>
</html>