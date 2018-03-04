<?php 
/*
 Template Name: Car - Single
 Template Post Type: cars
*/
get_header(); ?>

<div class="b-infoBar">
	<div class="container">
		<div class="row wow zoomInUp" data-wow-delay="0.5s">
			<div class="col-xs-3">
				<div class="b-infoBar__premium"><?php echo(get_field('car_id')) ?></div>
			</div>
			<div class="col-xs-9">
				<div class="b-infoBar__btns">
					<a href="#" class="btn m-btn m-infoBtn">ISPRINTAJ STRANICU<span class="fa fa-angle-right"></span></a>
					<a href="#" class="btn m-btn m-infoBtn">DOWNLOAD UPUTSTVO<span class="fa fa-angle-right"></span></a>
				</div>
			</div>
		</div>
	</div>
</div><!--b-infoBar-->

<section class="b-detail s-shadow">
	<div class="container">
		<header class="b-detail__head s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
			<div class="row">
				<div class="col-sm-9 col-xs-12">
					<div class="b-detail__head-title">
						<h1><?php echo(get_field('model')) ?></h1>
						<h3><?php
//$terms = get_the_terms( $post->ID , 'categories' );
//foreach ( $terms as $term ) {
//echo $term->name;
//}
						the_field('brand');
?></h3>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="b-detail__head-price">
						<div class="b-detail__head-price-num">
							<?php 
								if(get_field('show_price')=='Sa PDV-om') {
									echo(get_field('price_pdv') . ' KM');
								}
								elseif(get_field('show_price')=='EUR') {
									echo(get_field('price_eur') . ' EUR');
								}
								elseif(get_field('show_price')=='Bez PDV-a') {
									echo(get_field('price_no_pdv') . ' KM');
								} 
							?>
						</div>
						<p><?php the_field('show_price') ?></p>
					</div>
				</div>
			</div>
		</header>
		<div class="b-detail__main">
			<div class="row">
				<div class="col-md-7 col-xs-12">
					<div class="b-detail__main-info">
						<?php if(get_field('images')): ?>
							<div class="b-detail__main-info-images wow zoomInUp" data-wow-delay="0.5s">
								<div class="row m-smallPadding">
									<div class="col-xs-12">
										<ul class="b-detail__main-info-images-big bxslider enable-bx-slider" data-pager-custom="#bx-pager" data-mode="horizontal" data-pager-slide="true" data-mode-pager="vertical" data-pager-qty="5">
											<?php foreach(get_field('images') as $image): ?>
												<li class="s-relative">                                        
													<!-- <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a> -->
													<img class="img-responsive center-block" src="<?php echo $image['url'] ?>" alt="mers" />
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<div class="b-detail__main-info-characteristics wow zoomInUp" data-wow-delay="0.5s">
							<?php if(have_rows('highlight_info')): ?>
								<?php while(have_rows('highlight_info')): the_row(); ?>
									<div class="b-detail__main-info-characteristics-one">
										<div class="b-detail__main-info-characteristics-one-top">
											<div><span class="fa <?php echo get_sub_field('icon') ?>"></span></div>
											<p><?php echo get_sub_field('value') ?></p>
										</div>
										<div class="b-detail__main-info-characteristics-one-bottom">
											<?php echo get_sub_field('name') ?>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							<!-- <div class="b-detail__main-info-characteristics-one">
								<div class="b-detail__main-info-characteristics-one-top">
									<div><span class="fa fa-trophy"></span></div>
									<p>5,000KM</p>
								</div>
								<div class="b-detail__main-info-characteristics-one-bottom">
									Warrenty
								</div>
							</div>
							<div class="b-detail__main-info-characteristics-one">
								<div class="b-detail__main-info-characteristics-one-top">
									<div><span class="fa fa-at"></span></div>
									<p>Auto</p>
								</div>
								<div class="b-detail__main-info-characteristics-one-bottom">
									Transmission
								</div>
							</div>
							<div class="b-detail__main-info-characteristics-one">
								<div class="b-detail__main-info-characteristics-one-top">
									<div><span class="fa fa-car"></span></div>
									<p>FWD</p>
								</div>
								<div class="b-detail__main-info-characteristics-one-bottom">
									Drivetrain
								</div>
							</div>
							<div class="b-detail__main-info-characteristics-one">
								<div class="b-detail__main-info-characteristics-one-top">
									<div><span class="fa fa-user"></span></div>
									<p>5</p>
								</div>
								<div class="b-detail__main-info-characteristics-one-bottom">
									Passangers
								</div>
							</div>
							<div class="b-detail__main-info-characteristics-one">
								<div class="b-detail__main-info-characteristics-one-top">
									<div><span class="fa fa-fire-extinguisher"></span></div>
									<p>10.8L</p>
								</div>
								<div class="b-detail__main-info-characteristics-one-bottom">
									In City
								</div>
							</div>
							<div class="b-detail__main-info-characteristics-one">
								<div class="b-detail__main-info-characteristics-one-top">
									<div><span class="fa fa-fire-extinguisher"></span></div>
									<p>7.5L</p>
								</div>
								<div class="b-detail__main-info-characteristics-one-bottom">
									On Highway
								</div>
							</div> -->
						</div>

						<?php 
						$equipment = explode(';', get_field('equipment'));
						if($equipment.length): ?>
							<div class="b-detail__main-info-extra wow zoomInUp" data-wow-delay="0.5s">
								<h2 class="s-titleDet">OPREMA <?php if(get_field('equipment_name')) {
										echo(' - '.get_field('equipment_name'));
									} ?></h2>
								<div class="row">
									<div class="col-xs-4">
										<ul>
											<?php foreach ($equipment as $key => $value) {
												if($key<6) {
													echo('<li><span class="fa fa-check"></span>' . $value . '</li>');
												}
											} ?>
										</ul>
									</div>
									<div class="col-xs-4">
										<ul>
											<?php foreach ($equipment as $key => $value) {
												if($key>=6 && $key<12) {
													echo('<li><span class="fa fa-check"></span>' . $value . '</li>');
												}
											} ?>
										</ul>
									</div>
									<div class="col-xs-4">
										<ul>
											<?php foreach ($equipment as $key => $value) {
												if($key>=12 && $key<18) {
													echo('<li><span class="fa fa-check"></span>' . $value . '</li>');
												}
											} ?>
										</ul>
									</div>
								</div>
							</div>
						<?php endif; ?>


						<div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s" style="margin-top:65px">
							<div class="b-detail__main-aside-about-form-links">
								<a href="#" class="j-tab m-active s-lineDownCenter" data-to='#info1'>Napomena</a>
								<!-- <a href="#" class="j-tab" data-to='#info2'>ZAKAŽITE TESTNU VOŽNJU</a>
								<a href="#" class="j-tab" data-to='#info3'>NEŠTO TREĆE</a>
								<a href="#" class="j-tab" data-to='#info4'>ZAKAŽITE SASTANAK</a> -->
							</div>
							<div id="info1">
								<?php the_field('description') ?>
							</div>
							<div id="info2">
								<p>The full review of the 2016 Nissan Maxima is coming soon. In the meantime, you can see pictures, research prices or view and
									compare specs for the 2016 Nissan Maxima. If you‚considering the 2014 Nissan Maxima, you can read our review.</p>
								<p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
									erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
									convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
									Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
									Fusce ut felis. </p>
								<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
									faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
									nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
							</div>
							<div id="info3">
								<p>Vestibulum auctor lacinia nunc. Nunc ut turpis.Sed libero magna, fermentum viverra, egestas non, fermentum sed, elit. Aenean
									erat orci, mollis quis gravida sed, mollis a, quam. Integer fermentum neque egestas orci. Nunc posuere, felis sit amet faucibus
									convallis tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Donec quis quam in ante condimentum blan erdit.
									Integer et urna. Vestibulum nisl. Ut ante est, imperdiet dignissim eleifend sit amet lacinia tempor justo. Nunc ornare atm nibh.
									Fusce ut felis. </p>
								<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
									faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
									nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
							</div>
							<div id="info4">
								<p>Donec ullamcorper nisi ac lectus. Proin at orci. Suspendisse nec orci nec elit convallis porttitor. Praesent sit amet turpis eu nisl
									faucibus pharetra. Sed eu felis. Etiam eleifend nisl nec lectus. Ut suscipit pede eu diam. Aenean vitae quam. Cras felis. Sed utdw
									nibh. Duis libero. Vivamus pharetra libero non facilisis imperdiet mi augue feugiat nisl.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-xs-12">
					<aside class="b-detail__main-aside">
						<div class="b-detail__main-aside-desc wow zoomInUp" data-wow-delay="0.5s">
							<h2 class="s-titleDet">Opis</h2>
							<?php $characteristics = ['brand',
							 'model',
							 'car_type',
							 'type',
							 'doors',
							 'seats',
							 'stands',
							 'lays',
							 'empty_mass',
							 'allowed_mass',
							 'volume',
							 'year',
							 'first_reg'
							 'first_reg_place',
							 'reg_expire_date',
							 'mileage',
							 'mileage_update_date',
							 'engine',
							 'engine_volume',
							 'engine_power',
							 'engine_power_kw',
							 'fuel_type',
							 'transmission',
							 'pogon',
							 'num_axes',
							 'active_axes',
							 'wheels',
							 'color',
							 'interior_color',
							 'interior_materials',
							 'varranty',
							 'varranty_type',
							 'varranty_highlights',
							 'fuel_consumption'
							];
							?>
							<?php foreach($characteristics as $f): ?>
								<?php $field = get_field_object($f); if($f): ?>
								<div class="row">
								<div class="col-xs-5">
									<h4 class="b-detail__main-aside-desc-title"><?php echo $field['label'] ?></h4>
								</div>
								<div class="col-xs-7">
									<p class="b-detail__main-aside-desc-value"><?php echo $field['value'] ?></p>
								</div>
								</div>
							<?php endif; ?>
							<?php endforeach; ?>
							
						</div>
						<div class="b-detail__main-aside-about wow zoomInUp" data-wow-delay="0.5s">
							<h2 class="s-titleDet">Informacije o vozilu</h2>
							<div class="b-detail__main-aside-about-call">
								<span class="fa fa-phone"></span>
								<div>+387 33 778 000</div>
								<p>Pozovite nas za više informacija o vozilu</p>
							</div>
							<div class="b-detail__main-aside-about-seller">
							</div>
							<div class="b-detail__main-aside-about-form">
								<div class="b-detail__main-aside-about-form-links">
									<a href="#" class="j-tab m-active s-lineDownCenter" data-to='#form1'>Pošalji upit</a>
									<a href="#" class="j-tab" data-to='#form2'>Pošalji info na email</a>
								</div>
								<form id="form1" action="/" method="post">
									<input type="text" placeholder="IME I PREZIME" value="" name="name" />
									<input type="email" placeholder="EMAIL ADRESA" value="" name="email" />
									<input type="tel" placeholder="TELEFON" value="" name="name" />
									<textarea name="text" placeholder="PORUKA"></textarea>
									<div><input type="checkbox" name="one" value="" /><label>Pošalji mi kopiju poruke</label></div>
									<button type="submit" class="btn m-btn">Pošalji<span class="fa fa-angle-right"></span></button>
								</form>
								<form id="form2" action="/" method="post">
									<input type="email" placeholder="EMAIL" value="" name="email" />
									<button type="submit" class="btn m-btn">Pošalji<span class="fa fa-angle-right"></span></button>
								</form>
							</div>
						</div>
						
					</aside>
				</div>
			</div>
		</div>
	</div>
</section><!--b-detail-->

<?php get_footer(); ?>