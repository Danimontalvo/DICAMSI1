<!DOCTYPE HTML>
<html>
<head>
<title>Modifica Mascota</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mr Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header-top start here-->
<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-social wow bounceInLeft" data-wow-delay="0.3s">
			    <ul>
			    	<li><h5>REDES SOCIALES :</h5></li>
			    	<li><a href="#"><span class="fb"> </span></a></li>
			    	<li><a href="#"><span class="tw"> </span></a></li>
			    	<li><a href="#"><span class="in"> </span></a></li>
			    	<li><a href="#"><span class="gmail"> </span></a></li>
			    </ul>
			</div>
			<div class="col-md-8 header-address wow bounceInRight" data-wow-delay="0.3s">
				<ul>
					<li><span class="phone"> </span> <h6>(044) 722-4978</h6></li>
					<li><span class="email"> </span><h6><a href="mailto:info@example.com">DICAMSIHOTEL@GMAIL.COM</a></h6></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-top end here-->
<!--header start here-->
	<!-- NAVBAR
		================================================== -->
<div class="header">
	<div class="fixed-header">	

		    <div class="navbar-wrapper">
		      <div class="container">
		        <nav class="navbar navbar-inverse navbar-static-top">
		             <div class="navbar-header">
			              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			              <div class="logo wow slideInLeft" data-wow-delay="0.3s">
			                    <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" /></a>
			              </div>
			          </div>
		            <div id="navbar" class="navbar-collapse collapse">
		            <nav class="cl-effect-16" id="cl-effect-16">
		              <ul class="nav navbar-nav">
		               <li><a  href="index.html" data-hover="INICIO">INICIO</a></li>
		                <li><a href="about.html" data-hover="ACERCA DE">ACERCA DE</a></li>
						<li><a href="services.html" data-hover="MI HEROE">MI HEROE</a></li>
						<li><a  href="room.html" data-hover="INSTALACIONES">INSTALACIONES</a></li>
								
		              </ul>
		            </nav>

		            </div>
		            <div class="clearfix"> </div>
		             </nav>
		          </div>
		           <div class="clearfix"> </div>
		    </div>
	 </div>
</div>
<!--header end here-->
<font color="black" face="arial">
<?php
include_once('mascota.php');
$miuser=new MASCOTA();
$miuser->NOMBRE_MASC= $_POST['NOMBRE_MASC'];
$miuser->TAMANO_MAS= $_POST['TAMANO_MAS'];
$miuser->HOGAR= $_POST['HOGAR'];
$miuser->modificar2();
?>
<BR><BR><a href="sistemadicamsi.php">REGRESAR A SISTEMA </A><BR><BR>
</font>
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-3 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<div class="ftr-logo">
				<img src="images/logo.jpg"  alt="">
				</div>
				<p>LOS MEJORES SERVICIOS PARA TU CACHORRO.</p>
			</div>
			<div class="col-md-3 ftr-grid ftr-mid wow zoomIn" data-wow-delay="0.3s">
				 <h3>DIRECCION</h3>
				 <span class="ftr-line flm"> </span>
				<p>ESTADO DE MEXICO</p>
				<p>#515 MORELOS </p>
				<p>(044) 722-4975 </p>
				<p>GRUPO DICAMSI</p>
				
			</div>
			<div class="col-md-3 ftr-grid ftr-rit wow zoomIn" data-wow-delay="0.3s">
				 <h3>CONTACTO </h3>
				 <form>
				 	<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				 	<input type="submit" value="Send" />
				 </form>
				  <ul class="ftr-icons">
				 	<li><a href="#"><span class="fa"> </span></a></li>
				 	<li><a href="#"><span class="tw"> </span></a></li>
				 	<li><a href="#"><span class="link"> </span></a></li>
				 	<li><a href="#"><span class="gmail"> </span></a></li>
				 </ul>
			</div>
		
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
    	    <p><a href="formulario_respaldo.php">2019 DICAMSI HOTEL PARA PERROS </a> <a href="http://DICAMSIHOTEL.com/" target="_blank">Dimhoteldog</a> </p>
    	 </div>
    </div>
</div>
</body>
</html>


