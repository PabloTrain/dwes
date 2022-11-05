<?php
class App{

  public function run(){
    if (isset($_GET["method"])) {
      $method = $_GET["method"];
    } else {
      $method = "login";
    }
    $this->$method();      
  }

  //Función para mostrar el formulario de iniciar sesión
  public function login(){
    //Si ya existe la cookie con el nombre nos lleva al método home
    if (isset($_COOKIE["nombre"])) {
      header("Location: ?method=home");
    
    }else{
      //Si no existe la cookie con el nombre, 
      //nos muestra el formulario e inicio de sesión
      include('views/login.php');
    }
    
  }

  //Función para guardar los datos del inicio de sesión en cookies y 
  //Renviar al método del home con los deseos
  public function auth(){
    //Comprueba que existe el nombre y guarda el nombre en una variable
    if (isset($_POST["nombre"])) {
      $nombre = $_POST["nombre"];

    //Si no existen te redirige al método login que muestra el
    //formulario de inicio de sesión  
    }else{
      header("Location: ?method=login");
    }
    //Crea una cookies con el nombre
    setcookie("nombre", $nombre, time() + 7200);
    //reenviar al método home
    header("Location: ?method=home");
  }

  //Función home incluye la vista de la lista si existe la cookie nombre
  //Si no existe te redirige al login
  public function home(){
    //Comprueba si existe la cookie nombre, si no existe te reenvia al login
    if (!isset($_COOKIE["nombre"])) {
      header("Location: ?method=login");
    }

    //Comprueba si existe la cookie deseos que recoge la lista de los deseos
    if (isset($_COOKIE["deseos"])) {
      //Recoge los deseos, después de usar la función unserialize para poder mostrar el contenido
      $deseos = unserialize($_COOKIE["deseos"]);
    } else {
      //La inicializa vacía
      $deseos = [];
    }
    //Incluye la vista de la lista de deseos
    include("views/home.php");
  }

  //Función new, sirve para añadir nuevo elemento a la lista a través del botón de la vista home
  public function new(){

    //Recoge el valor del input new
    $new = $_POST["new"];

    //Comprueba si el valor esta vacío, si esta vacío no lo añade
    if(!empty($new)){
      //Comprueba si la cookie deseos esta ya creada
      if (isset($_COOKIE["deseos"])) {
        //Si ya esta creada la guarda en una variable
        $deseos = unserialize($_COOKIE["deseos"]);
      }

      //Guarda el nuevo valor en un array
      $deseos[] = $new;

      //Crea la cookie si no lo está y si ya esta, la actualiza
      //El contenido esta serializado, por eso es necesario recogerlo usarlo unserialize, como esta arriba
      setcookie("deseos", serialize($deseos), time() + 7200);
      //Vuelve a cargar la vista de la lista de deseos actualizada
      header("Location: ?method=home");

    //Sino vuelve a mostrar el formulario del método home sin haber introducido ningún cambio
    }else{
      header("Location: ?method=home");
    }
  }

  //Función para borrar un elemento en concreto a través del indice
  public function delete(){
    //Comprueba si la cookie deseos esta ya creada
    if (isset($_COOKIE["deseos"])) {
      //Si ya esta creada la guarda en una variable
      $deseos = unserialize($_COOKIE["deseos"]);
    }

    //Recogemos el id que recibimos a través de un href=""
    $id = $_GET["id"];

    //Quitamos el deseo del array
    unset($deseos[$id]);
    //Actualizamos la cookie
    setcookie("deseos", serialize($deseos), time() + 7200);
    //Vuelve a cargar la vista de la lista de deseos actualizada
    header("Location: ?method=home");
  }

  //Función empty para vaciar la lista de deseos
  public function empty(){
    //Comprueba si existe la cookie deseos
    if(isset($_COOKIE["deseos"])){
      //Caduca la cookie deseos, que contiene la lista de deseos
        setcookie('deseos', "",  -7200);
    }
    //Reenvia al método home que muestra la lista actualizada sin deseos
    header("Location: ?method=home");    
  }

  //Función close, para cerrar la sesión: borra todas las cookies
  public function close(){
    //Comprueba si existe la cookie deseos
    if(isset($_COOKIE["deseos"])){
      //Caduca la cookie deseos, que contiene la lista de deseos
      setcookie("deseos", "",  -7200);
    }
    //caduca la cookie del nombre
    setcookie("nombre", "",  -7200);
    //Reenvia al método login que muestra el formulario de inicio de sesión
    header("Location: ?method=login");
  }
}
