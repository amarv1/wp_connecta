<?php 
/*
 Template Name: Rent a Car
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
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="about.html" class="b-breadCumbs__page m-active"><?php the_title() ?></a>
	</div>
</div><!--b-breadCumbs-->



<?php get_footer(); ?>