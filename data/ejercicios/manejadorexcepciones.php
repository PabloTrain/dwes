<?php 
    class MiExcepcion extends Exception{
        public function errorPersonalizado(){
            $menserror = "Información del error: " . 
            "<br>Mensajde de error: " . $this->getMessage() .
            "<br>Fichero que genera el error: " . $this->getFile() .
            "<br>Línea en la que se produce el error: " . $this->getLine();
            return $menserror;
        }
    }