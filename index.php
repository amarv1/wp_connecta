<?php get_header(); ?>

<div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
	<div class="container">
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="contacts.html" class="b-breadCumbs__page m-active">Kontakt</a>
	</div>
</div><!--b-breadCumbs-->

<section class="b-contacts s-shadow">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="b-contacts__form">
					<header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
						<h2 class="s-titleDet">Kontakt forma</h2>
					</header>
					<p class=" wow zoomInUp" data-wow-delay="0.5s">Upišite svoje informacije i pitanja u formi ispod, i naše osoblje će Vas kontaktirati u najkraćem roku.</p>
					<div id="success"></div>
					<form id="contactForm" novalidate class="s-form wow zoomInUp" data-wow-delay="0.5s">
						<div class="s-relative">
							<select name="user-topic" id="user-topic" class="m-select">
								<option value="Not select">Izaberite uslugu</option>
								<option value="Topic 1">Fleet management</option>
								<option value="Topic 2">Servis</option>
								<option value="Topic 3">Prodaja vozila</option>
								<option value="Topic 4">Najam vozila</option>
								<option value="Topic 4">Prodaja guma</option>
							</select>
							<span class="fa fa-caret-down"></span>
						</div>
						<input type="text" placeholder="IME" value="" name="user-name" id="user-name" />
						<input type="text" placeholder="EMAIL" value="" name="user-email" id="user-email" />
						<input type="text" placeholder="TELEFON" value="" name="user-phone" id="user-phone" />
						<textarea id="user-message" name="user-message" placeholder="PITANJE/INFORMACIJA"></textarea>
						<button type="submit" class="btn m-btn">POŠALJI<span class="fa fa-angle-right"></span></button>
					</form>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="b-contacts__address">
					<div class="b-contacts__address-hours">
						<h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">Radno vrijeme</h2>
						<div class="b-contacts__address-hours-main wow zoomInUp" data-wow-delay="0.5s">
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<h5>Kancelarija</h5>
									<p>Pon-Pet : 8:00 - 16:00 <br/>Vikend ne radimo</p>
								</div>
								<div class="col-md-6 col-xs-12">
									<h5>Servis</h5>
									<p>Pon-Sub : 8:00 - 17:00 <br/>Nedelju ne radimo</p>
								</div>
							</div>
						</div>
					</div>
					<div class="b-contacts__address-info">
						<h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">Kontakti</h2>
						<address class="b-contacts__address-info-main wow zoomInUp" data-wow-delay="0.5s">
							<div class="b-contacts__address-info-main-item">
								<span class="fa fa-home"></span>
								ADRESA
								<p>DŽEMALA BIJEDIĆA 172B, 71000 SARAJEVO</p>
							</div>
							<div class="b-contacts__address-info-main-item">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-xs-12">
										<span class="fa fa-phone"></span>
										TELEFON
									</div>
									<div class="col-lg-9 col-md-8 col-xs-12">
										<em> +387 33 778 000</em>
									</div>
								</div>
							</div>
							<div class="b-contacts__address-info-main-item">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-xs-12">
										<span class="fa fa-fax"></span>
										FAX
									</div>
									<div class="col-lg-9 col-md-8 col-xs-12">
										<em> +387 33 778 000</em>
									</div>
								</div>
							</div>
							<div class="b-contacts__address-info-main-item">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-xs-12">
										<span class="fa fa-envelope"></span>
										EMAIL
									</div>
									<div class="col-lg-9 col-md-8 col-xs-12">
										<em>info@connecta.ba</em>
									</div>
								</div>
							</div>
						</address>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--b-contacts-->

<div class="b-map wow zoomInUp google-map" data-wow-delay="0.5s">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.4516320804933!2d18.337257115570953!3d43.84646697911524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758cbd47d4fffc7%3A0xfa71e6e8a1eee85!2sConnecta!5e0!3m2!1sen!2sba!4v1511220942736" width="1920" height="400" frameborder="0" style="border:0"></iframe>
</div><!--b-map-->

<?php get_footer();
