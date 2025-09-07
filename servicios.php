<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>MakCell - Servicios</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


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

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-3 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a class="text-muted small"><i class="fas fa-clock text-primary me-2"></i> Horario de 9:00 AM - 6:30 PM</a>
                            </div>
                            <div class="ps-3">
                                <a href="mailto:makcell.reparaciones@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>makcell.reparaciones@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="text-primary large me-3" href="https://www.facebook.com/profile.php?id=100093617434154"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                                <a class="text-muted large" href="InicioSesion.php"><i class="fas fa-user text-primary me-2"></i>
                                    Inicia sesión
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="index.php" class="navbar-brand p-0">
                        <span class="logo-half"><img src="icono/android-chrome-192x192.png" alt="Logo" class="me-2 mb-2">Mak</span>
                        <span class="logo-half2">Cell</span>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            <a href="index.php" class="nav-item nav-link">Inicio</a>
                            <a href="about.php" class="nav-item nav-link">Nosotros</a>
                            <!--
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="blog.html" class="nav-item nav-link">Blog</a>
                            -->
                            <a href="contact.php" class="nav-item nav-link">Contacto</a>
                            <a href="servicios.php" class="nav-item nav-link active">Servicios</a>
                            <div class="nav-btn px-3">
                                <!--
                                <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                -->
                                <a href="contact.php" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0">Cotizaciones</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="https://wa.me/528994669812" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                        <div class="d-flex flex-column ms-3 mb-0">
                            <span class="text-black-50 mb-0 mt-1">WhatsApp</span>
                            <a href="https://wa.me/528994669812"><span class="text-dark">(+52) 899 466 9812</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 py-5">
             <div class="container">
                <h1 class="display-3 text-white mb-3 animated slideInDown"> Servicios</h1>
            
             </div>
        </div>
    <!-- Page Header End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    
                    <h4 class="text-primary">Otros servicios</h4>
                    <h1 class="display-4 mb-4">Atención a la calidad</h1>
                    <p class="mb-0">Proveemos una variedad de servicios relacionado a la mejora y reparación de tus dispositivos, para computadoras, celulares, tabletas y consolas de videojuegos. Además de un cátalogo de ventas para accesorios como cargadores, audifonos y carcasas. Estos son otros de nuestros servicios:</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item-top bg-light rounded-bottom rounded-top">
                            <div class="service-img overflow-hidden">
                                <img src="img/Reemplazo de camara.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <h4 class="d-inline-block mb-4">Reemplazo de cámara</h4>
                                    <p class="mb-4">Para iPhone, Samsung, Motorola, entre otras.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item-top bg-light rounded-bottom rounded-top">
                            <div class="service-img overflow-hidden">
                                <img src="img/Liberacion.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <h4 class="d-inline-block mb-4">Liberación y formateo</h4>
                                    <p class="mb-4">Para cuenta de Google, Xiaomi, Payjoy, Bypass, y más...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item-top bg-light rounded-bottom rounded-top">
                            <div class="service-img overflow-hidden rounded-top">
                                <img src="img/Chipeo.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <h4 class="d-inline-block mb-4">Chipeo</h4>
                                    <p class="mb-4">Para consolas de videojuegos: PlayStation, Xbox, Nintendo Switch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 mb-3">
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                        <div class="mb-5">
                            <div class="row g-4">
                                <div class="col-md-8 col-lg-8 col-xl-7">
                                    <div class="footer-item">
                                        <a class="p-0">
                                            <h2 class="text-white mb-3"><i class="fas fa-toolbox me-3"></i> MakCell</h2>
                                            <!-- <img src="img/logo.png" alt="Logo"> -->
                                        </a>
                                        <p class="text-white mb-5">Lo mejor en servicio técnico. Somos una tienda de telefonía celular, ofrecemos servicio de reparación y formateo para computadoras, celulares, iPads y consolas de videojuegos. Además de eso se liberan celulares de cuenta de Google, y de cualquier otra compañía.</p>
                                        
                                        <div class="footer-btn d-flex">
                                            <a class="btn btn-lg-square rounded-circle me-4" href="https://maps.app.goo.gl/pLMSXCcBX8ufK1Fz9"><i class="fas fa-map-marker-alt fa-2x"></i></a>
                                            <a class="btn btn-lg-square rounded-circle me-4" href="mailto:makcell.reparaciones@gmail.com"><i class="fas fa-envelope fa-2x"></i></a>
                                            <a class="btn btn-lg-square rounded-circle me-4" href="tel:+528997981519"><i class="fa fa-phone-alt fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-1 col-lg-1 col-xl-1">
                                    
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="footer-item">
                                        <h4 class="mb-4 text-white">Ofertas</h4>
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/facebook-footer-1.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/facebook-footer-1.jpg" data-lightbox="footerInstagram-1" class="my-auto"><i class="fas fa-link text-white fa-2x"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/facebook-footer-2.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/facebook-footer-2.jpg" data-lightbox="footerInstagram-2" class="my-auto"><i class="fas fa-link text-white fa-2x"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/facebook-footer-3.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/facebook-footer-3.jpg" data-lightbox="footerInstagram-3" class="my-auto"><i class="fas fa-link text-white fa-2x"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/facebook-footer-4.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/facebook-footer-4.jpg" data-lightbox="footerInstagram-4" class="my-auto"><i class="fas fa-link text-white fa-2x"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/facebook-footer-5.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/facebook-footer-5.jpg" data-lightbox="footerInstagram-5" class="my-auto"><i class="fas fa-link text-white fa-2x"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/facebook-footer-6.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/facebook-footer-6.jpg" data-lightbox="footerInstagram-6" class="my-auto"><i class="fas fa-link text-white fa-2x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        
        <!-- Footer End -->
        
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="index.php" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>MakCell 2024</a>, todos los derechos reservados</span>
                    </div>
                    <div class="col-md-6 text-center text-md-start text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Diseñado por <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distribuido por <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>