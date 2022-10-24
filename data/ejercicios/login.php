<!--        
    Página Login: usuario y password
        -usuario = usuario
        password = 1234 => ok, rol= 0

        -usuario = admin
        password = 4567 => ok, rol= 1

        Si no -> Mostrar mensaje login erroneo


    Página principal: Bienvenido usuario
    Enlace logout.php

    Logout.php -> cerrar la sesión y enlace a login.php


-->

<?php
    echo "<p>";
        echo "<label for='usuario'>Usuario </label>";
        echo "<input type='text' name='usuario' id='usuario'>";
    echo "</p>";

    echo "<p>";
        echo "<label for='passw'>Password </label>";
        echo "<input type='password' name='passw' id='passw'>";
    echo "</p>";

    
