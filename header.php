<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
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
				<div class="wow slideInLeft" data-wow-delay="0.3s" style="padding: 8px 0 0 5px">
					<!-- <h3><a href="home.html">C<span>onnecta</span></a></h3>
					<h2><a href="home.html">Slogan</a></h2> -->
					<img src="http://localhost/connecta/wp-content/uploads/LOGO_CONNECTA.png" height="25"/>
				</div>
			</div>
			<div class="col-sm-9 col-xs-8">
				<?php if(has_nav_menu('header-menu')): ?>
				<?php get_template_part('main-menu', 'header-menu'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</nav><!--b-nav-->