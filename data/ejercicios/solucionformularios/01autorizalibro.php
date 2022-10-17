<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de registro de libros</h1>
    <h2>Datos del libro</h2>
    <?php
    
        if (isset($_POST['registrar'])) {
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $editorial = $_POST['editorial'];
            $numpaginas = $_POST['numpaginas'];
                
            echo "<br>El título es : " . $titulo . " .";
            echo "<br>El autor es : " . $autor . " .";
            echo "<br>La editorial es : " . $editorial . " .";
            echo "<br>Tiene : " . $numpaginas . " páginas.";

        }  
    ?>
</body>
</html>