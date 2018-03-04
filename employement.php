<?php
/*
 Template Name: Zaposlenja
*/
get_header(); ?>

<section class="b-pageHeader">
	<div class="container">
		<h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Zaposlenja</h1>
		<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.5s">
			<h3>Zaposlenja</h3>
		</div>
	</div>
</section><!--b-pageHeader-->

<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
	<div class="container">
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="contacts.html" class="b-breadCumbs__page m-active">Zaposlenja</a>
	</div>
</div><!--b-breadCumbs-->

<section class="b-contacts s-shadow">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="b-contacts__form">
					<header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
						<h2 class="s-titleDet">Zaposlenja</h2>
					</header>
					<p class=" wow zoomInUp" data-wow-delay="0.5s">Connecta d.o.o. je jedinstvena kompanija na bosanskohercegovačkom tržištu, specijalizirana za full fleet management tj. upravljanje voznim parkom, operativni leasing i dugoročni najam vozila, kao i prodaju teretnog programa Ford Cargo. Ukoliko ste spremni raditi u dinamičnom i stimulativnom radnom okruženju, nudimo Vam mogućnost da budete dio uspješnog tima i sudjelujete u razvoju kompanije.
Pošaljite nam svoj CV i Motivacijsko pismo putem E-maila, ili se možete prijaviti putem online formulara:</p>
					<div id="success"></div>
					<form id="contactForm" novalidate class="s-form wow zoomInUp" data-wow-delay="0.5s">
						<input type="text" placeholder="IME I PREZIME" value="" name="user-name" id="user-name" />
						<input type="text" placeholder="KONTAKT ADRESA" value="" name="address" id="address" />
						<input type="text" placeholder="TELEFON" value="" name="user-phone" id="user-phone" />
						<input type="text" placeholder="EMAIL" value="" name="user-email" id="user-email" />
						<div class="s-relative">
							<select name="user-topic" id="user-topic" class="m-select">
								<option value="Not select">Preferirani odjel</option>
								<option value="Topic 1">Rent-a-car</option>
								<option value="Topic 2">Ford Cargo</option>
								<option value="Topic 3">Prodaja</option>
								<option value="Topic 4">Administracija</option>
								<option value="Topic 4">Ostalo</option>
							</select>
							<span class="fa fa-caret-down"></span>
						</div>
						<textarea id="additional-info" name="additional-info" placeholder="DODATNI OPIS"></textarea>
						<a href="#" class="btn m-btn m-infoBtn" style="margin-top: 25px;">BIOGRAFIJA<span class="fa fa-angle-right"></span></a>
						<button type="submit" class="btn m-btn">POŠALJI<span class="fa fa-angle-right"></span></button>
					</form>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="b-contacts__address">
					
				</div>
			</div>
		</div>
	</div>
</section><!--b-contacts-->

<?php get_footer(); ?>
