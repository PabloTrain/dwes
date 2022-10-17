<?php

    /*
        - interfaces, clases abstract
        - objetos
        - polimorfismo. sobreescritura de metodos
        - Sobrecarga de métodos ? -> NO* 
        - Sobrecarga de constructores ? -> NO*
        - Herencia única -> Extends
        - Invocar "algo" del padre --> paret::
        - $this --> método
        - $this --> atributo

    */

class Modulo extends Asignatura{
    private $codigo = null;

    function __construct($nombre, $numcreditos, $codigo){

        parent::__construct($nombre, $numcreditos);
        $this->codigo = $codigo;
        
    }

    function getCodigo(){
        return $this->codigo;
    }

    function setCodigo($nuevocodigo){
        $this->codigo = $nuevocodigo;
    }

    function __toString(){
        return "Datos del módulo : " .
                "<br>- Nombre de la asigantura: " . $this->getNombre() .
                "<br>- Número de créditos: " . $this->getNumCreditos() .
                "<br>- Código del módulo: " . $this->codigo;
                
    }

}//fin de la clase