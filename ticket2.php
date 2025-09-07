<?php 
    include 'conexion.php'; //conexion a db
    require('fpdf/fpdf.php'); // extension creo se llamaba

    //id de la venta
    $id_venta = $_GET['id_venta'] ?? 1;

    $ConsultaTotal = "SELECT id_headersale, total_sale, sale_date FROM salesummary WHERE id_headersale = ? LIMIT 1"; //vista salesummary
    $queryTotal = $conex->prepare($ConsultaTotal); 
    $queryTotal->bind_param('i', $id_venta); //pone en el where el id que se obtuvo con get
    $queryTotal->execute(); //ejecuta consulta

    $queryTotal->bind_result($id, $totalVenta, $fecha);  //variable $id, $totalVenta, $fecha
    $queryTotal->fetch(); //hace que la info se guarde en las variables definidas arriba

    $queryTotal->free_result(); //pq el sql se traba si no se libera el fetch result antes de volver a usarlo

    $queryVenta = $conex->prepare("SELECT * FROM ticket
                                    WHERE id_headersale = ?"); //obtener los detalles de vista ticket
    $queryVenta->bind_param('i', $id_venta);
    $queryVenta->execute();
    $detalleVenta = $queryVenta->get_result(); //los resultados ahora están almacenados en $detalleVenta

    $pdf = new FPDF('P', 'mm', array(80, 200)); //nuevo pdf con medidas ancho y alto
    $pdf->AddPage();
    $pdf->SetMargins(5, 5, 5);
    $pdf->SetFont('Arial', 'B', 9);

    $pdf->Image('img/makcell-logo.jpg', 15, 5, 15); //ajusta las medidas de la imagen. las primeras 2 son coordenadas y la ultima la width
    $pdf->MultiCell(70, 5, 'MakCell', 0, 'C'); //multicell para que se acomode en varios renglones por si el titulo es largo, creo las primeras eran coordenadas

    $pdf->Ln(7); //hace un salto de la cantidad de lineas en ()

    $pdf->SetFont('Arial', 'B', 8); //b de bold y 8 de tamaño
    $pdf->Cell(17, 5, mb_convert_encoding('Núm ticket: ', 'ISO-8859-1', 'UTF-8'), 0, 0, 'L'); //cell pq solo es un renglón, si se pasa se va a salir de la hoja. mb convert permite acentos 

    $pdf->SetFont('Arial', '', 8); //si no hay b es letra normal
    $pdf->Cell(53, 5, $id, 0, 1, 'L'); //recuerdo que la L y C significaban algo pero no lo recuerdo
    

    $pdf->Cell(70, 2, '-------------------------------------------------------------------------', 0, 1, 'L'); //lit las líneas que dividen los títulos. me siento en devc++

    $pdf->Cell(10, 4, 'Cant.', 0, 0, 'L');
    $pdf->Cell(30, 4, mb_convert_encoding('Descripción', 'ISO-8859-1', 'UTF-8'), 0, 0, 'L');
    $pdf->Cell(15, 4, 'Precio', 0, 0, 'C');
    $pdf->Cell(15, 4, 'Importe', 0, 1, 'C'); // creo el 1 antes de C era encargado de salto de línea

    $pdf->Cell(70, 2, '-------------------------------------------------------------------------', 0, 1, 'L');

    $totalProductos = 0; //se define la variable del total de productos
    $pdf->SetFont('Arial', '', 7);

    while ($rowDetalles = $detalleVenta->fetch_assoc()) { //usamos la consulta que guardamos de detalleVenta pero ahora cada row se llama $rowDetalles y se repide el loop pòr cada detalle que haya
        $importe = number_format($rowDetalles['cantidad'] * $rowDetalles['precio'], 2, '.', ','); //se calcula importe multiplicando las cantidades
        $totalProductos += $rowDetalles['cantidad']; //el total de productos se le agrega la cantidad??? la vd eso solo lo copié del código del video
    
        $pdf->Cell(10, 4, $rowDetalles['cantidad'], 0, 0, 'L'); //como tiene cell ahora sí imprime lo que hay en cantidad
    
        $yInicio = $pdf->GetY();
        $pdf->MultiCell(30, 4, mb_convert_encoding($rowDetalles['producto_servicio'], 'ISO-8859-1', 'UTF-8'), 0, 'L');
        $yFin = $pdf->GetY();
    
        $pdf->SetXY(45, $yInicio); //honestamente tampoco sé qué es, no preste atención 
    
        $pdf->Cell(15, 4, '$ ' . ' ' . number_format($rowDetalles['precio'], 2, '.', ','), 0, 0, 'C');
    
        $pdf->SetXY(60, $yInicio);
        $pdf->Cell(15, 4, '$ ' . ' ' . $importe, 0, 1, 'R');
        $pdf->SetY($yFin);
    }

    $detalleVenta->close();


    $pdf->Ln();

    $pdf->Cell(70, 4, mb_convert_encoding('Número de articulos:  ' . $totalProductos, 'ISO-8859-1', 'UTF-8'), 0, 1, 'L'); //agarramos la variable definida arriba y el mb para usar acentos

    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(70, 5, sprintf('Total: %s  %s', '$ ', number_format($totalVenta, 2, '.', ',')), 0, 1, 'R'); //variable de primera consulta

    $pdf->Ln(2);
        
    $pdf->Cell(35, 5, 'Fecha: ' . $fecha, 0, 0, 'C'); //también variable de la primera consulta

    $pdf->Ln(12);

    $pdf->MultiCell(70, 5, mb_convert_encoding('Agradecemos su preferencia. ¡Vuelva pronto!', 'ISO-8859-1', 'UTF-8'), 0, 'C'); //mb para usar ¡ 

    $queryTotal->close();
    $queryVenta->close(); //cerrar todas las consultas pq sino no se puede tomar otro ticket y se tiene que hacer reload al site
    $pdf->Output(); //pdf para que salga y termina :)

?>  