<?php 
/*
 Template Name: Shop
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
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="about.html" class="b-breadCumbs__page m-active">Shop</a>
	</div>
</div><!--b-breadCumbs-->

<div class="b-infoBar">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-xs-12">
				<div class="b-infoBar__compare wow zoomInUp" data-wow-delay="0.5s">
					<div class="dropdown">
						<a href="#" class="dropdown-toggle b-infoBar__compare-item" data-toggle='dropdown'><span class="fa fa-clock-o"></span>Posljednji pregledi<span class="fa fa-caret-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="detail.html">Item</a></li>
							<li><a href="detail.html">Item</a></li>
							<li><a href="detail.html">Item</a></li>
							<li><a href="detail.html">Item</a></li>
						</ul>
					</div>
					<a href="compare.html" class="b-infoBar__compare-item"><span class="fa fa-compress"></span>Uporedi vozila: 2</a>
				</div>
			</div>
			<div class="col-lg-8 col-xs-12">
				<div class="b-infoBar__select">
					<form method="post" action="/">
						<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
							<span class="b-infoBar__select-one-title">Tip liste</span>
							<a href="listingsTwo.html" class="m-list m-active"><span class="fa fa-list"></span></a>
							<a href="listTable.html" class="m-table"><span class="fa fa-table"></span></a>
						</div>
						<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
							<span class="b-infoBar__select-one-title">Prikaži na stranici</span>
							<select name="select1" class="m-select">
								<option value="10" selected="">10 vozila</option>
								<option value="20">20 vozila</option>
								<option value="30">30 vozila</option>
							</select>
							<span class="fa fa-caret-down"></span>
						</div>
						<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
							<span class="b-infoBar__select-one-title">Sortiraj</span>
							<select name="select2" class="m-select">
								<option value="1" selected="">Najnovije</option>
								<option value="2">Cijena - Opadajuće</option>
								<option value="3">Cijena - Rastuća</option>
							</select>
							<span class="fa fa-caret-down"></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><!--b-infoBar-->

<section class="b-items s-shadow">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-8 col-xs-12">
				<div class="b-items__cars">
					<?php 
						$query = new WP_Query( array( 'post_type' => 'cars' ) );
						if($query->have_posts()) {
							while($query->have_posts()) {
								$query->the_post();
								get_template_part('template-parts/car-single', 'page');
							}
						}
					?>
				</div>
				<div class="b-items__pagination wow zoomInUp" data-wow-delay="0.5s">
					<div class="b-items__pagination-main">
						<a data-toggle="modal" data-target="#myModal" href="#" class="m-left"><span class="fa fa-angle-left"></span></a>
						<span class="m-active"><a href="#">1</a></span>
						<span><a href="#">2</a></span>
						<span><a href="#">3</a></span>
						<span><a href="#">4</a></span>
						<a href="#" class="m-right"><span class="fa fa-angle-right"></span></a>    
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 col-xs-12">
				<aside class="b-items__aside">
					<h2 class="s-title wow zoomInUp" data-wow-delay="0.5s">Pretraga</h2>
					<div class="b-items__aside-main wow zoomInUp" data-wow-delay="0.5s">
						<form>
							<div class="b-items__aside-main-body">
								<div class="b-items__aside-main-body-item">
									<label>Marka</label>
									<div>
										<select name="select1" class="m-select">
											<option value="" selected="">Sve</option>
											<option value="">Mazda</option>
											<option value="">Ford</option>
										</select>
										<span class="fa fa-caret-down"></span>
									</div>
								</div>
								<div class="b-items__aside-main-body-item">
									<label>Model</label>
									<div>
										<select name="select1" class="m-select">
											<option value="" selected="">Sve</option>

										</select>
										<span class="fa fa-caret-down"></span>
									</div>
								</div>
								<div class="b-items__aside-main-body-item">
									<label>Raspon cijene</label>
									<div class="slider"></div>
									<input type="hidden" name="min" value="1000" class="j-min" />
									<input type="hidden" name="max" value="100000" class="j-max" />
								</div>
								<div class="b-items__aside-main-body-item">
									<label>Tip</label>
									<div>
										<select name="select1" class="m-select">
											<option value="" selected="">Sve</option>
											<option value="">SUV</option>
											<option value="">Limuzina</option>
											<option value="">Coupe</option>
										</select>
										<span class="fa fa-caret-down"></span>
									</div>
								</div>
								<div class="b-items__aside-main-body-item">
									<label>Status</label>
									<div>
										<select name="select1" class="m-select">
											<option value="" selected="">Sve</option>
											<option value="">Novo</option>
											<option value="">Polovno</option>
										</select>
										<span class="fa fa-caret-down"></span>
									</div>
								</div>
								<div class="b-items__aside-main-body-item">
									<label>Gorivo</label>
									<div>
										<select name="select1" class="m-select">
											<option value="" selected="">Sve</option>
											<option value="">Dizel</option>
											<option value="">Benzin</option>
										</select>
										<span class="fa fa-caret-down"></span>
									</div>
								</div>
							</div>
							<footer class="b-items__aside-main-footer">
								<button type="submit" class="btn m-btn">Filtriraj<span class="fa fa-angle-right"></span></button><br />
								<a href="">Reset</a>
							</footer>
						</form>
					</div>
					<div class="b-items__aside-sell wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__aside-sell-img">
							<h3>Oglas</h3>
						</div>
						<div class="b-items__aside-sell-info">
							<p>
								Nam tellus enimds eleifend dignis lsim
								biben edum tristique sed metus fusce
								Maecenas lobortis.
							</p>
							<a href="submit1.html" class="btn m-btn">Registruj se<span class="fa fa-angle-right"></span></a>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section><!--b-items-->

<?php get_footer(); ?>