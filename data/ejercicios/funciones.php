<?php

    $var1 = 6;
    $var2 = 7;

    function suma($a, $b){

        global $var1, $var2;
        $var1 = 99;
        $var2 = 100;

        echo "<br> La variable FUERA de la función var1 y var2 son " . $var1 . " y " . $var2;
        //Definición variable estáica
        static $varestatica = 0;
        echo "<br>El valor de la var estática es: " . $varestatica;
        $varestatica++;

        return $a + $b;
    }

    echo "<br> La variable a y b son " . $a . " y " . $b;
    echo "<br> La variable DENTRO de la función var1 y var2 son " . $var1 . " y " . $var2;

    echo "<br>La suma 1 vez " . suma(3,5);
    echo "<br>La suma 2 vez " . suma(3,5);
    echo "<br>La suma 3 vez " . suma(3,5);


    //Paso de parámetros por valor o por referencia (variable)
    function resta($op1, $op2){
        $op1 = $op1 - $op2;

        return $op1;
    }

    echo "<br>Llamada por valor " . resta(8,5);

    //Borrar una variable
    unset($var1);


    /*
    function resta(&$var3, $var4){
        $var3--;

        echo "<br> var 3 vale " . $var3
    }

    $var3 = 8;
    $var4 = 5;

    echo "<br>Llamada por valor " . resta($var3,6);

    */