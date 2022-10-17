<?php
    /*

    CONCEPTOS GENERALES:
        - Sobreescritura de métodos
            --> Mismo nombre con mismo número ed parámetros, diferente comportamiento
                --> Clase figura -> método calcular area
                --> Clase círculo -> método calcular area
                --> Clase cuadrado -> método calcular area

        - Sobrecarga de métodos
            --> Mismo nombre con diferenye múmero de parámetros
        
        - Sobrecarga de constructores
            --> Diferentes constructores con el mismo nombre con diferentes parámetros
            
        - Polimorfismos: Objeto que se puede comportar como otro objeto:
                        --> Casting
                        --> Sobrescritura
                        --> Sobrecarga
                        --> Ligadura dinámica

    PHP:
        - SI sobrescritura
        - NO existe sobrecarga
        - NO hay sobrecarga constructores
        - SI hay polimorfismo (sobrescritura)           
        - public, private, protected, por defecto public         
    
    NOTACIÓN:
        - Nombre de las clases : UpperCamelCase(PascalClase)
        - Nombre metodos : loweCamelCase
        - JAVA : this.atributo
        - PHP : $this->atributo
    
        */  

class Asignatura{
    private $nombre = null;
    private $numcreditos = null;
    static $ciclo = null;

    public function __construct($nombre, $numcreditos){
        $this->nombre = $nombre;
        $this->numcreditos = $numcreditos;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nnombre){
        $this->nombre = $nnombre;
    }

    function getNumCreditos(){
        return $this->numcreditos;
    }

    function setNumCreditos($numcredit){
        $this->numcreditos = $numcredit;
    }

    static function getCiclo(){
        return self::$ciclo;
    }

    static function setCiclo($nueciclo){
        self::$ciclo = $nueciclo;
    }

    function __toString(){
        return "Datos de la asignatura : " .
                "<br>- Nombre de la asigantura: " . $this->nombre .
                "<br>- Número de créditos: " . $this->numcreditos ;
                
    }
}//fin de clase    