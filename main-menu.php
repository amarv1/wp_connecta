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
			<?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_id' => 'nav',)); ?>
		</ul>
	</div>
</div>