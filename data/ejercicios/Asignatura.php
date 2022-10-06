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

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nnombre){
        $this->nombre = $nnombre;
    }
}//fin de clase    