<?php

    include_once "manejadorexcepciones.php";

    //Calcula el inverso del número pasado por parametro
    function inverso($num){

        if($num == 0){
            //throw new Exception("No se puede dividir por 0");
            throw new MiExcepcion("No se puede dividir por 0");
        }
        return 1/$num;
    }//fin del método

    try {
        echo "<br>El inverso del número 5 es: " . inverso(5);

    } catch (Exception $e) {
        echo "<br>La razón de la excepción es: " . $e->getMessage();

    } finally {
        echo "<br>Esto siempre se ejecuta";

    }

    try {
        echo "<br>El inverso del número 5 es: " . inverso(0);

    } catch (MiExcepcion $e) {
        echo "<br>La razón de la excepción es: " . $e->errorPersonalizado();

    } finally {
        echo "<br>Esto se ejecuta por segunda vez";

    }