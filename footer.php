<div class="b-features">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-3 col-xs-6 col-xs-offset-6">

				<ul class="b-features__items">
					<?php if(have_rows('footer', 'option')): ?>
						<?php while( have_rows('footer', 'option') ): the_row(); ?>
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100"><?php echo get_sub_field('motive1', 'option') ?></li>
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100"><?php echo get_sub_field('motive2', 'option') ?></li>
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100"><?php echo get_sub_field('motive3', 'option') ?></li>
						<?php endwhile; ?>
				    <?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div><!--b-features-->

<div class="b-info">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-6">
				<aside class="b-info__aside wow zoomInLeft" data-wow-delay="0.3s">
					<article class="b-info__aside-article">
						<?php if(have_rows('work_time', 'option')): ?>
							<h3>RADNO VRIJEME</h3>
							<?php while(have_rows('work_time', 'option')): the_row(); ?>
								<div class="b-info__aside-article-item">
									<h6><?php echo get_sub_field('department_name', 'option'); ?></h6>
									<p><?php echo get_sub_field('department_worktime', 'option'); ?></p>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</article>
					<article class="b-info__aside-article">
						<h3>O nama</h3>
						<?php while(have_rows('footer','option')): the_row(); ?>
							<p><?php echo get_sub_field('footer_about', 'option'); ?></p>
						<?php endwhile; ?>
					</article>
					<a href="/index.php/o-nama/" class="btn m-btn">Saznajte više<span class="fa fa-angle-right"></span></a>
				</aside>
			</div>
			<div class="col-md-3 col-xs-6">
				<div class="b-info__latest">
					<h3>NOVO U PONUDI</h3>
					<?php 
						$args = array( 'numberposts' => '3', 'post_type' => 'cars');
    					$recent_cars = wp_get_recent_posts( $args );
    					foreach($recent_cars as $recent):
					?>
						<div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.3s">
							<div class="b-info__latest-article-info">
								<h6><a href="<?php echo get_permalink($recent['ID']) ?>"><?php echo $recent['post_title'] ?></a></h6>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-3 col-xs-6">
				<div class="b-info__twitter">
					<h3>NOVOSTI</h3>
					<?php 
						$args = array( 'numberposts' => '3' );
    					$recent_posts = wp_get_recent_posts( $args );
    					foreach($recent_posts as $recent):
					?>
						<div class="b-info__twitter-article wow zoomInUp" data-wow-delay="0.3s">
							<div class="b-info__twitter-article-content">
								<a href="<?php echo get_permalink($recent) ?>"><p><?php echo $recent['post_title'] ?></p></a>
								<span><?php echo get_the_date('d.m.Y. | H:i', $recent) ?></span>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-3 col-xs-6">
				<address class="b-info__contacts wow zoomInUp" data-wow-delay="0.3s">
					<p>KONTAKTIRAJTE NAS</p>
					<div class="b-info__contacts-item">
						<span class="fa fa-map-marker"></span>
						<em><?php echo get_field('address', 'option') ?></em>
					</div>
					<div class="b-info__contacts-item">
						<span class="fa fa-phone"></span>
						<em>Tel:   <?php echo get_field('tel', 'option') ?></em>
					</div>
					<div class="b-info__contacts-item">
						<span class="fa fa-fax"></span>
						<em>FAX:  <?php echo get_field('fax', 'option') ?></em>
					</div>
					<div class="b-info__contacts-item">
						<span class="fa fa-envelope"></span>
						<em>Email:  <?php echo get_field('email', 'option') ?></em>
					</div>
				</address>
				<address class="b-info__map">
					<a href="<?php echo get_field('location', 'option') ?>">Naša lokacija</a>
				</address>
			</div>
		</div>
	</div>
</div><!--b-info-->

<footer class="b-footer">
	<a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<div class="b-footer__company wow fadeInLeft" data-wow-delay="0.3s">
					<div class="" style="padding: 8px 0 0 5px;margin-bottom:5px">
						<!-- <h3><a href="home.html"><span>Connecta</span></a></h3> -->
						<img src="<?php echo get_field('logo', 'option'); ?>" height="20"/>
					</div>
					<p>&copy; 2018 Connecta d.o.o.</p>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="b-footer__content wow fadeInRight" data-wow-delay="0.3s">
					<?php if(have_rows('social', 'option')): ?>
						<div class="b-footer__content-social">
							<?php while(have_rows('social', 'option')): the_row(); ?>
								<a href="<?php echo get_sub_field('facebook') ?>"><span class="fa fa-facebook-square"></span></a>
								<a href="<?php echo get_sub_field('google') ?>"><span class="fa fa-google-plus-square"></span></a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
<!-- 					<nav class="b-footer__content-nav">
						<ul>
							<li><a href="home.html">Početna</a></li>
							<li><a href="404.html">O nama</a></li>
							<li><a href="listings.html">Usluge</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contacts.html">Kontakt</a></li>
						</ul>
					</nav> -->
				</div>
			</div>
		</div>
	</div>
</footer><!--b-footer-->
<!--Main-->
<script src="<?php echo(get_template_directory_uri().'/js/jquery-1.11.3.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/jquery-ui.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/modernizr.custom.js') ?>"></script>

<script src="<?php echo(get_template_directory_uri().'/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/waypoints.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/jquery.easypiechart.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/classie.js') ?>"></script>

<!--Switcher-->
<script src="<?php echo(get_template_directory_uri().'/assets/switcher/js/switcher.js') ?>"></script>
<!--Owl Carousel-->
<script src="<?php echo(get_template_directory_uri().'/assets/owl-carousel/owl.carousel.min.js') ?>"></script>
<!--bxSlider-->
<script src="<?php echo(get_template_directory_uri().'/assets/bxslider/jquery.bxslider.js') ?>"></script>
<!-- jQuery UI Slider -->
<script src="<?php echo(get_template_directory_uri().'/assets/slider/jquery.ui-slider.js') ?>"></script>

<!--Theme-->
<script src="<?php echo(get_template_directory_uri().'/js/jquery.smooth-scroll.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/wow.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/jquery.placeholder.min.js') ?>"></script>
<script src="<?php echo(get_template_directory_uri().'/js/theme.js') ?>"></script>

</body>
</html>