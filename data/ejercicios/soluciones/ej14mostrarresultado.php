
<?php

    //Comprobamos que se ha pulsado enviar
    if (isset($_POST['enviar'])) {
        //Guardamos en variables lo que hemos insertado en la paǵina anteior 
        $signo = $_POST['signos'];    
        $num1 = $_POST['num1']; 
        $num2 = $_POST['num2'];
        
        //Comprobamos que sean campos vaídos y no vacíos
        if (!empty($signo) && !empty($num1) && !empty($num2)) {
            //CASO DE QUE SEA SUMA
            if ($signo == 'sumar') {
                    
                echo "<br>El resultado de la suma " . $num1 . " + " . $num2 . " es " . ($num1 + $num2);
            //CASO DE QUE SEA RESTA
            }elseif ($signo == 'restar') {
                    
                echo "<br>El resultado de la resta " . $num1 . " - " . $num2 . " es " . ($num1 - $num2);
            //CASO DE QUE SEA MULTIPLICACIÓN
            } elseif ($signo == 'multiplicar') {
                    
                echo "<br>El resultado de la multiplicación " . $num1 . " * " . $num2 . " es " . ($num1 * $num2);
            //CASO DE QUE SEA DIVISIÓN
            } else {
                //HAY QUE CONTROLAR QUE NO SEA UNA DIVISIÓN ENTRE 0
                if($num2 != 0){
                    echo "<br>El resultado de la división " . $num1 . " / " . $num2 . " es " . ($num1 / $num2);
                } else{
                    //llamada a la función volver
                    volver();
                }   
                
            }       
        
        //Si no es válido o está vacio algún campo volvemos a la paǵina anteior
        }else{
            volver();
        }

        //Funcion para volver a la página anterior
        function volver(){
            header("Location: http://www.ejercicios.local/soluciones/ej14formulariocalculadora.html");
            exit();
        }
    }
    
?>
