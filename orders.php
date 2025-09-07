<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="utf-8">
    <title>MakCell - Ordenes</title>
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

<?php

include('conexion.php');

$consultaOrden = "SELECT * FROM resumenordenes ORDER BY fecha_entrada ASC";
$queryOrden = mysqli_query($conex, $consultaOrden);

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
                    <a href="dash-index.php" class="nav-item nav-link"><i class="fas fa-home me-2"></i>Inicio</a>
                    <a href="sales.php" class="nav-item nav-link"><i class="fas fa-tags me-2"></i>Ventas</a>
                    <a href="orders.php" class="nav-item nav-link active"><i class="fas fa-paperclip me-2"></i>Ordenes</a>
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

            <!--Start Titulo de página-->
            <div class="container-fluid pt-4 px-2">
                <div class="text-start pt-4 px-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0 text-black-50">Ordenes de servicio</h2>
                    </div>
                </div>
            </div>
            <!--End Titulo de página-->

            <!--STart barra busqueda-->
            <div class="container-fluid px-4">
                <div class="bg-light-graphics text-center rounded ">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <form class="d-none d-md-flex ms-3">
                            <input class="form-control border-0" type="search" placeholder="Buscar">
                        </form>
                        <div>
                        <!--BOTON agregar-->
                            <button type="button" class="btn btn-secondary m-2 text-dark" data-bs-toggle="modal" data-bs-target="#addOrderModal">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End barra busqueda-->


            <!--START agregar una orden----->
            <div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addOrderModalLabel">Agregar Orden</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- inicio de form -->
                    <form method="POST" action="OrderAdd.php" id="orderForm">
                    <!-- Campos del formulario -->
                    <div class="mb-3">
                        <label for="Registro" class="form-label">Fecha</label>
                        <input type="Date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="servicio" class="form-label">Servicio</label>
                        <select class="form-control" id="servicio" name="servicio" required>
                            <?php 
                            $queryServicios = "SELECT id_servicio, nombre FROM servicios";
                            $servicios = mysqli_query($conex, $queryServicios);
                            while($servicio = mysqli_fetch_assoc($servicios)){
                                echo "<option value='" . $servicio['id_servicio'] . "'>" . $servicio['nombre'] . "</option>";    
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dispositivo" class="form-label">Dispositivo</label>
                        <input type="text" class="form-control" id="dispositivo" name="dispositivo" required>
                    </div>
                    <div class="mb-3">
                        <label for="cliente" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" pattern="\d{10}" maxlength="10" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <?php
                            $queryStatus = "SELECT id_estatus, estatus FROM estatus";
                            $status = mysqli_query($conex, $queryStatus);
                            while($stat = mysqli_fetch_assoc($status)){
                                echo "<option value='" . $stat['id_estatus'] . "'>" . $stat["estatus"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="agregar" class="btn btn-primary" >Agregar</button>
                </div>
                </div>
                    </form>
                <!-- Fin de form -->
            </div>
            </div>
            <!--FIN de modal-->

            <!--Start Tabla de ordenes-->
            <div class="col-sm-12 col-xl-12 px-4 pt-4">
                <div class="bg-light rounded h-100 p-4">
                    <h5 class="mb-4">Registro de ordenes</h5>
                    <div class="table-responsive">
                    <table id="tablaVentas" class="table table-hover bg-light-table">
                        <thead>
                            <tr class="bg-light-table text-black-50">
                                <th scope="col">ID</th>
                                <th scope="col">Registro</th>
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
                                <td> <?= $row['id_orden']  ?> </td>
                                <td> <?= $row['fecha_entrada']  ?> </td>
                                <td> <?= $row['servicio']  ?> </td>
                                <td> <?= $row['dispositivo']  ?> </td>
                                <td> <?= $row['cliente']  ?> </td>
                                <td> <?= $row['numero_telefono']  ?> </td>
                                <td> <?= $row['estatus']  ?> </td>

                                    <!--boton editar abrir modal-->
                                    <input type="hidden" name="accion" value="editar">
                                    <input type="hidden" name="id_registro" value="<?= $row['id_orden'] ?>">
                                    <td><button type="button" class="btn btn-secondary" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editOrderModal" 
                                                data-id="<?= $row['id_orden'] ?>" 
                                                data-fecha="<?= $row['fecha_entrada'] ?>"
                                                data-id-servicio="<?= $row['id_servicio'] ?>"
                                                data-dispositivo="<?= $row['dispositivo'] ?>"
                                                data-cliente="<?= $row['cliente'] ?>"
                                                data-telefono="<?= $row['numero_telefono'] ?>"
                                                data-id-status="<?= $row['id_estatus'] ?>">
                                                Editar
                                        </button>
                                    </td>
                                <!--boton eliminar con form-->
                                <form class="eliminarForm" action="OrderDelete.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="id_registro" value="<?= $row['id_orden'] ?>">
                                    <td><button type="submit" class="btn btn-black">Eliminar</button></td>
                                </form>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!--End Tabla de ordenes-->
            
            <!--MODAL editar orden -->
            <div class="modal fade" id="editOrderModal" tabindex="-1" aria-labelledby="editOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addOrderModalLabel">Editar Orden</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <!-- inicio de form -->
                        <form method="POST" action="OrderModify.php" id="editOrderForm">
                        <input type="hidden" name="id" id="orderId">
                        <div class="mb-3">
                            <label for="editFecha" class="form-label">Fecha</label>
                            <input type="Date" class="form-control" id="editFecha" name="fecha" required>
                        </div>
                        <div class="mb-3">
                            <label for="editServicio" class="form-label">Servicio</label>
                            <select class="form-control" id="editServicio" name="servicio" required>
                                <?php 
                                $queryServicios = "SELECT id_servicio, nombre FROM servicios";
                                $servicios = mysqli_query($conex, $queryServicios);
                                while($servicio = mysqli_fetch_assoc($servicios)){
                                    echo "<option value='" . $servicio['id_servicio'] . "'>" . $servicio['nombre'] . "</option>";    
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editDispositivo" class="form-label">Dispositivo</label>
                            <input type="text" class="form-control" id="editDispositivo" name="dispositivo" required>
                        </div>
                        <div class="mb-3">
                            <label for="editCliente" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="editCliente" name="cliente" required>
                        </div>
                        <div class="mb-3">
                            <label for="editTelefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="editTelefono" name="telefono" pattern="\d{10}" maxlength="10">
                        </div>
                        <div class="mb-3">
                            <label for="editStatus" class="form-label">Status</label>
                            <select class="form-control" id="editStatus" name="status" required>
                                <?php
                                $queryStatus = "SELECT id_estatus, estatus FROM estatus";
                                $status = mysqli_query($conex, $queryStatus);
                                while($stat = mysqli_fetch_assoc($status)){
                                    echo "<option value='" . $stat['id_estatus'] . "'>" . $stat["estatus"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="editar" class="btn btn-primary" >Guardar</button>
                    </div>
                </div>
                        </form>   
            </div>
            </div>
            <!-- Fin de modal editar --> 

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

     <!--Confirmacion para eliminar orden-->
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            var forms = document.querySelectorAll('.eliminarForm');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    console.log("Formulario de eliminación enviado");
                    var confirmation = confirm('¿Estás seguro de que deseas eliminar esta orden?');
                    if (!confirmation) {
                        console.log("Eliminación cancelada");
                        event.preventDefault();
                    }
                });
            });
        });
    </script>

    <!-- Javascrip para dar la info al modal de editar-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var editOrderModal = document.getElementById('editOrderModal');
            editOrderModal.addEventListener('show.bs.modal', function (event) {
                console.log("Modal abierto");
                // Botón que abre el modal
                var button = event.relatedTarget;

                // Extraer información de los atributos data-*
                var id = button.getAttribute('data-id');
                var fecha = button.getAttribute('data-fecha');
                var id_servicio = button.getAttribute('data-id-servicio');
                var dispositivo = button.getAttribute('data-dispositivo');
                var cliente = button.getAttribute('data-cliente');
                var telefono = button.getAttribute('data-telefono');
                var id_status = button.getAttribute('data-id-status');

                // Rellenar los campos del modal
                document.getElementById('orderId').value = id;
                document.getElementById('editFecha').value = fecha;
                document.getElementById('editServicio').value = id_servicio;
                document.getElementById('editDispositivo').value = dispositivo;
                document.getElementById('editCliente').value = cliente;
                document.getElementById('editTelefono').value = telefono;
                document.getElementById('editStatus').value = id_status;
            });
        });
    </script>


</body>

</html>