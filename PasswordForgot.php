<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>MakCell - Restablecer contraseña</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- Icon references -->
        <link rel="apple-touch-icon" sizes="180x180" href="icono/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icono/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icono/favicon-16x16.png">
        <link rel="manifest" href="icono/site.webmanifest">

    </head>

    <body>
        <div class="container-xxl position-relative bg-pattern d-flex p-0">
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">   
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">    
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">  
                            <div class="d-flex align-items-center justify-content-center mb-3"> 
                                <a href="InicioSesion.php">
                                    <span class="logo-half">MAK</span><span class="logo-half2">CELL</span>
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <h4 class="text-black-50">¿Olvidaste tu contraseña?</h4>
                            </div>

                            <!-- FORMULARIO   -->  
                            <form action="PasswordProcess.php" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Correo" required>
                                    <label for="email">Correo Electrónico</label>
                                </div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Enviar</button>
                            </form>  
                            
                        </div>
                    </div>
                </div>
            </div>    
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
        <script src="js/main.js"></script>

    </body>


                    

</html>