<?php 
/*
 Template Name: Single Post
 Template Post Type: post
*/
get_header(); ?>

<section class="b-pageHeader">
	<div class="container">
		<h1 class="wow zoomInLeft" data-wow-delay="0.7s">Blog</h1>
		
	</div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
	<div class="container wow zoomInUp" data-wow-delay="0.7s">
		<a href="" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="" class="b-breadCumbs__page">Blog</a><span class="fa fa-angle-right"></span><a href="" class="b-breadCumbs__page m-active"><?php single_post_title(); ?></a>
	</div>
</div><!--b-breadCumbs-->

<section class="b-article">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="b-article__main">
					<div class="b-blog__posts-one">
						<div class="row m-noBlockPadding">
							<div class="col-sm-11 col-xs-10">
								<div class="b-blog__posts-one-body">
									<header class="b-blog__posts-one-body-head wow zoomInUp" data-wow-delay="0.5s">
										<h2 class="s-titleDet"><?php single_post_title(); ?></h2>
									</header>
									<div class="b-blog__posts-one-body-main wow zoomInUp" data-wow-delay="0.5s">
										<div class="b-blog__posts-one-body-main-img">
											<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
											<!-- <ul class="bxslider enable-bx-slider" data-pager-custom="#bx-pager" data-mode="fade" data-pager-slide="false" data-mode-pager="horizontal" data-pager-qty="0">
												<li><img class="img-responsive" src="media/750x300/blogBig1.jpg" alt="jaguar" /></li>
											</ul> -->
											<!-- <div class="b-blog__posts-one-body-main-img-small" id="bx-pager">
												<a href="#" data-slide-index="0"><img src="media/90x65/smallBlog1.jpg" alt="car" /></a>
												<a href="#" data-slide-index="1"><img src="media/90x65/smallBlog2.jpg" alt="car" /></a>
												<a href="#" data-slide-index="2"><img src="media/90x65/smallBlog3.jpg" alt="car" /></a>
											</div> -->
										</div>
										<p><?php  setup_postdata($post);the_content(); ?></p>
									</div>
									<div class="b-blog__posts-one-body-tags wow zoomInUp" data-wow-delay="0.5s">
										<span class="fa fa-tags"></span>
										TAGS:
										<?php the_tags();?>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
</section><!--b-article-->

<?php get_footer(); ?>