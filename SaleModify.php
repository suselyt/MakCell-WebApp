<?php
// Inicia la conexión a la base de datos
include 'conexion.php';

// Obtén los datos del formulario para header_ventas
$edit_id_header = $_POST['id'];
$editFecha = $_POST['fecha'];
$editCliente = $_POST['cliente'];

// Actualiza la tabla header_ventas
$consultaHeader = "UPDATE sales_header SET sale_date = ?, client_name = ? WHERE id_headersale = ?";
$stmtHeader = $conex->prepare($consultaHeader);
$stmtHeader->bind_param("ssi", $editFecha, $editCliente, $edit_id_header);
$stmtHeader->execute();

// Obtener los arrays de productos, cantidades y precios de details_ventas
$editProductos = $_POST['editProducto'];
$editCantidades = $_POST['editCantidad'];
$editPrecios = $_POST['editPrecio'];
$id_details = $_POST['id_detailventa']; // Agrega un campo oculto en el modal para enviar los ID


// Actualiza cada entrada en details_ventas
$consultaDetails = $conex->prepare("UPDATE details_ventas SET producto_servicio = ?, cantidad = ?, precio = ? WHERE id_detailventa = ?");
foreach ($editProductos as $index => $editProducto) {
    $editCantidad = $editCantidades[$index];
    $editPrecio = $editPrecios[$index];
    $editId_detail = $id_details[$index];
    
    // Vincula los parámetros y ejecuta la consulta
    $consultaDetails->bind_param("siii", $editProducto, $editCantidad, $editPrecio, $editId_detail);
    $consultaDetails->execute();
}

////////////////////////////////////////////////////////
//agregar producto si no estaba 
$productos = $_POST['producto']; 
$cantidades = $_POST['cantidad']; 
$precios = $_POST['precio']; 

if (!empty($productos) && !empty($cantidades) && !empty($precios)) {

    for ($i = 0; $i < count($productos); $i++) {
        $producto = $productos[$i];
        $cantidad = $cantidades[$i];
        $precio = $precios[$i];

        // insertar en details ventas
        $stmt_details = $conex->prepare("INSERT INTO details_ventas (producto_servicio, cantidad, precio, fk_headerventa) VALUES (?, ?, ?, ?)");
        $stmt_details->bind_param("siii", $producto, $cantidad, $precio, $edit_id_header);
        $stmt_details->execute();
    }

}

// Cierra las consultas
$stmtHeader->close();
$consultaDetails->close();
$conex->close();

// Redirige a la página principal o muestra un mensaje de éxito
header("Location: sales.php");
exit();
?>
