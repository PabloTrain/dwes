<?php
    //Array con los nombres registrados
    $nombres = array("Pablo", "Juan", "Mateo", "María");
    //Variable para comprobar si existe el nombre o no
    $comprobar = false;

    //Comprobamos que se ha pulsado enviar
        if (isset($_POST['enviar'])) {
            //Recogemos el nombre del formulario
            $nombre = $_POST['nombre'];

            //Comprobamos si el nombre esta vacío
            if (!empty($nombre)) {  
                //Recorremos el array de nombres
                foreach($nombres as $nom){
                    //Comprobamos si el nombre introducido esta en el array
                    if($nombre == $nom){
                        //Guardamos un texto y la variable booleana a true
                        $texto = "<br> Hola " . $nombre . ", un saludo."; 
                        $comprobar = true;
                    }
                }
                //Si no está registrado el nombre vuelve al formulario
                if($comprobar == false){
                    header("Location: http://www.ejercicios.local/soluciones/ej12formularionombre.html");
                    exit();
                
                //Si está registrado muestra un texto de bienvenida con el nombre registrado
                }else{
                    echo "<title>Ejercicio 12</title>";
                    echo $texto;
                }
            //Si el nombre esta vacío se vuelve a la página anterior
            } else{
                header("Location: http://www.ejercicios.local/soluciones/ej12formularionombre.html");
                exit();
            }
        }  
?>