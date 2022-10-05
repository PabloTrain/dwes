<?php
    //Se usa notación Camel Case Ej: $CamelCase
    $var1 = 5;
    $var2 = "7";

    /*CONVERSIÓN DE DATOS*/
    $var2 = (int)"7";
    $var3 = (string)9;
    $var1 = (string)$var1;

    /*Sacar la variable, se concatena con el . */
    echo "Var1 es del tipo: " . gettype($var1) . "<br>";
    echo "Var2 es del tipo: " . gettype($var2) . "<br><br>";

    //Saber si una variable está definida-> isset(variable), si es falso no lo saca
    $var4;
    
    echo "¿La variable 3 está definida? -> " . isset($var3). "<br>";
    echo "¿La variable 4 está definida? -> " . isset($var4). "<br><br>";

    //Saber si la variable está vacia

    echo "¿La variable 3 está vacía? -> " . empty($var3). "<br>";
    echo "¿La variable 4 está vacía? -> " . empty($var4). "<br><br>";

    const MICONST = 100;

    echo "La constante es " . MICONST. "<br><br>";

    //EJEMPLO OPERADORES MISMO VALOR, DISTINTO TIPO
    $num1 = 3;
    $num2 = "3";

    if($num1 === $num2){
        echo "Son iguales." . "<br>";
    }else{
        echo "No son iguales." . "<br>";
    }

    //Comentario de una línea java
    /*Comentar 
    varias $var3
    líneas */

    /*
    VARIABLES: [A-Z, a-z, 0-9]
        No pueden comenza con número, ni caracter especiales. Excepto el _

        Cassensitive: diferencai mayúsculas de minúsculas
        JAVA -> SI
        PHP -> a medias: Para las variables si, para los métodos no
            $MIVAR != &miVar
            METODO1 = Metodo1 = metodo1
    
    TIPOS DE DATOS
        SIMPLES -> Int, string. boolean, float
        COMPLEJOS -> arrays, objetos

        Tipado de lenguaje de programación:
            - Fuerte: Java
            - Débil: PHP

        gwttype(); -> Sacar la variable
        . -> Concatenar dos cosas

    OPERADORES
        =, <, >, !=, <>, ==, === (Mismo valor y del mismo tipo)
    
        <=>

    ESTRUCTURAS DE CONTROL
        if(){}
        if(){}else{}
        if(){}elseif{}else{}
        while(){}
        do{}while();
        for($i = 0, $i<10, $i++){}
        foreach($array as $elmto){}

    ARRAY
        $miArray;
        $miArray[$i];

    INCLUSIÓN DEL CÓDIGO DE UN FICHERO EN OTRO
    Include, include_once, required, require_once
    
    */