<?php

    include 'conexion.php';

    $id = $_POST['id'];

    $consultaEliminar = "DELETE FROM sales_header WHERE id_headersale = ?";
    $queryEliminar = $conex->prepare($consultaEliminar);
    $queryEliminar->bind_param("i", $id);
    
    if ($queryEliminar->execute())
    {
        Header("Location: sales.php");
    }

    $queryEliminar->close();
    $conex->close();

?>