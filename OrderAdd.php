<?php
    
    include 'conexion.php'; //conexion php

    //definir variables
    $fecha = $_POST['fecha'];
    $servicio = $_POST['servicio'];
    $dispositivo = $_POST['dispositivo'];
    $cliente = $_POST['cliente'];
    $telefono = $_POST['telefono'];
    $status = $_POST['status'];


    $consulta = $conex->prepare("CALL AgregarOrden(?, ?, ?, ?, ?, ?)"); //llamar al procidimiento 
    $consulta->bind_param("sisssi", $fecha, $servicio, $dispositivo, $cliente, $telefono, $status);

    if ($consulta->execute()) {
        echo "Orden agregada exitosamente";
        header("Location: orders.php");
        exit;
    }
    else {
        echo "Hubo un error al agregar la orden:" . $consulta->error;
    }

    $consulta->close();
    $conex->close();
?>