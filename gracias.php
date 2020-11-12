<?php

//Type the receiever's e-mail address

$emailAddress = "jriverabarzola@gmail.com";

//Type your Site Name

$siteName = "Consulta Enviado";



$contact_name = $_POST['name'];

$contact_phone = $_POST['phone'];

$contact_email = $_POST['email'];

$contact_mensage = $_POST['mensage'];



if( $contact_name == true ) {

$sender = $contact_email;

$receiver = $emailAddress;

$client_ip = $_SERVER['REMOTE_ADDR'];



$email_body = "Nombre del Contacto: $contact_name \n\nCelular: $contact_phone \n\nEmail: $contact_email \n\nMensaje: $contact_mensage \n\nIP ADDRESS: $client_ip \n\n$siteName";




$emailAutoReply = "Hola $contact_name, \n\nAcabamos de recibir su E-Mail. Nos pondremos en contacto con Ud. en unos instantes.

!Gracias! \n\n$siteName ";



$extra = "From: $contact_email\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

$autoReply = "From: $receiver\r\n" . "Reply-To: $receiver \r\n" . "X-Mailer: PHP/" . phpversion();



mail( $contact_email, "Hemos recibido tu correo: $contact_name", $emailAutoReply, $autoReply );



if( mail( $receiver, "Policlinico Santoyo - $contact_name", $email_body, $extra ) ) {

echo "success=yes";

} else {

echo "success=no";

}

}

?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Policlínico Santoyo</title>
    <!-- Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/apple-touch-icon-32x32.png">
    <link rel="shortcut icon" type="image/x-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">

    <!-- web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:400,500" rel="stylesheet">

    <!-- plugins css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <!-- Start Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="loader-content">
                <span class="icon-section-wave d-inline-block text-active  mt-3 "></span>
            </div>
        </div>
    </div>

    <!-- Start Header -->
    <header>
        <!-- Start Toolbar Section -->
        <div class="toolbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 d-none d-md-block">
                        <div class="toolbar-right text-right">
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                    <i class="icofont-home"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default">Jr.Chiquian 2278 Urb. Santoyo - El Agustino </a>
                                </div>
                            </div>
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                   <i class="icofont-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default">policlinicosantoyo@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Toolbar Section -->
        <!-- Start Navigation Section -->
        <nav class="navbar grad-bg--2 s-dp-1-3 navbar-sticky navbar-expand-lg m-navbar bcbd_navbar">
            <div class="container position-relative">
                <a href="index.html" class="menu-logo" >
                    <img src="assets/images/logo.png" alt="">
                </a>

                <div class="burger_menu">
                    <span class="navbar-toggler-icon"></span>
                </div><!-- burger menu -->

                <div class="collapse navbar-collapse bcbd_collpase_nav" id="navbarSupportedContent">

                    <div class="nav_outer  mr-auto">
                        <ul class="navbar-nav bcbd_nav mr-auto">
                            <li class="nav-item active ">
                                <a class="nav-link" href="index.html">Inicio
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="conocenos.html"> Conócenos </a>

                            </li>
                            <li class="nav-item hs_dropdown">
                                <a class="nav-link" href="#"> Servicios  </a>
                                <ul class="bcbd_dropdown">
                                  <li>
                                      <a href="servicio-1.html">
                                          Brevete por primera vez
                                      </a>
                                  </li>

                                    <li >
                                        <a href="service-1.html">
                                            Revalidación de licencia categoría A1
                                        </a>
                                    </li>
                                    <li >
                                        <a href="service-2.html">
                                            Revalidación de categoría de A-AII al A-IIIC
                                        </a>
                                    </li>
                                     <li>
                                        <a href="service-single.html">
                                            Recategorización de categoría AIIA – AIIB – AIIIA - AIIIB
                                        </a>
                                    </li>
                                    <li>
                                       <a href="service-single.html">
                                           Recategorización de categoría AIIB a A-IIIC
                                       </a>
                                   </li>
                                   <li>
                                      <a href="service-single.html">
                                          Licencia A-IV
                                      </a>
                                  </li>
                                  <li>
                                     <a href="service-single.html">
                                       Curso cambiemos de actitud

                                     </a>
                                 </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contacto.html">
                                    Contacto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.html">
                                    Preguntas
                                </a>
                            </li>
                        </ul> <!-- navbar nav -->
                        <div class="navigation_right_area position-relative navbar-search my-lg-0">
                            <form class="form-inline my-2 my-lg-0 d-block d-lg-none">
                                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                                <button class="btn bg-transparent position-absolute my-sm-0" type="submit">
                                    <i class="icofont-search-2"></i>
                                </button>
                            </form>
                        </div> <!-- navbar search -->
                        <div class="toolbar-right mobile-view text-left d-block d-md-none">
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                    <i class="icofont-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default">policlinicosantoyo@gmail.com</a>
                                </div>
                            </div>
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                   <i class="icofont-ui-call"></i>
                                </div>
                                 <div class="media-body">
                                    <a href="#" class="text-default">01 715-0951</a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- navbar outer -->
                   <div class="navigation_right_area position-relative d-none d-lg-block  navbar-search  my-lg-0">
                        <form class="form-inline my-2 my-lg-0">
                           <a href="tel:01 715-0951" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 position-relative solid-btn mt-0 text-medium radius-pill text-active text-uppercase text-white">
                             01 715-0951
                            </a>
                        </form>
                    </div>
                </div> <!-- navbar collpase -->
            </div> <!-- container -->
        </nav>
        <!-- Start Navigation Section -->
    </header>
    <!-- End Header -->


    <!-- Start Section -->
    <section class=" position-relative set-bg breadcrumb-container" data-bg="assets/images/breadcrumb-img1.jpg">
        <div class="overlay op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
						<h3 class="semi-bold text-uppercase text-white">Contacto</h3>
						<nav aria-label="breadcrumb">
						    <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
						        <li class="breadcrumb-item active"><a href="index.html">Inicio</a></li>
						        <li class="breadcrumb-item " aria-current="page"><a href="#">Contacto</a></li>
						    </ol>
						</nav>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Section -->


		<div class="contact-inner bg-white radius-5">
		<center>	<h3 class="m-text-2 m-mb-30">Gracias por escribirnos, hemos recibido tu mensaje.</br>
			No pondremos en contacto en breve.</h3></center>
			</div>

		<!-- Start footer -->
     <footer class="m-pt-130 type-2">

         <div class="m-pt-40 pb-4 m-bg-1">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-6">
                         <a href="index.html" class="text-default fz-poppins">
                             Inicio
                         </a>
                          |
                          <a href="conocenos.html" class="text-default fz-poppins">
                             Conócenos
                         </a>
                         |
                          <a href="contacto.html" class="text-default fz-poppins">
                             Contacto
                         </a>
                         |
                          <a href="faq.html" class="text-default fz-poppins">
                             Preguntas
                         </a>
                         <p class="fz-14 mt-3">
                           Jr.Chiquian 2278 Urb. Santoyo - El Agustino
                             <br>
                             01 715-0951
                         </p>
                     </div>
                     <div class="col-sm-6 border-0 article-tags">
                         <div class="social-icon text-md-right text-sm-right circle-link position-relative">
                             <a href="https://www.facebook.com/policlinicosantoyo" target="_blank" class="text-default  rounded-circle fill-hover   social-fill-hover bg-white s-dp-1-3-15">
                                     <i class="icofont-facebook"></i>
                                 </a>

                              <a href="https://www.instagram.com/policlinico_santoyo/" target="_blank" class="text-default  rounded-circle fill-hover   social-fill-hover bg-white s-dp-1-3-15">
                                     <i class="icofont-instagram"></i>
                                 </a>

                         </div>
                         <p class="text-right fz-14 mt-4">
                             Copyright © 2019, Todos los derechos reservados.
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <!-- End footer -->

     <!-- Start scroll-top  Section -->
     <div class="scroll-top">
         <i class="icofont-rounded-up"></i>
     </div>
     <!-- End  scroll-top Section -->

     <!-- js file -->
     <script src="assets/js/jquery-2.2.4.min.js"></script>
        <!-- plugins js -->
     <script src="assets/js/plugins.js"></script>
        <!-- main js -->
     <script src="assets/js/main.js"></script>
 </body>



 </html>
