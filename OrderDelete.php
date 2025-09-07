<?php

    include'conexion.php';

    $id = $_POST['id_registro'];

    $consultaEliminar = "DELETE FROM ordenes WHERE id_orden = '$id'";
    $queryEliminar = mysqli_query($conex, $consultaEliminar);

    if ($queryEliminar)
    {
        Header("Location: orders.php");
    }

?>