<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Paws4All</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	 <!--[if lte IE 8]>
	 <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	 <link rel="stylesheet" href="/css/main.css"/>
	 <!--[if lte IE 9]>
	 <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
	 <!--[if lte IE 8]>
	 <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
   <script>
       window.Laravel = <?php echo json_encode([
           'csrfToken' => csrf_token(),
       ]); ?>
   </script>
	</head>
	<body>

		<!-- Sidebar -->
		<section id="sidebar">
			<img src="images/logo.png" height="125" width="175">
			<div class="inner">
				<nav>
					<ul>
						<li><a href="#intro">Bienvenido</a></li>
						@if(Auth::guest())
						<li><a href="#entrar">Entrar</a></li>
						@endif
						<li><a href="#noticias">Noticias</a></li>
						<li><a href="#mascotas">Mascotas</a></li>
						<li><a href="#refugios">Refugios</a></li>
					</ul>
				</nav>
			</div>
		</section>
    <div id="wrapper">
    @yield('intro')
    @yield('entrar')
    @yield('noticias')
    @yield('mascotas')
    @yield('refugios')
    </div>

	<!-- Footer -->
	<footer id="footer" class="wrapper style1-alt">
		<div class="inner">
			<ul class="menu">
				<li>&copy; Paws4All. All rights reserved.</li>
				<li style="margin-left: 10em;">Analive Castro</li>
				<li>Oscar Chaves</li>
				<li>Karla Dalorzo</li>
				<li>José Villalobos</li>
			</ul>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery.scrollex.min.js"></script>
	<script src="/js/jquery.scrolly.min.js"></script>
	<script src="/js/skel.min.js"></script>
	<script src="/js/util.js"></script>
	 <!--[if lte IE 8]>
	 <script src="assets/js/ie/respond.min.js"></script><![endif]-->
	 <script src="/js/main.js"></script>

	</body>
	</html>
