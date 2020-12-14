<!doctype html>
<html lang="en">

<head>
    <title>Home - El rincón de la mascota</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="<?php echo base_url();?>assets/img/iconos/icons8-mascotas-16.png" sizes="32x32"
        type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/js/jquery/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/misestilos.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assetshome/css/style.css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <div class="mb-0 site-logo logo">
                            <a href="index.html">
                                <img src="<?php echo base_url();?>assets/assetshome/images/logo.png" alt="">
                            </a>
                        </div>
                    </div>




                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#about-section" class="nav-link">Sobre nosotros</a></li>
                                <li><a href="#productos" class="nav-link">Productos</a></li>
                                <li><a href="#servicios" class="nav-link">Servicios</a></li>
                                <li><a href="#contacto" class="nav-link">Contáctenos</a></li>


                                <a href="login" class="btn btn-success">Iniciar sesión</a>

                            </ul>
                        </nav>



                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                                class="icon-menu h3"></span></a></div>


                </div>

            </div>
        </header>


    </div>

   

    <!--Inicio Espacio para carrusel-->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carrusel active">
                <img style="height: 700px !important;" class="d-block w-100" src="<?php echo base_url();?>assets/assetshome/images/carrusel1.jpeg"
                    alt="First slide">
         </div>
            <div class="carousel-item">
                <img style="height: 700px !important;" class="d-block w-100" src="<?php echo base_url();?>assets/assetshome/images/carrusel12.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img style="height: 700px !important;" class="d-block w-100" src="<?php echo base_url();?>assets/assetshome/images/carrusel9.jpg"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>


    <!--Fin Espacio para carrusel-->
    <section class="site-section" id="about-section">
        <div class="container">
            <div class="row hover-1-wrap mb-5 mb-lg-0">
                <div class="col-12">
                    <div class="row">
                        <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2" data-aos="fade-left">
                            <a href="#" class="rotate10">
                                <img src="<?php echo base_url();?>assets/assetshome/images/dog_3.jpg" alt="Image"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1" data-aos="fade-right">
                            <h2 class="text-black">Quiénes somos</h2>
                            <p class="mb-4">Somos una tienda de mascotas colombiana con más de 7 años en el mercado,
                                contamos con cientos de productos atractivos y de alta calidad para tus mascotas.
                                Dentro de nuestro inventario tenemos: concentrados, accesorios, juguetes y productos
                                de aseo e higiene. También ofrecemos servicios de vacunación, desparasitación y peluquería,
                                completando de esta forma, un servicio integral para tu mascota.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row hover-1-wrap mb-5 mb-lg-0">
                <div class="col-12">
                    <div class="row">
                        <div class="mb-4 mb-lg-0 col-lg-6" data-aos="fade-right">
                            <a href="#" class="rotate-reverse10">
                                <img src="<?php echo base_url();?>assets/assetshome/images/mision.jpg" alt="Image"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-5 ml-auto align-self-center" data-aos="fade-left">
                            <h2 class="text-black">Misión</h2>
                            <p class="mb-4">Ser una tienda de mascotas reconocida brindando una experiencia
                                integral a nuestros clientes contando siempre con productos y un servicio de alta calidad;
                                y el mejor talento humano en cada una de las áreas. Dando una solución
                                integral sobre la atención de la mascota, a partir de una inmejorable oferta de
                                productos,
                            precios y servicios.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row hover-1-wrap mb-5 mb-lg-0">
                <div class="col-12">
                    <div class="row">
                        <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2" data-aos="fade-left">
                            <a href="#" class="rotate10">
                                <img src="<?php echo base_url();?>assets/assetshome/images/vision.jpg " alt="Image"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1" data-aos="fade-right">
                            <h2 class="text-black">Visión</h2>
                            <p class="mb-4">Ser líderes en la distribución de productos y accesorios de alta calidad
                                para mascotas,
                                logrando llegar a los corazones de nuestros clientes, superando sus expectativas y
                                estableciendo
                                un fuerte vínculo que relaciones de largo plazo con clientes y proveedores.</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>



    </section>





    <section class="site-section bg-light trainers" id="trainers-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6" data-aos="fade-right">
                    <img class="img-fluid border10 rotate-reverse10"
                        src="<?php echo base_url();?>assets/assetshome/images/acercademi.jpeg" alt="Image">
                </div>
                <div class="col-md-5 ml-auto align-self-center" data-aos="fade-left">
                    <h2 class="mb-2 heading mb-4">Acerca de <strong>mi</strong> </h2>
                    <p>Mi nombre es Caterine Restrepo Osorio soy auxiliar veterinaria y me encantan los animales.</p>
                    <p>Estoy aqui para ofrecerte a ti y a tu mascota la mejor atención profesional y llena de amor, que tal vez no encontrarás en ningún otro lugar.</p>

                </div>
            </div>
        </div>
    </section>




    <section class="site-section bg-light trainers" id="productos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center heading-section mb-5 " data-aos="fade-left">
                    <h2 class="mb-2 heading mb-4"> <strong>Los mejores productos</strong></h2>
                    <p>Contamos con una gran variedad de productos de alta calidad para tu mascota.</p>
                </div>
                <img class="img-fluid border10 rotate-reverse10" data-aos="fade-left"
                    src="<?php echo base_url();?>assets/assetshome/images/productos.png" alt="Image">
            </div>

        </div>

    </section>



    <section class="site-section " id="servicios">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-6 text-center heading-section mb-5">

                    <h2 class="text-black mb-2">Brindamos el mejor servicio</h2>
                    <p>Nuestro mejor talento, para el servicio de tus seres más especiales.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">

                    <div class="block_service">
                        <span class="icon-paw d-block display-3 text-primary mb-3"></span>
                        <h3>Peluquería</h3>
                        
                    </div>

                </div>
                <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="block_service">
                        <span class="icon-paw d-block display-3 text-primary mb-3"></span>
                        <h3>Vacunación</h3>
                       
                    </div>
                </div>
                <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="block_service">
                        <span class="icon-paw d-block display-3 text-primary mb-3"></span>
                        <h3>Desparasitación</h3>
                      
                    </div>
                </div>


                <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">

                    <div class="block_service">
                        <span class="icon-paw d-block display-3 text-primary mb-3"></span>
                        <h3>Corte de uñas</h3>
                     
                    </div>

                </div>


                <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">

                    <div class="block_service">
                        <span class="icon-paw d-block display-3 text-primary mb-3"></span>
                        <h3>Y mucho más</h3>
                     
                    </div>

                </div>


            </div>
        </div>
    </section>



    <section class="bg-light" id="contacto">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <form action="#" class="p-5 contact-form">

                        <h2 class="h4 mb-5 heading">Contáctanos</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="fname">Nombre:</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Apellido:</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label for="email">Correo:</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label for="subject">Asunto:</label>
                                <input type="subject" id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="message">Mensaje:</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                    placeholder="Escribe aquí tu mensaje..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Enviar" class="btn btn-dark btn-md text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6 text-center heading-section mb-5 align-self-center">

                            <h2 class=" mb-5 text-black">Contáctanos</h2>
                            <ul class="list-unstyled text-left address">
                                <li>
                                    <span class="d-block">Dirección:</span>
                                    <p>Carrera 79 #2 B-43, Medellín, Antioquia</p>
                                    <p>Barrio Belén Rincón</p>
                                </li>
                                <li>
                                    <span class="d-block">Teléfono:</span>
                                    <p>4988723</p>
                                </li>
                                <li>
                                    <span class="d-block">Correo:</span>
                                    <p>katy1324-1@hotmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="footer-heading mb-4">Sobre nosotros</h2>
                            <p>Tienda de mascotas colombiana.</p>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <h2 class="footer-heading mb-4">Enlances</h2>
                            <ul class="list-unstyled">
                                <li><a href="#about-section" class="smoothscroll">Sobre nosotros</a></li>
                                <li><a href="#trainers-section" class="smoothscroll">Acerca de mi</a></li>
                                <li><a href="#servicios" class="smoothscroll">Servicios</a></li>
                                <li><a href="#contacto" class="smoothscroll">Contáctanos</a></li>

                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h2 class="footer-heading mb-4">Siguenos</h2>
                            <a href="#" class="pl-0 pr-3 social-link"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3 social-link"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3 social-link"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3 social-link"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                            document.write(new Date().getFullYear());
                            </script> Todos los derechos reservados <br> Hecho con
                            <i class="icon-heart" aria-hidden="true"></i> y mucho <i class="icon-coffee" aria-hidden="true"></i> por estudiantes SENA.</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </footer>

    </div> <!-- .site-wrap -->

    <script src="<?php echo base_url();?>assets/assetshome/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/aos.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url();?>assets/assetshome/js/isotope.pkgd.min.js"></script>


    <script src="<?php echo base_url();?>assets/assetshome/js/main.js"></script>





</body>

</html>