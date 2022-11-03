<?php
    
    //Función para comprobar si las credenciales son válidas
    function comprobarcredenciales($user){
        //Comprobamos que el usuario existe
        if(!comprobarusuario($user)){
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

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        //Comprobamos que se ha pulsado iniciarsesion
        if(isset($_POST["enviar"])){
            //recuperamos las credenciales
            $credentials = comprobarcredenciales($_POST["nombre"]);
            //Comprobamos si las credenciales son válidas
            if($credentials == false){
                $error = 1;
            }else{
                //Si son válidas nos lleva a otra página
                header("Location: ej12comprobar.php");
            }
        }    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Formulario comprobar nombre</h1>
    <form name="ej12formularionombre" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        
        <?php
            if(isset($error) && $error == 1){
                echo "<p><font color='red'>Campo obligatorio</font></p>";
            }
        ?>

        <p>
            <label for="titulo" >Introduce el nombre: </label>
            <input type="text" name="nombre" id="nombre"> 
        </p>

         <input type="submit" name="enviar" value="Enviar"> 

    </form>

</body>
</html>