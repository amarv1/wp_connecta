<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
	<div class="b-items__cars-one-img">
		<?php if(get_field('images')): ?>
			<img src="<?php echo get_field('images')[0]['url'] ?>" alt='dodge'/>
		<?php endif; ?>
		<?php if(get_field('highlight')): ?>
			<span class="b-items__cars-one-img-type m-premium"><?php the_field('highlight') ?></span>
		<?php endif; ?>
		<!-- <form action="/" method="post">
			<input type="checkbox" name="check1" id='check1'/>
			<label for="check1" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
		</form> -->
	</div>
	<div class="b-items__cars-one-info">
		<header class="b-items__cars-one-info-header s-lineDownLeft">
			<h2><?php the_title(); ?></h2>
			<span><?php the_field('price'); ?> KM</span>
		</header>
		<p>
			<?php the_field('description'); ?> 
		</p>
		<div class="b-items__cars-one-info-km">
			<span class="fa fa-tachometer"></span> <?php the_field('mileage'); ?> KM
		</div>
		<div class="b-items__cars-one-info-details">
			<div class="b-featured__item-links">
				<a href=""><?php the_field('year'); ?></a>
				<a href="">Polovno</a>
				<a href=""><?php the_field('engine_type'); ?></a>
				<a href=""><?php the_field('fuel_type'); ?></a>
			</div>
			<a href="" class="btn m-btn">Više<span class="fa fa-angle-right"></span></a>
		</div>
	</div>
</div>