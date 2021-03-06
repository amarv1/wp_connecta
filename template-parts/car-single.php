<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
	<div class="b-items__cars-one-img" style="overflow:hidden">
		<?php if(get_field('images')): ?>
			<img src="<?php echo get_field('images')[0]['url'] ?>" alt='dodge' width="270"/>
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
			<h2><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>
			<span>
				<?php 
				if(get_field('show_price')=='Sa PDV-om') {
					echo(get_field('price_pdv') . ' KM <h6 style="display:inline;"> sa PDV</h6>');
				}
				elseif(get_field('show_price')=='EUR') {
					echo(get_field('price_eur') . ' EUR');
				}
				elseif(get_field('show_price')=='Bez PDV-a') {
					echo(get_field('price_no_pdv') . ' KM <h6 style="display:inline;"> bez PDV</h6>');
				} ?>
			</span>
		</header>
		<p>
			<?php the_field('description'); ?> 
		</p>
		<div class="b-items__cars-one-info-km">
			<span class="fa fa-tachometer"></span> <?php the_field('mileage'); ?> km
		</div>
		<div class="b-items__cars-one-info-details">
			<div class="b-featured__item-links">
				<?php if(get_field('year')) { echo('<a href="">'.get_field('year').'</a>'); } ?>
				<?php if(get_field('status')) { echo('<a href="">'.get_field('status').'</a>'); } ?>
				<?php if(get_field('engine_type')) { echo('<a href="">'.get_field('engine_type').'</a>'); } ?>
				<?php if(get_field('fuel_type')) { echo('<a href="">'.get_field('fuel_type').'</a>'); } ?>
			</div>
			<a href="<?php echo get_post_permalink(); ?>" class="btn m-btn">Više<span class="fa fa-angle-right"></span></a>
		</div>
	</div>
</div>