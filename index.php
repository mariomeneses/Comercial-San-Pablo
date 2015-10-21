<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="img/logo.png" rel="icon" type="image/x-icon" /><!--faltafavicon -->
		<link href="img/logo.png" type="image/x-icon" rel="shortcut icon" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Comercial San Pablo</title>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

		<link href="css/style.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
	 
	    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	    <style>
	        .slider-wrapper{
	            width: 960px;
	            margin: 100px auto;
	        }
	    </style>
		<!--[if lt IE 9 ]>
			<script type="text/javascript" src="js/html5shiv.min.js"></script>
			<script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
			<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->

		<!--Facebook Tags-->
		<meta property="og:locale" content="es_ES"/>
		<meta property="og:title" content="Comercial San Pablo"/>
		<meta property="og:image" content="img/logo.png"/>
		<meta property="og:site_name" content="Comercial San Pablo"/>
		<meta property="og:description" content="Empresa distribuidora de carnes con presencia en el mercado con más de 30 años de experiencia. Abasteciendo con carnes rojas, carnes de cerdo, aves, cecinas y subproductos"/>	
		<meta property="og:url" content="http://www.comercialsanpablo.com"/>

		<meta name="language" content="es" >
		<meta http-equiv="Content-Type" charset="text/html; UTF-8" />
		<meta name="description" content="Empresa distribuidora de carnes con presencia en el mercado con más de 30 años de experiencia. Abasteciendo con carnes rojas, carnes de cerdo, aves, cecinas y subproductos">
		<meta name="author" content="Comercial San Pablo">
		<meta name="keywords" content="carnes rojas, carnes de cerdo, aves, cecinas y subproductos, carne, pollo, filete, huachalomo, posta, asado, lomo liso, sobre costilla, posta rosada, choclillo, posta, plateada, osobuco, abastero, carnicero, pollo ganso, pechuga de pollo, truto de pollo, costillar, chuleta, pulpa, vienesas, hamburguesas, asiento">
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-42768469-5', 'auto');
	  ga('send', 'pageview');
	</script>
	
	</head>
	<body id="fix1">
		<header>
			<nav id="menu">
				<ul>
					<div id="titulo">
						Comercial San Pablo
					</div>
					<li id="img-menu-prod">
						<a href="index" id="activo"><img src="img/icono-home-blanco.png" alt=""><br>inicio</a>
					</li>
					<li>
						<a href="productos"><img src="img/icono-producto-rojo.png" alt=""><br>productos</a>
					</li>
					<li>
						<a href="empresa"><img src="img/icono-empresa-rojo.png" alt=""><br>empresa</a>
					</li>
					<li>
						<a href="contacto"><img src="img/icono-contacto-rojo.png" alt=""><br>contacto</a>
					</li>
				</ul>
			</nav>
			<div id="menuChico">
				<input id="check1" type="checkbox" />
				<label for="check1">
				<img src="img/menu.png" alt="icono">
				</label>
				<div class="menu">
					<ul>
						<li ><a href="index" >inicio</a></li>
						<li ><a href="productos" >productos</a></li>
						<li ><a href="empresa" >empresa</a></li>
						<li ><a href="contacto" 	>contacto</a></li>
					</ul>
				</div>
			</div>
			<div id="logo">
                <h1><img src="img/logo.png" alt="Comercial San Pablo"></h1>
            </div>
		</header>
		<section id="main_index">
			<div class="slider-wrapper theme-light">
				<div id="slider" class="nivoSlider">
					<img src="img/filete-vacuno.jpg" title="#caption1"/>
					<img src="img/filete-vacuno.jpg" title="#caption1" />
					<img src="img/filete-vacuno.jpg" title="#caption1"/>
				</div>
				<div id="caption1" style="display: none;">
		            <p>E-mail:<br>ventas@comercialsanpablo.com<br>Comercialsanpablo@hotmail.com</p>
		            <p>Teléfono:<br>26813095- 22499468</p>
		            <p>Dirección:<br>San pablo 3316, Quinta Normal</p>
        		</div>
    		</div>
		    <script type="text/javascript">
		    $(window).load(function(){
		        $('#slider').nivoSlider({
		            effect: 'fade',
		            slices: 15,
		            boxCols: 8,
		            boxRows: 4,
		            animSpeed: 500,
		            pauseTime: 3000,
		            startSlide: 0,
		            directionNav: true,
		            controlNav: true,
		            controlNavThumbs: false,
		            pauseOnHover: true,
		            manualAdvance: false,
		            prevText: 'Prev',
		            nextText: 'Next',
		            randomStart: false,
		        });
		    });
		    </script>
		</section>
		<footer>
            <div id="footer-logo">
                <img src="img/chilecompra.png" alt="Comercial San Pablo">
            </div>
            <div id="footer-texto">
            	<img src="img/haccp.jpg" alt="Comercial San Pablo">
			</div>
            <div id="footer-links">
                <div id ="footer-title">Carnes C.S.P</div>
                <div id="footer-index"><a href="index">Inicio</a></div>
                <div id="footer-index"><a href="productos">Productos</a></div>
                <div id="footer-empresa"><a href="empresa">Empresa</a></div>
            </div>
            <div id="footer-contacto">
                <div itemscope itemtype="http://schema.org/LocalBusiness">
                    <div id ="footer-title">CONTÁCTANOS</div>
                    <div id="footer-cont-link"><img src="img/mail.png" alt="Correo">&nbsp;&nbsp;<a href="mailto:ventas@comercialsanpablo.com"><span itemprop="email">ventas@comercialsanpablo.com</span></a><a href="mailto:Comercialsanpablo@hotmail.com"><span itemprop="email"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comercialsanpablo@hotmail.com<br><br></span></a></div>
                    <div id="footer-cont-link"><img src="img/telefono.png" alt="Telefono">&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+56226813095"><span itemprop="telephone">+56226813095</span></a></div>
                    <div id="footer-cont-link"><img src="img/telefono.png" alt="Celular">&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+56222499468"><span itemprop="telephone">+56222499468 <br><br></span></a></div>
                    <div id="footer-cont-link">San pablo 3316, Quinta Normal.</div>
                </div>
            </div>
		</footer>
	</body>
</html>