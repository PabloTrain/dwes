<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 18</title>
</head>
<body>
  <!-- RECUPERAMOS EL NOMBRE CON UNA COOKIE -->
  <?php
    echo "<h1>Bienvenido ".  $_COOKIE['nombre'] . "</h1>";
  ?>

  <h3>Alta de nuevos deseos</h3>

  <!-- Ponemos el action, en vez de ponerlo a un href-->
  <form action="?method=new" method="post">
    <p>
      <label for="new">Nuevo deseo</label>
      <input type="text" name="new">
      <input type="submit" value="Añadir deseo">
    </p>
  </form>

  <h2>Lista de deseos</h2>
  <ol>
    <?php 
    //Comprobamos si hay algun deseo
    if (count($deseos)) {
      //Si hay deseos los mostramos recorriendo un foreach
      foreach ($deseos as $id => $deseo) {
        //A cada deseo le añadimos un enlace con el metodo delete y el id de cada deseo para poder borrarlo en el App.php
        echo "<li>" . $deseo . ' <a href="?method=delete&id=' . $id . '"> borrar</a> </li>';
      }

    //Si no hay deseos muestra un mensaje informativo  
    } else {
      echo "No hay deseos en la lista";
    }
    ?>
  </ol>
    <!-- ENLACES PARA VACIAR LISTA Y CERRAR SESIÓN -->
  <a href="?method=empty">Vaciar lista de deseos</a>
  <a href="?method=close">Cerrar sesión</a>
</body>
</html>