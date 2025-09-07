<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MakCell - Ventas</title>
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

$consultaVentas = "SELECT * FROM salesummary";
$queryVentas = mysqli_query($conex, $consultaVentas);

$consultaDetalles = "SELECT * FROM details_ventas";
$queryDetalles = mysqli_query($conex, $consultaDetalles);

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
                    <a href="sales.php" class="nav-item nav-link active"><i class="fas fa-tags me-2"></i>Ventas</a>
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

            <!--Start Titulo de página-->
            <div class="container-fluid pt-4 px-2">
                <div class="text-start pt-4 px-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0 text-black-50">Ventas recientes</h2>
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
                            <!--boton agregar venta-->
                            <button type="button" class="btn btn-secondary m-2 text-dark" data-bs-toggle="modal" data-bs-target="#addSaleModal">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End barra busqueda-->


            <!--START agregar una venta----->
            <div class="modal fade" id="addSaleModal" tabindex="-1" aria-labelledby="addSaleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSaleModalLabel">Registrar venta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- inicio de form -->
                            <form method="POST" action="SaleAdd.php" id="saleForm">
                                <!-- Campos del formulario -->
                                <div class="mb-3">
                                    <label for="fecha" class="form-label">Fecha</label>
                                    <input type="Date" class="form-control" id="fecha" name="fecha" required>
                                </div>
                                <div class="mb-3">
                                    <label for="servicio" class="form-label">Cliente</label>
                                    <input type="text" class="form-control" id="cliente" name="cliente" required>
                                </div>
                                <!--Seccion para agregar productos-->
                                <div id="productosContainer">
                                    <div class="producto">
                                        <div class="mb-3">
                                            <label for="producto" class="form-label">Producto/servicio</label>
                                            <input type="text" class="form-control" name="producto[]" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cantidad" class="form-label">Cantidad</label>
                                            <input type="number" class="form-control" name="cantidad[]" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="precio" class="form-label">Precio</label>
                                            <input type="number" class="form-control" name="precio[]" required>
                                        </div>
                                    </div>
                                </div>
                                <!--BOTON nuevo producto-->
                                <button type="button" class="btn btn-secondary" onclick="agregarProducto()">Agregar otro producto</button>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="agregar" class="btn btn-primary" >Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN de modal-->


            <!--Start Tabla de ventas-->
            <div class="col-sm-12 col-xl-12 px-4 pt-4">
                <div class="bg-light rounded h-100 p-4">
                    <h5 class="mb-4">Registro de ventas</h5>
                    <div class="table-responsive">
                        <table class="table table-hover bg-light-table">
                            <thead>
                                <tr class="bg-light-table text-black-50">
                                    <th scope="col">ID</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col"># de productos</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($queryVentas)): ?>
                                <tr data-bs-toggle="collapse" data-bs-target="#detalle<?= $row['id_headersale'] ?>" aria-expanded="false" aria-controls="detalle1">
                                    <td><?= $row['id_headersale'] ?></td>
                                    <td><?= $row['sale_date'] ?></td>
                                    <td><?= $row['client_name'] ?></td>
                                    <td><?= $row['product_quantity'] ?></td>
                                    <td><?= "$", $row['total_sale'] ?></td>
                                    <!--JSON para boton editar-->
                                    <?php
                                        $dataProductos = [];
    
                                        // Asegúrate de ejecutar la consulta con la condición
                                        $queryJson = mysqli_query($conex, "SELECT * FROM details_ventas WHERE fk_headerventa = '{$row['id_headersale']}'");
                                        
                                        while ($detalle = mysqli_fetch_assoc($queryJson)) {
                                            $dataProductos[] = $detalle;
                                        }
                                
                                        // convertir a JSON
                                        $jsonProductos = json_encode($dataProductos);
                                    ?>
                                    <!-- BOTON de editar -->
                                    <input type="hidden" name="id_venta" value="<?= $row['id_headersale'] ?>">
                                    <td><button type="button" class="btn btn-secondary" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editSaleModal" 
                                                data-id="<?= $row['id_headersale'] ?>" 
                                                data-fecha="<?= $row['sale_date'] ?>"
                                                data-cliente="<?= $row['client_name'] ?>"
                                                data-productos='<?= htmlspecialchars($jsonProductos, ENT_QUOTES, 'UTF-8') ?>'>
                                                Editar
                                        </button>
                                    </td>
                                    <!--BOTON ticket-->
                                    <td><button type="button" class="btn btn-primary" onclick="window.open('ticket2.php?id_venta=<?= $row['id_headersale']; ?>', '_blank')">Print</button></td>
                                    <form method="POST" class="SaleHeaderDelete" action="SaleHeaderDelete.php">
                                        <input type="hidden" name = "id" value="<?= $row['id_headersale'] ?>" >
                                        <td><button type="submit" class="btn btn-primary">Eliminar</button></td>
                                    </form>
                                </tr>
                                <tr class="collapse" id="detalle<?= $row['id_headersale'] ?>">
                                    <td colspan="4">
                                        <div class="p-3 bg-light border rounded">

                                            <!-- Detalles de la venta -->
                                            <h6>Detalles de la venta</h6>
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Producto/Servicio</th>
                                                        <th>Cantidad</th>
                                                        <th>Precio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr> 
                                                    <?php 
                                                    mysqli_data_seek($queryDetalles, 0);
                                                    while($detalle = mysqli_fetch_array($queryDetalles)):
                                                    if ($detalle['fk_headerventa'] == $row['id_headersale']): 
                                                    ?>
                                                        <td><?= $detalle['producto_servicio'] ?></td>
                                                        <td><?= $detalle['cantidad'] ?></td>
                                                        <td><?= $detalle['precio'] ?></td>
                                                        <!--BOTON eliminar detalle-->
                                                        <form class= "SaleDetailDelete" method="POST"  action="SaleDetailDelete.php">
                                                            <input type="hidden" name = "id" value="<?= $detalle['id_detailventa'] ?>" >
                                                            <td><button type="submit" class="btn btn-primary">Eliminar</button></td>
                                                        </form>
                                                    </tr>
                                                    <?php endif;
                                                    endwhile; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--End Tabla de ventas-->

            <!--MODAL editar venta -->
            <div class="modal fade" id="editSaleModal" tabindex="-1" aria-labelledby="editSaleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSaleModalLabel">Editar Venta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- inicio de form -->
                        <form method="POST" action="SaleModify.php" id="editSaleForm">
                            <!-- Campos del formulario -->
                            <input type="hidden" name="id" id="SaleId">
                            <div class="mb-3">
                                <label for="editFecha" class="form-label">Fecha</label>
                                <input type="Date" class="form-control" id="editFecha" name="fecha" required>
                            </div>
                            <div class="mb-3">
                                <label for="editCliente" class="form-label">Cliente</label>
                                <input type="text" class="form-control" id="editCliente" name="cliente" required>
                            </div>
                            <!--productos-->
                            <div id="editProductosContainer">
                                <div class="producto">
                                    <input type="hidden" name="id_detailventa[]" value="<?= $producto['id_detailventa'] ?>">
                                    <div class="mb-3">
                                        <label for="editProducto" class="form-label">Producto/servicio</label>
                                        <input type="text" class="form-control" id="editProducto" name="editProducto[]" value="<?= $producto['producto_servicio'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editCantidad" class="form-label">Cantidad</label>
                                        <input type="number" class="form-control" id="editCantidad" name="editCantidad[]" value="<?= $producto['cantidad'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editPrecio" class="form-label">Precio</label>
                                        <input type="number" class="form-control" id="editPrecio" name="editPrecio[]" value="<?= $producto['precio'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <!--BOTON nuevo producto-->
                            <button type="button" class="btn btn-secondary" onclick="agregarProducto()">Agregar otro producto</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="editar" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>

            </div>
            </div>
            </div>
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

    <!--JS boton agregar producto-->
    <script>
    function agregarProducto() {
        // Contenedor donde se agregan los productos
        const productosContainer = document.getElementById('productosContainer');
        const editProductosContainer = document.getElementById('editProductosContainer');

        // Crear un nuevo div para el conjunto de campos de producto
        const nuevoProducto = document.createElement('div');
        nuevoProducto.classList.add('producto');
        nuevoProducto.innerHTML = `
            <div class="mb-3">
                <label for="producto" class="form-label">Producto/Servicio</label>
                <input type="text" class="form-control" name="producto[]" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad[]" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio[]" required>
            </div>
        `;

        const editNuevoProducto = nuevoProducto.cloneNode(true); //crea una copia del producto y cambia a edit
        productosContainer.appendChild(nuevoProducto);
        editProductosContainer.appendChild(editNuevoProducto)
    }
</script>

   <!-- Javascrip para dar la info al modal de editar-->  
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        var editSaleModal = document.getElementById('editSaleModal');

        editSaleModal.addEventListener('show.bs.modal', function(event) {
            // Obtén el botón que abrió el modal
            var button = event.relatedTarget;

            // Extrae la información de los atributos de datos del botón
            var idVenta = button.getAttribute('data-id');
            var fecha = button.getAttribute('data-fecha');
            var cliente = button.getAttribute('data-cliente');
            var productos = JSON.parse(button.getAttribute('data-productos'));

            // Asigna los datos a los campos del modal
            document.getElementById('SaleId').value = idVenta;
            document.getElementById('editFecha').value = fecha;
            document.getElementById('editCliente').value = cliente;

            // Limpiar contenedor de productos y cargar los datos
            var editProductosContainer = document.getElementById('editProductosContainer');
            editProductosContainer.innerHTML = ''; // Limpia el contenedor al abrir el modal

            productos.forEach((producto, index) => {
                var productoHtml = `
                    <div class="producto">
                        <input type="hidden" name="id_detailventa[]" value="${producto.id_detailventa}">
                        <div class="mb-3">
                            <label for="editProducto${index}" class="form-label">Producto/Servicio</label>
                            <input type="text" class="form-control" name="editProducto[]" id="editProducto${index}" value="${producto.producto_servicio}" required>
                        </div>
                        <div class="mb-3">
                            <label for="editCantidad${index}" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" name="editCantidad[]" id="editCantidad${index}" value="${producto.cantidad}" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPrecio${index}" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="editPrecio[]" id="editPrecio${index}" value="${producto.precio}" required>
                        </div>
                    </div>
                `;
                editProductosContainer.insertAdjacentHTML('beforeend', productoHtml);
            });
        });
    });
    </script>

    <!--Confirmacion para eliminar ventas-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var forms = document.querySelectorAll('.SaleHeaderDelete, .SaleDetailDelete');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    console.log("Formulario de eliminación enviado");
                    var confirmation = confirm('¿Estás seguro de que deseas eliminar esta venta?');
                    if (!confirmation) {
                        console.log("Eliminación cancelada");
                        event.preventDefault();
                    }
                });
            });
        });
    </script>

     <!--Confirmacion para eliminar detail de venta
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            var forms = document.querySelectorAll('.SaleDetailDelete');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    console.log("Formulario de eliminación enviado");
                    var confirmation = confirm('¿Estás seguro de que deseas eliminar esta venta?');
                    if (!confirmation) {
                        console.log("Eliminación cancelada");
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
-->

</body>

</html>