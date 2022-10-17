<?php

    $nombrefich = "modulodwes.txt"; //Al estar al mismo nivel no necesita la ruta completa
    $fp = fopen($nombrefich, "r"); // se le pasa el fichero y el modo que se quiere abir

    if(!$fp){
        echo "<br>No he podido leer el fichero";
    }else{
        //Leer el fichero
        
        /*
            //1.- Caracter a caracter
            while (!feof($fp)) {
                $caracter = fgetc($fp);
                //Necesario para imprimir los saltos de línea
                if($caracter == "\n"){
                    echo "<br>";
                }
                echo $caracter;
            }
        */

        /*
            //2.- Linea a linea
            while (!feof($fp)) {
                $linea = fgets($fp);
                //Es necesario meter un salto de línea en html
                echo $linea . "<br>";
            }

        */
        
        //Con la función fread() - No respeta los saltos de línea
        $contenido = fread($fp, filesize($nombrefich));
        print_r($contenido);
    }
    echo "<br>Cerrando el fichero...";
    fclose($fp);

    $fp2 = fopen($nombrefich, "a"); // se le pasa el fichero y el modo que se quiere abir
    if(!$fp){
        echo "<br>No he podido abrir el fichero";
    }else{
        fwrite($fp2, PHP_EOL . "Esta es otra línea");
    }    
    
    fclose($fp2);


