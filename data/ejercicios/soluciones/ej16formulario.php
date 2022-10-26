<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Formulario añadir palabras en una lista</h1>
     
    <!-- En este caso el código php está en la misma página asi que ponemos un # en vez de la ruta-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        
    <p>
        <label for="palabras" >Introduce una palabra: </label>
        <!-- Input para que introduzca las palabras y lo guardamos en un array -->
        <input type="text" name="palabras[]" id ="palabra">
    </p>    
  <!-- Boton para ir añadiendo las palabras -->
  <input type="submit" value="Añadir" name ="anyadir">  

  <hr><!-- Separador entre la parte del formulario y la lista -->
  
  <!-- Abrimos la etiqueta ul-->
  <ul>
    <!-- PARTE PARA RECUPERAR LOS DATOS Y MONTAR LA LISTA-->   
    <?php
        //Recuperamos las palabras
        $palabras = $_POST['palabras'];
    
        if (isset($_POST['anyadir'])) {

            //Recorremos el array con las palabras
            foreach($palabras as $palabra) {
                //Comprobamos que la palabra no es un espacio en blanco
                if(!empty($palabra)){
                    //Imprimimos el resultado con la etiqueta li
                    echo '<li><input name="palabras[]" value="' . $palabra . '"></li>';
                }
            }
        }
    ?>
  </ul>
</form>
</body>
</html>