<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Despacho Velázquez y Asociados, S.C. :: Servicios de Contaduría Pública</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Servicio de auditoría, consultoría, asesoría financiera, asesoría fiscal, capacitación impuestos" />
	<meta name="keywords" content="Despacho Contable, Academia de Capacitación Fiscal" />
  	<!-- Twitter integration -->
	<meta name="twitter:title" content="Contadores Públicos, Especialistas Fiscales" />
	<meta name="twitter:image" content="https://pbs.twimg.com/profile_images/2278109130/xl8kv6jb1gcewpeteum2_400x400.jpeg" />
	<meta name="twitter:url" content="https://twitter.com/DespVelazquez" />
	<meta name="twitter:card" content="summary" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet"
	>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-md-12 col-offset-0 text-center">
						<div id="fh5co-logo">
						    <a href="index.html"><img src="images/logo.png" alt="Despacho Velazquez"></a>
						    <h3>Despacho Velázquez y Asociados, S.C.</h3>
						    <h5>Contadores Publicos, Especialistas Fiscales</h5>
						</div>						
					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="conocenos.html">Conócenos</a></li>
							<li><a href="servicios.html">Servicios</a></li>
							<li><a href="capacitacion.html">Capacitación</a></li>
							<li class="active"><a href="contactanos.html">Contacto</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Contacto</h2>
					<p>Para nuestra Firma lo más importante es la tranquilidad de nuestros Clientes y Amigos; en tanto ellos hacen negocios nosotros les apoyamos en atender sus obligaciones fiscales, contables, laborales, mercantiles, legales, entre otros.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7 animate-box">
					<div class="row">
						<div class="col-md-12 text-center">
                            <?php
                            $nombre = trim($_POST['nombre']);
                            $correo = $_POST['correo'];
                            $telef = $_POST['telef'];
                            $site_owners_email = 'vicente_velazquez@att.net.mx'; // Replace this with your own email address
                            $subject = "Nuevo mensaje desde el sitio web despachovelazquez.com.mx";
                            $mensaje = $_POST['mensaje'];

                            $msg = "<html><body style='font-family:Arial,sans-serif;'>";
                            $msg .= "<h3 style='border-bottom:1px dotted #ccc;'>Mensaje desde amaarkansas.org.mx</h3>\r\n";
                            $msg .= "<p><strong>De:</strong> " . $nombre . "</p>\r\n";
                            $msg .= "<p><strong>Email:</strong> " . $correo . "</p>\r\n";
                            $msg .= "<p><strong>Teléfono:</strong> " . $telef . "</p>\r\n";
                            $msg .= "<p><strong>Mensaje:</strong> <br /> " . $mensaje . " </p>";
                            $msg .= "</body></html>";

                            $headers = "De: " . $nombre . " <" . $correo . "> \r\n";
                            $headers .= "Reply-To: " . $correo . "\r\n";
                            $headers .= 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

                            if ($nombre == "") {
                                $error['nombre'] = "Por favor ingresa tu nombre";
                            }

                            if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $correo)) {
                                $error['correo'] = "Ingresa una cuenta de correo válida por favor";
                            }

                            if ($mensaje == "") {
                                $error['mensaje'] = "Envíanos tus comentarios.";
                            }

                            if (!$error) {
                                $mail = mail($site_owners_email, $subject, $msg, $headers);

                                echo "<div class='success text-center'><br><h2> " . $nombre . " </h2> <h2> Muchas gracias. </h2><p> Tu mensaje ha sido enviado correctamente, en breve te contactaremos.</p> <br><br></div>";

                            } # end if no error
                            else {

                                foreach ($error as $er) {
                                    echo '<div>' . $er . '</div>';
                                }
                            } # end if there was an error sending
                            ?>
						</div>
					</div>
				</div>			
				<div class="col-sm-5 animate-box text-justify">
				    <p>Si requiere información adicional acerca de nuestra Firma, Capacitadora, servicios,  conferencias, cotizaciones y cualquier otro concepto, no dude en contactarnos, estaremos muy complacidos en poder atenderle.</p>
					<ul class="contact-info">
					    <!--
						<li><i class="icon-phone3"></i>+ 1235 2355 98</li>
						-->
						<li><i class="icon-location3"></i><a href="mailto:vicente_velazquez@att.net.mx">vicente_velazquez@att.net.mx</a></li>
						
					</ul>
				</div>

			</div>
		</div>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="col-md-4 text-left animate-box">
                <ul class="fh5co-social-icons">
                    <li><a target="_blank" href="https://twitter.com/DespVelazquez"><i class="icon-twitter2"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCiPIFzIvdL2CM-ttJ3itsrg/videos"><i class="icon-youtube2"></i></a></li>
                </ul>
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4 text-right animate-box">
				<a target="_blank" href="otros/politica_privacidad.pdf">Conoce nuestra Política de Privacidad</a>
			</div>
			<div class="row copyright">
				<div class="col-md-8 col-md-offset-2 text-center">
                    <small class="block">Todos los Derechos Reservados &copy; Despacho Velázquez y Asociados, S.C.</small> 
                    <small>Despacho Velázquez y Asociados, S.C., Academia de Capacitación Fiscal, Logo DVA, ACAFI, "La mejor opción en su capacitación profesional", "La mejor opción en sus negocios" son propiedad de Despacho Velázquez y Asociados, S.C.  </small>
                    <small> <a href="http://www.despachovelazquez.com.mx">www.despachovelazquez.com.mx</a> <!-- Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>--></small>
                    <small class="block">Powered by: <a href="http://minegocioenweb.mx/" target="_blank">Mi Negocio en Web</a></small>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

