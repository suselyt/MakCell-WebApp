<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>MakCell - Inicio</title>
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
                            <a href="index.php" class="nav-item nav-link active">Inicio</a>
                            <a href="about.php" class="nav-item nav-link">Nosotros</a>
                            <!--
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="blog.html" class="nav-item nav-link">Blog</a>
                            -->
                            <a href="contact.php" class="nav-item nav-link">Contacto</a>
                            <a href="servicios.php" class="nav-item nav-link">Servicios</a>
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

        <!-- Modal Search Start
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Modal Search End -->

        <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/index-makcell.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Bienvenido a MakCell</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Soporte técnico</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Ofrecemos soluciones rápidas y confiables para la reparación de todo tipo de aparatos electrónicos, garantizando calidad y un servicio profesional para que tus dispositivos funcionen como nuevos.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Sobre Nosotros</a>
                                <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contacto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carrusel-3.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">NUESTROS SERVICIOS</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Venta de accesorios</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Venta de audífonos, cargadores y fundas para celulares de distintas marcas.</p>
                                <p><a href="freepik.com" class="border-bottom text-white">Foto de Freepik</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carrusel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">NUESTROS SERVICIOS</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Mantenimiento</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Servicio de limpieza y mantenimiento básico para computadoras pórtatiles y de escritorio, así como consolas de videojuegos.</p>
                                <p><a href="freepik.com" class="border-bottom text-white">Foto de Freepik</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carrusel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">NUESTROS SERVICIOS</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Reparación</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Reemplazo para pantalla, cámara, carcasa y puerto de carga para dispositivos móviles.</p>
                                <p><a href="freepik.com" class="border-bottom text-white">Foto de Freepik</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->

        
        <!-- Feature Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nuestros Dispositivos</h4>
                    <h1 class="display-4 mb-4">Brindamos soluciones para múltiples equipos</h1>
                    <p class="mb-0">En MakCell, nos especializamos en la reparación y mantenimiento de diversos dispositivos tecnológicos. Estos son algunos de los equipos que atendemos:</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-laptop fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Laptops</h4>
                            <p class="mb-4">Asus, Lenovo, MacBook, HP, Dell.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-mobile-alt fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Celulares</h4>
                            <p class="mb-4">iPhone, Samsung, Xiaomi, Motorola</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-tablet-alt fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Tablets</h4>
                            <p class="mb-4">iPad, Galaxy tab, Lenovo Surface, MatePad</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="far fa-hdd fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Consolas</h4>
                            <p class="mb-4">Xbox, PlayStation, Nintendo, Switch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        
        <!-- FAQs Start -->
         
        <div class="container-fluid faq-section bg-light pb-5 pt-4" >
            <div class="container pb-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary">Información importante</h4>
                                <h1 class="display-4 mb-0">Preguntas frecuentes</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            ¿Cuánto cuesta cambiar la pantalla de un celular?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            Para poder cotizar cualquier cambio de pantalla es necesario saber el modelo del celular y ver que tipo de problema tiene en específico. Sin embargo, usualmente oscila entre los $1,000 mxn.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            ¿Cuánto tiempo tarda en promedio una reparación?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            El tiempo de reparación depende del tipo de dispositivo y la complejidad del problema. En promedio, las reparaciones se completan entre 24 y 48 horas.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            ¿Cuál es el costo de diagnóstico?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            El diagnóstico inicial es gratuito, y una vez identificado el problema, te proporcionamos un presupuesto sin compromiso antes de proceder con la reparación.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="img/carousel-1.png" class="img-fluid w-150" alt="">
                    </div>
                </div>
            </div>
        </div>
        
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
                        <!--
                        <div class="row text-center pt-5" style="border-top: 3px solid rgba(255, 255, 255, 0.38);">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Sucursal</h4>
                                                    <p class="mb-0"> Calle Inglaterra 808</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-envelope fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Contáctanos</h4>
                                                    <p class="mb-0">makcell.reparaciones@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fa fa-phone-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Llámanos</h4>
                                                    <p class="mb-0">(+52) 899 798 1519</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                    
                    
                </div>
            </div>
        
        <!-- Footer End -->
        
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="index.html" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>MakCell 2024</a>, todos los derechos reservados</span>
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