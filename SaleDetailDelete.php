<?php

    include 'conexion.php';

    $id = $_POST['id'];

    $consultaEliminar = "DELETE FROM details_ventas WHERE id_detailventa = ?";
    $queryEliminar = $conex->prepare($consultaEliminar);
    $queryEliminar->bind_param("i", $id);
    
    if ($queryEliminar->execute())
    {
        Header("Location: sales.php");
    }

    $queryEliminar->close();
    $conex->close();

?>