<?php

    include 'conexion.php';

    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $servicio = $_POST['servicio'];
    $dispositivo = $_POST['dispositivo'];
    $cliente = $_POST['cliente'];
    $telefono = $_POST['telefono'];
    $status = $_POST['status'];
    

    $consulta = $conex->prepare("CALL EditarOrden(?, ?, ?, ?, ?, ?, ?)"); //llamar al procedimiento 
    $consulta->bind_param("isisssi", $id, $fecha, $servicio, $dispositivo, $cliente, $telefono, $status);

    if ($consulta->execute()) {
        echo "Orden editada exitosamente";
        header("Location: orders.php");
        
        exit;
    }
    else {
        echo "Hubo un error al editar la orden:" . $consulta->error;
    }

    $consulta->close();
    $conex->close();

?>