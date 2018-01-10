<div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
	<div class="row m-noBlockPadding">
		<div class="col-xs-12">
			<div class="b-blog__posts-one-body">
				<header class="b-blog__posts-one-body-head">
					<h2 class="s-titleDet"><?php the_title(); ?></h2>
					<div class="b-blog__posts-one-body-head-notes">
						<!--
						<span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-user"></span>Admin</span>
						-->
						<span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-calendar-o"></span><?php the_date(); ?></span>
						<!--
						<span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-comment"></span>5 Komentara</span>
					-->
						<span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-tags"></span><?php the_tags();?></span>
					</div>
				</header>
				<div class="b-blog__posts-one-body-main">
					<div class="b-blog__posts-one-body-main-img">
						<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
					</div>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn m-btn m-readMore">PROČITAJ VIŠE<span class="fa fa-angle-right"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>