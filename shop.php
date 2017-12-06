<?php 
/*
 Template Name: Shop
*/
get_header(); ?>

<section class="b-pageHeader">
	<div class="container">
		<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Prodaja vozila</h1>
		<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
			<h3>Informacije i savjeti</h3>
		</div>
	</div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
	<div class="container">
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="about.html" class="b-breadCumbs__page m-active">Blog</a>
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
					<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__cars-one-img">
							<img src="media/270x230/dodge.jpg" alt='dodge'/>
							<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
							<span class="b-items__cars-one-img-type m-premium">Akcija</span>
							<form action="/" method="post">
								<input type="checkbox" name="check1" id='check1'/>
								<label for="check1" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
							</form>
						</div>
						<div class="b-items__cars-one-info">
							<header class="b-items__cars-one-info-header s-lineDownLeft">
								<h2>Chevrolet Silverado 1500</h2>
								<span>50 000KM</span>
							</header>
							<p>
								In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate, and the Silverado handles more like a big car than a big truck. 
							</p>
							<div class="b-items__cars-one-info-km">
								<span class="fa fa-tachometer"></span> 31,730 KM
							</div>
							<div class="b-items__cars-one-info-details">
								<div class="b-featured__item-links">
									<a href="#">Registrovano 2017</a>
									<a href="#">Polovno</a>
									<a href="#">Automatic</a>
									<a href="#">Dizel</a>
								</div>
								<a href="" class="btn m-btn">Više<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__cars-one-img">
							<img src="media/270x230/mersAmg.jpg" alt='jaguar'/>
							<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
							<span class="b-items__cars-one-img-type m-listing">Povoljno</span>
							<form action="/" method="post">
								<input type="checkbox" name="check3" id='check3'/>
								<label for="check3" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
							</form>
						</div>
						<div class="b-items__cars-one-info">
							<header class="b-items__cars-one-info-header s-lineDownLeft">
								<h2>Jaguar XF 2017</h2>
								<span>80 000KM</span>
							</header>
							<p>
								With curvy lines, gorgeous wood, and leather interiors—and performance—the XF combines all there is to love about Jaguars. The 240-hp, 2.0-liter turbocharged
							</p>
							<div class="b-items__cars-one-info-km">
								<span class="fa fa-tachometer"></span> 0,000 KM
							</div>
							<div class="b-items__cars-one-info-details">
								<div class="b-featured__item-links">
									<a href="#">Registrovano 2017</a>
									<a href="#">Polovno</a>
									<a href="#">Automatic</a>
									<a href="#">Dizel</a>
								</div>
								<a href="" class="btn m-btn">Više<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__cars-one-img">
							<img src="media/270x230/mersAmg.jpg" alt='jaguar'/>
							<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
							<span class="b-items__cars-one-img-type m-listing">Povoljno</span>
							<form action="/" method="post">
								<input type="checkbox" name="check3" id='check3'/>
								<label for="check3" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
							</form>
						</div>
						<div class="b-items__cars-one-info">
							<header class="b-items__cars-one-info-header s-lineDownLeft">
								<h2>Jaguar XF 2017</h2>
								<span>80 000KM</span>
							</header>
							<p>
								With curvy lines, gorgeous wood, and leather interiors—and performance—the XF combines all there is to love about Jaguars. The 240-hp, 2.0-liter turbocharged
							</p>
							<div class="b-items__cars-one-info-km">
								<span class="fa fa-tachometer"></span> 0,000 KM
							</div>
							<div class="b-items__cars-one-info-details">
								<div class="b-featured__item-links">
									<a href="#">Registrovano 2017</a>
									<a href="#">Polovno</a>
									<a href="#">Automatic</a>
									<a href="#">Dizel</a>
								</div>
								<a href="" class="btn m-btn">Više<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__cars-one-img">
							<img src="media/270x230/nissanList.jpg" alt="nissan" />
							<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
							<form action="/" method="post">
								<input type="checkbox" name="check5" id='check5'/>
								<label for="check5" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
							</form>
						</div>
						<div class="b-items__cars-one-info">
							<header class="b-items__cars-one-info-header s-lineDownLeft">
								<h2>2016 Nissan Maxima</h2>
								<span>40 000KM</span>
							</header>
							<p>
								Once billed as the "four-door sports car," the Maxima has grown bigger and heavier over the decades, detracting from its appeal. The current generation
							</p>
							<div class="b-items__cars-one-info-km">
								<span class="fa fa-tachometer"></span> 35,000 KM
							</div>
							<div class="b-items__cars-one-info-details">
								<div class="b-featured__item-links">
									<a href="#">Registrovano 2017</a>
									<a href="#">Polovno</a>
									<a href="#">Manual</a>
									<a href="#">Dizel</a>
								</div>
								<a href="" class="btn m-btn">Više<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
						<div class="b-items__cars-one-img">
							<img src="media/270x230/mersAmg.jpg" alt="amg" />
							<a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
							<form action="/" method="post">
								<input type="checkbox" name="check6" id='check6'/>
								<label for="check6" class="b-items__cars-one-img-check"><span class="fa fa-check"></span></label>
							</form>
						</div>
						<div class="b-items__cars-one-info">
							<header class="b-items__cars-one-info-header s-lineDownLeft">
								<h2>Mercedes-Benz GL63 AMG</h2>
								<span>120 000KM</span>
							</header>
							<p>
								The top-flight GL63 AMG is built for those who crave performance, luxury, and exclusivity 
								— you know; the                     finer things in life. AMG works its magic on the GL
							</p>
							<div class="b-items__cars-one-info-km">
								<span class="fa fa-tachometer"></span> 35,000 KM
							</div>
							<div class="b-items__cars-one-info-details">
								<div class="b-featured__item-links">
									<a href="#">Registrovano 2017</a>
									<a href="#">Polovno</a>
									<a href="#">Manual</a>
									<a href="#">Dizel</a>
								</div>
								<a href="" class="btn m-btn">Više<span class="fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					
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