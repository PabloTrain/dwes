<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Página de registro de libros</h1>
    <h2>Datos del libro</h2>
    <?php
    
        //Comprobamos que se ha pulsado registrar
        if (isset($_POST['registrar'])) {

            //Guardamos el valor de lo que ha introducido el usuario en el formulario
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $editorial = $_POST['editorial'];
            $numpaginas = $_POST['numpaginas'];

            //Comprobamos si ha introducido el título y mostramos un mensaje u otro
            if(!empty($titulo)){
                echo "<br>El título es : " . $titulo . ".";
            }else{
                echo "<br>No has introducido el título del libro.";
            }

            //Comprobamos si ha introducido el autor y mostramos un mensaje u otro
            if(!empty($autor)){
                echo "<br>El autor es : " . $autor . " .";
            }else{
                echo "<br>No has introducido el autor del libro.";
            }

            //Comprobamos si ha introducido la editorial y mostramos un mensaje u otro
            if(!empty($editorial)){
                echo "<br>La editorial es : " . $editorial . " .";
            }else{
                echo "<br>No has introducido la editorial del libro.";
            }

            //Comprobamos si ha introducido el número de paǵinas y mostramos un mensaje u otro
            if(!empty($numpaginas)){
                echo "<br>Tiene : " . $numpaginas . " páginas.";
            }else{
                echo "<br>No has introducido el número de páginas del libro.";
            }
        }  
    ?>
</body>
</html>