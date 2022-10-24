<?php
    if (isset($_POST['establecer'])) {
        $idioma = $_POST['idiomas']; 
        if(!empty($idioma) && !isset($_COOKIE["cookieidioma"])){
            setcookie("cookieidioma", $idioma, time()+3600);
        } 

        $marca = $_POST['marcas'];  
        if(!empty($marca) && !isset($_COOKIE["cookiemarca"])){
            setcookie("cookiemarca", $marca, time()+3600);;
        } 

        if(!empty($idioma) && !empty($marca)){
            //Redirige a esa página si no está vacío
            header("Location: leerCookies.php");
            //Después de una redirección se colo una exit() o un die()
            exit(); //die()
        }

    }else{
        //Borrar las cookies por seguridad
        setcookie("cookieidioma", "", time()-7200);
        setcookie("cookiemarca", "", time()-7200);


        //Redireccionara la página inicial
        header("Location: FormularioejercicioCookies.html");
        //Ponemos un exit 
        exit();
    }
           
?>