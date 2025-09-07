<?php

    $conex = mysqli_connect("localhost","root", "", "makcell3");

    if (!$conex) {
        die("Error de conexión: " . mysqli_connect_error());
    }

?>

