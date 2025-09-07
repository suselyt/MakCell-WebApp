
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MakCell - Mensajes</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
  
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="dash-css/dashboardstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!-- Icon references -->
    <link rel="apple-touch-icon" sizes="180x180" href="icono/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icono/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icono/favicon-16x16.png">
    <link rel="manifest" href="icono/site.webmanifest">

</head>

<!-- Incluir el archivo php de conexion a la base de datos -->
<?php include 'conexion.php'; 

#consulta para seleccionar todos los datos de la tabla
$consultaMensajes = "SELECT * FROM contacto";
$queryMensajes = mysqli_query($conex, $consultaMensajes);
?>
<!--Contenido de la página-->
<body>
    <!--barra superior / navbar-->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light2 navbar-light sticky-top px-4 py-0">
                <a class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fas fa-toolbox mx-3"></i></h2>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/makcell-logo.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <!--Cerrar sesión-->
                            <a href="InicioSesion.php" class="dropdown-item">Salir</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!--Content Start-->
        <!--Start Titulo de página-->
        <div class="container-fluid pt-4 px-2">
            <div class="text-start pt-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0 text-black-50">Contacto</h2>
                </div>
            </div>
        </div>
        <!--End Titulo de página-->

    </div>

        <!--Start Tabla de mensajes-->
        
    <!-- Tabla HTML para mostrar los datos de la tabla ordenes -->
    <div class="col-sm-12 col-xl-12 px-4 pt-4 align-items-center">
        <div class="bg-light rounded h-100 p-4 table-responsive">
        <h5 class="mb-4">Mensajes de contacto</h5>
        
        <table class="table table-hover bg-light-table"
            id="table_messages">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <!--cargar la consulta para fetch array php while-->
                <?php while($row = mysqli_fetch_array($queryMensajes)):?>
                <tr>
                    <!--cambia el nombre de la columna de id-->
                   <td><?php echo $row['id'];?></td>
                   <td><?php echo $row['nombre'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['telefono'];?></td>
                   <td><?php echo $row['asunto'];?></td>
                   <td><?php echo $row['mensaje'];?></td>
                   <td> <?php echo date("d/m/Y", strtotime($row['date'])); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
            </div>
        </div>
   
    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-dark rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">MakCell 2024</a>, Todos los derechos reservados. 
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

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/dash.js"></script>
    <!--Librería  datatable para la tabla-->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-ES.json"></script>

        <script>
        $(document).ready(function () {
            $('#table_messages').DataTable({
                language: {
                url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
                }
            });
            
        });
        </script>
    
</body>
</html>