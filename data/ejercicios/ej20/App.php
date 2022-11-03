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
    //Crea la sesión si no está creada o se une a una ya creada
    session_start();
    //Recuperamos el valor de la sesión en una variable
    $colorfondo = $_SESSION["colorfondo"];

    //Comprobamos que la sesión no esta vacía
    if(isset($colorfondo)){
      //Muestra el formulario de entrada
      include('views/home.php');
      //Ponemos el collor que tiene la sesión guardada de fondo
      echo "<body style='background-color:" . $colorfondo . "'>";
    }else{
      //Ponemos el color que tiene la sesión guardada de fondo
      $this->colores();
    }
       
  }

  //Muestra lista de colores y cambia de color de fondo al elegir
  public function colores(){
    //Incluimos el php con la lista de colores  
    include('views/colores.php');
  }

  //Recibe el color por parametro, crea la cookie y reenvia al método home
  public function cambio(){
    //Recuperamos el valor de la lista incluida en la funcion colores()
    $color = $_GET["color"];
    //Crea la sesión si no está creada o se une si ya lo esta
    session_start();
    //Asignamos el valor recuperado a la sesión
    $_SESSION["colorfondo"] = $color;

    //Renvia al método home
    header("Location: ?method=home");
    exit;
  }
}