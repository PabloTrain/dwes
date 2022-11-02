<?php
/* desplegable ->   vaqueros
                    telefono
                    coche
                    collar
                    cd

Se van mostrando en la misma página lo elegido
    -> sesiones, codificado con json.
    -> recuperar la información con json codificado.
*/   
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["anyadir"])){
        session_start();

        


        
    }//ifpost 
    
    function mostrar(){
        $item = $_POST["lista"];
        $_SESSION["deseo"][] = $item;

        //Codificar en json
        $sesioncodif = json_encode($_SESSION);
        echo "<br>Sesion codificada: <br>";
        var_dump($sesioncodif);
        echo "<br><br>";

        //OPCION 1 - Decodificar como un array
        $sesiondecodif= json_decode($sesioncodif, true);//Mas sencillo

        for ($i=0; $i < count($sesiondecodif, COUNT_RECURSIVE)-1; $i++) { 
            echo  "<br>Elemento " . $i . " es " . $sesiondecodif["deseo"][$i];
        }

        echo "<br><br>Sesion decodificada como un array: <br>";
        var_dump($sesiondecodif);
        echo "<br><br>";

        //OPCION 2 - Decodificar como un objeto
        $sesiondecodif= json_decode($sesioncodif);
        echo "<br>Sesion decodificada como un objeto: <br>";
        var_dump($sesiondecodif);
        echo "<br><br>";

        //Cambiar un elemento
        $sesiondecodif->{"deseo"}[1] ="Portatil";

        //CONVERTIR a un array
        $miarray = get_object_vars($sesiondecodif);
        print_r($miarray);
        echo "<br><br>";
        for ($i=0; $i < count($miarray, COUNT_RECURSIVE)-1; $i++) { 
            echo  "<br>Elemento " . $i . " es " . $miarray["deseo"][$i];
        }
        
    }

}//ifserver


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deseos</title>
</head>
<body>
    <h1>Página de mi lista de deseos</h1>
    
    <form name="deseos" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
     
        <select name="lista" id="lista" require>
            <option name ="vaqueros" value="Vaqueros">Vaqueros</option>
            <option name ="telefono" value="Teléfono">Teléfono</option>
            <option name ="coche" value="Coche">Coche</option> 
            <option name ="collar"value="Collar">Collar</option> 
            <option name ="cd" value="Cd">Cd</option> 
        </select>

        <input type="submit" name="anyadir" value="Añadir a deseos"> 

    </form>

    <?php
        if(isset($_POST["anyadir"])){

            echo "<br>Has añadido: ";
            

            $listadeseos = mostrar();

            /*foreach($listadeseos as $deseo){
                echo "<br>" .$deseo;
            }*/
            
            
        }


    ?>
</body>
</html>