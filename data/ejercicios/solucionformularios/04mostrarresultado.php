<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de resultado</h1>
    <?php
        if (isset($_POST['enviar'])) {
            $signo = $_POST['signos'];    
            $num1 = $_POST['num1']; 
            $num2 = $_POST['num2']; 
            if (!empty($signo)) {
                if ($signo == 'sumar') {
                      
                    echo "<br>El resultado de la suma " . $num1 . " + " . $num2 . " es " . ($num1 + $num2);
                }elseif ($signo == 'restar') {
                      
                    echo "<br>El resultado de la resta " . $num1 . " - " . $num2 . " es " . ($num1 - $num2);
                } elseif ($signo == 'multiplicar') {
                      
                    echo "<br>El resultado de la multiplicación " . $num1 . " * " . $num2 . " es " . ($num1 * $num2);
                } else {
                      
                    echo "<br>El resultado de la división " . $num1 . " / " . $num2 . " es " . ($num1 / $num2);
                }       

            }
        }
     
    ?>
</body>
</html>