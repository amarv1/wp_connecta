<?php
/*
 Template Name: Zaposlenja
*/
get_header(); ?>

<section class="b-pageHeader" style="background: url(<?php the_field('background') ?>) center;">
	<div class="container">
		<h1 class=" wow zoomInLeft" data-wow-delay="0.5s"><?php the_field('title') ?></h1>
		<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
			<h3><?php the_field('pretitle') ?></h3>
		</div>
	</div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
	<div class="container">
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="contacts.html" class="b-breadCumbs__page m-active"><?php the_title() ?></a>
	</div>
</div><!--b-breadCumbs-->

<section class="b-contacts s-shadow">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="b-contacts__form">
					<header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
						<h2 class="s-titleDet"><?php the_field('section_title') ?></h2>
					</header>
					<p class=" wow zoomInUp" data-wow-delay="0.5s"><?php the_field('text') ?></p>
					<div id="success"></div>
					<form id="contactForm" novalidate class="s-form wow zoomInUp" data-wow-delay="0.5s">
						<input type="text" placeholder="IME I PREZIME" value="" name="user-name" id="user-name" />
						<input type="text" placeholder="KONTAKT ADRESA" value="" name="address" id="address" />
						<input type="text" placeholder="TELEFON" value="" name="user-phone" id="user-phone" />
						<input type="text" placeholder="EMAIL" value="" name="user-email" id="user-email" />
						<div class="s-relative">
							<select name="user-topic" id="user-topic" class="m-select">
								<option value="Not select">Preferirani odjel</option>
								<option value="Topic 1">Rent-a-car</option>
								<option value="Topic 2">Ford Cargo</option>
								<option value="Topic 3">Prodaja</option>
								<option value="Topic 4">Administracija</option>
								<option value="Topic 4">Ostalo</option>
							</select>
							<span class="fa fa-caret-down"></span>
						</div>
						<textarea id="additional-info" name="additional-info" placeholder="DODATNI OPIS"></textarea>
						<a href="#" class="btn m-btn m-infoBtn" style="margin-top: 25px;">BIOGRAFIJA<span class="fa fa-angle-right"></span></a>
						<button type="submit" class="btn m-btn">POŠALJI<span class="fa fa-angle-right"></span></button>
					</form>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="b-contacts__address">
					
				</div>
			</div>
		</div>
	</div>
</section><!--b-contacts-->

<?php get_footer(); ?>
