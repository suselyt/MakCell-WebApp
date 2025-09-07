<?php

    include 'conexion.php';

    $fecha = $_POST['fecha'];
    $cliente = $_POST['cliente']; 
    $productos = $_POST['producto']; 
    $cantidades = $_POST['cantidad']; 
    $precios = $_POST['precio']; 

    $stmt = $conex->prepare("CALL AgregarVenta(?, ?,@last_insert_id)");
    $stmt->bind_param("ss", $fecha, $cliente);
    $stmt->execute();

    $result = $conex->query("SELECT @last_insert_id AS last_insert_id");
    $row = $result->fetch_assoc();
    $last_insert_id = $row['last_insert_id'];

    for ($i = 0; $i < count($productos); $i++) {
        $producto = $productos[$i];
        $cantidad = $cantidades[$i];
        $precio = $precios[$i];
    
        // insertar en details ventas
        $stmt_details = $conex->prepare("INSERT INTO details_ventas (producto_servicio, cantidad, precio, fk_headerventa) VALUES (?, ?, ?, ?)");
        $stmt_details->bind_param("siii", $producto, $cantidad, $precio, $last_insert_id);
        $stmt_details->execute();
    }

    $stmt->close();
    $stmt_details->close();
    $conex->close();

    header("Location: sales.php"); 
    exit;

?>