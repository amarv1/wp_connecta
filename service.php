<?php 
/*
 Template Name: Service
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
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span>
		<a href="about.html" class="b-breadCumbs__page m-active">Usluge</a><span class="fa fa-angle-right"></span>
		<a href="about.html" class="b-breadCumbs__page m-active">Fleet Management</a>
	</div>
</div><!--b-breadCumbs-->

<?php if( have_rows('content') ): ?>
	<?php while( have_rows('content') ) : the_row();  ?>
		
		<?php if (get_row_layout() == 'text-image'): ?>
			<section class="b-best">
				<div class="container">
					<?php if(get_sub_field('pretitle')): ?>
						<div class="text-center">
							<h2 class="s-title wow zoomInRight text-center" data-wow-delay="0.3s" data-wow-offset="100" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInRight;"><?php the_sub_field('pretitle') ?></h2>
						</div>
					<?php endif; ?>
					<?php if(get_sub_field('image_alignment')=='Lijevo'): ?>
						<div class="row mb-150 text-right">
							<div class="col-sm-6 col-xs-12">
								<img class="img-responsive center-block wow zoomInLeft" data-wow-delay="0.5s" alt="best" src="<?php the_sub_field('image') ?>" />
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="b-best__info">
									<header class="b-best__info-head">
										<h2 class="wow zoomInRight" data-wow-delay="0.5s" style="border:none;"><?php the_sub_field('title') ?></h2>
									</header>
									<p class="wow zoomInRight" data-wow-delay="0.5s"><?php the_sub_field('text') ?></p>
								</div>
							</div>
						</div>
					<?php elseif(get_sub_field('image_alignment')=='Desno'): ?>
						<div class="row mb-150">
							<div class="col-sm-6 col-xs-12">
								<div class="b-best__info">
									<header class="b-best__info-head">
										<h2 class="wow zoomInUp" data-wow-delay="0.5s" style="border:none;"><?php the_sub_field('title') ?></h2>
									</header>
									<p class="wow zoomInUp" data-wow-delay="0.5s"><?php the_sub_field('text') ?></p>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<img class="img-responsive center-block wow zoomInUp" data-wow-delay="0.5s" alt="best" src="<?php the_sub_field('image') ?>" />
							</div>
						</div>
					<?php endif; ?>
				</div>
			</section><!--b-best-->
		<?php endif; ?>

		<?php if (get_row_layout() == 'info-question'): ?>
			<section class="b-more">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<div class="b-more__why wow zoomInLeft" data-wow-delay="0.5s">
								<h2 class="s-title"><?php the_sub_field('info_title') ?></h2>
								<p><?php the_sub_field('text') ?></p>
							</div>
						</div>
						<?php if( have_rows('questions')): ?>
							<div class="col-sm-6 col-xs-12">
								<div class="b-more__info wow zoomInRight" data-wow-delay="0.5s">
									<h2 class="s-title"><?php the_sub_field('question_title') ?></h2>
									<?php while( have_rows('questions') ) : the_row();  ?>
										<div class="b-more__info-block">
											<div class="b-more__info-block-title"><?php the_sub_field('question') ?><a class="j-more" href="#"><span class="fa fa-angle-left"></span></a></div>
											<div class="b-more__info-block-inside j-inside">
												<p><?php the_sub_field('answer') ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</section><!--b-more-->
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>