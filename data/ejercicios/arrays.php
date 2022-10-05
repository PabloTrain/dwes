<?php 
    //los elementos son heterogéneos
    $miarray = array(1, "hola", 3.0, false);

    echo "<br> Elemento 2 de la array: " . $miarray[2];

    //Mostrar array
    //foreach, var_dump, print_r

    echo "<br><br>Recorrer con foreach";
    foreach($miarray as $elmto){
        echo "<br>El elmto es: " . $elmto;
    }

    echo "<br><br>Recorrer con print_r()<br>";
    echo print_r($miarray);

    echo "<br><br>Recorrer con var_dump()<br>";
    echo var_dump($miarray);

    echo "<br><br>Mostrar la longitud de una array con count()<br>";
    echo "Longitud de la array: " . count($miarray);

    $array2=[
        3,
        2,
        5,
        9
    ];

    // Si delante de $elto se coloca & se modifica el array
    echo "<br><br>Recorrer con foreach";
    foreach($array2 as $elto){
        $elto = $elto *2;
        echo "<br> Valor de elemento: " . $elto;
    }
    echo "<br>";
    print_r($array2);

    //Para añadir un elemento a la array
    echo "<br><br>Añadimos el valor 15 a la array.<br>";
    $array2 []= 15;
    print_r($array2);

    //Para eliminar un elemento de la array con unset(), ttambién se elimina el índice
    echo "<br><br>Eliminamos el elemento 2 del array.<br>";
    unset($array2[2]);
    print_r($array2);

    //Para añadir un elemento a la array, después de haber eliminado un elemento
    echo "<br><br>Añadimos el valor 22 a la array.<br>";
    $array2 []= 22;
    print_r($array2);

    //Para añadir un elemento a la array en una posición eliminada
    echo "<br><br>Añadimos el valor 13 en la posición 2 de la array.<br>";
    $array2 [2]= 13;
    print_r($array2);

    //Para añadir un elemento a la array
    echo "<br><br>Mostramos la posición 2.<br>";
    print_r($array2[2]);

    //Mostrar clave y valor de la array --> foreacj ($array as $clave => $valor){}
    echo "<br><br>Mostrar clave y valor de array";
    foreach($array2 as $key => $value){
        echo "<br> Clave: " . $key . " y valor: " . $value;
    }

    //Arrays asociativos
    echo "<br><br>Array asociativo con datos de una persona";
    $persona = array(
        "Nombre" => "María",
        "Edad" => 21,
        "Peso" => 66,
        "casado" => false,
        "DNI" => "73051923J",
        8 => "nss"
    );

    foreach($persona as $key => $value){
        echo "<br> Clave: " . $key . " y valor: " . $value;
    }

    //Añadimos un valor a persona sin clave
    echo "<br><br>Añadimos un valor a persona sin clave";
    $persona[] = "balonmano";
    foreach($persona as $key => $value){
        echo "<br> Clave: " . $key . " y valor: " . $value;
    }

    //Mostrar elementos individuales
    echo "<br><br> Mostrar lo que queramos de una persona";
    echo "<br>El DNI de " . $persona["Nombre"] . " es " . $persona["DNI"] ; 

    //Arrays miltidimensionales: matrices, arrays de arrays
    $arrm = [
        0 => [1,3],
        1 => [5,7,9]
    ];

    echo "<br><br>Mostrar un arrays de arrays";
    echo "<br>La posición [1][1]-> " . $arrm [1][1];