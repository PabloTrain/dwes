<?php

class App{

  //Función que se manda desde el index que nos lleva al home()
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }
  
    $this->$method();      
  }

  //Coprueba si existe la cookie y si existe cambia el color del fonfo
  public function home(){
    //Recuperamos el valor de la cookie
    $color = $_COOKIE["color"];

    //Comprobamos que existe la cookie
    if(isset($color)){
        //Si existe muestra el formulario de entrada
        include('views/home.php');
        //Pone de fondo el color de la cookie
        echo "<body style='background-color:" . $color . "'>";
    }else{
        //Si no existe nos lleva a la funcion colores()
        $this->colores();
    }
       
  }

  //Muestra lista de colores y cambia de color de fondo al elegir
  public function colores(){
    //Incluimos el php con la lista de colores  
    include('views/colores.php');
  }

  //Borrar cookie y elegir nuevo color
  public function borrarcolor(){
    //Borra la cookie, la caduca
    setcookie("color", "", time()-7200);
    //Te redirecciona para elegir un nuevo color
    header("Location: ?method=cambio");
    exit;
  }

  //Recibe el color por parametro, crea la cookie y reenvia al método home
  public function cambio(){
    //Guardamos el una variable el valor del color
    $color = $_GET["color"];

    //Creamos la cookie con el color elegido en la lista
    setcookie("color", $color, time()+7200);

    //Renvia al método home
    header("Location: ?method=home");
    exit;
  }
}