<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MakCell - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="dash-css/dashboardstyle.css" rel="stylesheet">
    
    <!-- Icon references -->
    <link rel="apple-touch-icon" sizes="180x180" href="icono/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icono/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icono/favicon-16x16.png">
    <link rel="manifest" href="icono/site.webmanifest">

</head>

<!-- badat connect-->
 <?php

    include('conexion.php');
    $consultaOrden = "SELECT * FROM resumenordenes WHERE estatus = 'Listo' or estatus = 'Pendiente' ORDER BY fecha_entrada ASC LIMIT 5";
    $queryOrden = mysqli_query($conex, $consultaOrden);

    $consultaVenta = "SELECT * FROM salesummary ORDER BY sale_date DESC LIMIT 5"; //texto de query
    $queryVenta = mysqli_query($conex, $consultaVenta); //conexion con badat y variable de texto de query *abajo se libera en array linea 194 aprox

    $consultaNumVentas = "SELECT COUNT(details_ventas.fk_headerventa) AS NumVentas FROM sales_header 
                          INNER JOIN details_ventas ON details_ventas.fk_headerventa = sales_header.id_headersale
                          WHERE sales_header.sale_date BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-01') AND CURDATE();";
    $queryNumVentas = mysqli_query($conex, $consultaNumVentas);
    $NumVentasMensuales = mysqli_fetch_assoc($queryNumVentas);

    $consultaSemanal = "CALL CalcularIngresoPorPeriodo(DATE_SUB(CURDATE(), INTERVAL 7 DAY), CURDATE())"; //texto de la query
    $queryIngresoSemanal = mysqli_query($conex, $consultaSemanal); 
    $IngresoSemanal = mysqli_fetch_assoc($queryIngresoSemanal); //fetch el resultado y lo aloja en $IngresoSemanal
    mysqli_free_result($queryIngresoSemanal); //libera el resultado 

    while (mysqli_more_results($conex) && mysqli_next_result($conex)) {;} //se usa para liberar mysql? y poder usar otro procedimiento almacenado

    $consultaMensual = "CALL CalcularIngresoPorPeriodo(DATE_FORMAT(CURDATE() ,'%Y-%m-01'), CURDATE())";
    $queryIngresosMensual = mysqli_query($conex, $consultaMensual);
    $IngresoMensual = mysqli_fetch_assoc($queryIngresosMensual);
    mysqli_free_result($queryIngresosMensual);
 ?>


<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dash-index.php" class="navbar-brand mx-3 mb-3 mt-3">
                    <h3 class="text-primary"><i class="fas fa-toolbox mx-3"></i>MAKCELL</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/makcell-logo.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Héctor Solis</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dash-index.php" class="nav-item nav-link active"><i class="fas fa-home me-2"></i>Inicio</a>
                    <a href="sales.php" class="nav-item nav-link"><i class="fas fa-tags me-2"></i>Ventas</a>
                    <a href="orders.php" class="nav-item nav-link"><i class="fas fa-paperclip me-2"></i>Ordenes</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light2 navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!--
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>-->
                <div class="navbar-nav align-items-center ms-auto">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/makcell-logo.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Héctor Solis</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light-graphics rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            
                            <div class="ms-3">

                                

                                <p class="mb-2">Ingresos últimos 7 días</p>
                                <h6 class="mb-0"><?php echo "$", $IngresoSemanal['ingreso_total']; ?></h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light-graphics rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Ventas en el mes</p>
                                <h6 class="mb-0"><?php echo $NumVentasMensuales['NumVentas']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light-graphics rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Ingresos este mes</p>
                                <h6 class="mb-0"><?php echo "$", $IngresoMensual['ingreso_total']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Inicio ventas recientes -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light-graphics text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h3 class="mb-0">Ventas recientes</h3>
                        <a href="sales.php">Ver todas</a>
                    </div>
                    <div class="table-responsive">
                        <table class="bg-light-table table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white bg-primary">
                                    <th scope="col"># Venta</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"># de productos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($row = mysqli_fetch_array($queryVenta)): ?>
                                <tr>
                                    <!--<td><input class="form-check-input" type="checkbox"></td>-->
                                    <td> <?= $row['id_headersale']  ?> </td>
                                    <td> <?= $row['sale_date']  ?> </td>
                                    <td> <?= $row['client_name']  ?> </td>
                                    <td> <?= "$", $row['total_sale']  ?> </td>
                                    <td> <?= $row['product_quantity']  ?> </td>
                                </tr>
                            <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
             <!-- Inicio ventas recientes -->

             <!-- Inicio peticiones ordenes recientes -->
            <div class="container-fluid pt-4 px-4" >
                <div class="bg-light-graphics text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h3 class="mb-0">Órdenes pendientes</h3>
                        <a href="orders.php">Ver todas</a>
                    </div>
                    <div class="table-responsive">
                        <table class="bg-light-table table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white bg-primary">
                                    <th scope="col"># Orden</th>
                                    <th scope="col">Entrada</th>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Dispositivo</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php while($row = mysqli_fetch_array($queryOrden)): ?>
                                <tr>
                                    <!--
                                    <td><input class="form-check-input" type="checkbox"></td>-->
                                    <td> <?= $row['id_orden']  ?> </td>
                                    <td> <?= $row['fecha_entrada']  ?> </td>
                                    <td> <?= $row['servicio']  ?> </td>
                                    <td> <?= $row['dispositivo']  ?> </td>
                                    <td> <?= $row['cliente']  ?> </td>
                                    <td> <?= $row['numero_telefono']  ?> </td>
                                    <td> <?= $row['estatus']  ?> </td>
                                </tr>
                                <?php endwhile; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
             <!-- Final peticiones ordenes recientes -->

<!-- Chart Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light-graphics rounded h-100 p-4">
                <h6 class="mb-4">Single Line Chart</h6>
                <canvas id="line-chart"></canvas>
            </div>
        </div>

    </div>
</div>
<!-- Chart End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-dark rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="index.php">MakCell 2024</a>, Todos los derechos reservados. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Diseñado por <a href="https://htmlcodex.com">HTML Codex</a>
                        
                        Distribuido por <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>

    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/dash.js"></script>
</body>

</html>