<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Connecta - Kontakt</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo(get_template_directory_uri().'/assets/switcher/css/switcher.css'); ?>" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="<?php echo(get_template_directory_uri().'/assets/switcher/css/color5.css'); ?>" title="color5" media="all" data-default-color="true" />
</head>
<body class="m-index" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->

<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="b-topBar__addr">
					<span class="fa fa-map-marker"></span>
					Džemala Bijedića 172b, 71000 SARAJEVO
				</div>
			</div>
			<div class="col-md-2 col-xs-6">
				<div class="b-topBar__tel">
					<span class="fa fa-phone"></span>
					+387 33 778 000
				</div>
			</div>
			<div class="col-md-4 col-xs-6">
				<nav class="b-topBar__nav">
					<ul>
						<li><a href="wp-admin">Log in</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-2 col-xs-6">
				<div class="b-topBar__lang">
					<div class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle='dropdown'>Jezik</a>
						<a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-es"></span>BS<span class="fa fa-caret-down"></span></a>
						<ul class="dropdown-menu h-lang">
							<li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="flag-icon flag-icon-es"></span>BS</a></li>
							<li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!--b-topBar-->

<nav class="b-nav">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-4">
				<div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
					<h3><a href="home.html">C<span>onnecta</span></a></h3>
					<h2><a href="home.html">Slogan</a></h2>
				</div>
			</div>
			<div class="col-sm-9 col-xs-8">
				<div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navbar-main-slide" id="nav">
						<ul class="navbar-nav-menu">
							<li><a href="home.html">Početna</a></li>
							<li><a href="about.html">O nama</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle='dropdown' href="">Usluge <span class="fa fa-caret-down"></span></a>
								<ul class="dropdown-menu h-nav">
									<li><a href="fleet-management.html">Fleet management</a></li>
									<li><a href="">Prodaja vozila</a></li>
									<li><a href="">Najam vozila</a></li>
									<li><a href="">Servis</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contacts.html">Kontakt</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav><!--b-nav-->