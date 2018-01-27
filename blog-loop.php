<?php 
/*
 Template Name: Blog 2
*/
get_header(); ?>

<section class="b-pageHeader">
	<div class="container">
		
		<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
			<h3>Blog</h3>
		</div>
	</div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
	<div class="container">
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="about.html" class="b-breadCumbs__page m-active"><?php the_title() ?></a>
	</div>
</div><!--b-breadCumbs-->

<section class="b-blog s-shadow">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-xs-12">
				<div class="b-blog__posts">
					
					<?php 
						$query = new WP_Query( array( 'post_type' => 'post' ) );
						if($query->have_posts()) {
							while($query->have_posts()) {
								$query->the_post();
								get_template_part('template-parts/post-single', 'page');
							}
						}
					?>
					
					<?php //wp_pagenavi(); ?>
					<!--<div class="b-items__pagination-main text-center pull-right wow zoomInUp" data-wow-delay="0.3s">
						<a href="#" class="m-left"><span class="fa fa-angle-left"></span></a>
						<span class="m-active"><a href="#">1</a></span>
						<span><a href="#">2</a></span>
						<span><a href="#">3</a></span>
						<span><a href="#">4</a></span>
						<a href="#" class="m-right"><span class="fa fa-angle-right"></span></a>
					</div>-->
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section><!--b-blog-->

<?php get_footer(); ?>