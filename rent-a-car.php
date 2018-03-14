<?php 
/*
 Template Name: Rent a Car
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
		<a href="home.html" class="b-breadCumbs__page">Početna</a><span class="fa fa-angle-right"></span><a href="about.html" class="b-breadCumbs__page m-active"><?php the_title() ?></a>
	</div>
</div><!--b-breadCumbs-->

<div class="b-infoBar">
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-4 col-xs-12">
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
			</div> -->
			<div class="col-md-offset-4 col-md-8 col-xs-12">
				<div class="b-infoBar__select">
					<form method="post" action="/">
						<!-- <div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
							<span class="b-infoBar__select-one-title">Tip liste</span>
							<a href="listingsTwo.html" class="m-list m-active"><span class="fa fa-list"></span></a>
							<a href="listTable.html" class="m-table"><span class="fa fa-table"></span></a>
						</div> -->
						<!--<div class="b-infoBar__select-one wow zoomInUp" data-wow-delay="0.5s">
							<span class="b-infoBar__select-one-title">Prikaži na stranici</span>
							<select name="select1" class="m-select">
								<option value="10" selected="">10 vozila</option>
								<option value="20">20 vozila</option>
								<option value="30">30 vozila</option>
							</select>
							<span class="fa fa-caret-down"></span>
						</div>-->
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




<section class="rent s-shadow">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="b-contacts__form">
                    <header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
                        <h2 class="s-titleDet">Rent A Car</h2>
                    </header>
                    <p class=" wow zoomInUp" data-wow-delay="0.5s">Vrhunski kvalitet i profesionalnost su prateći elementi svih usluga koje pružamo. Naša rent-a-car
                        vozila pripadaju porodicama svjetski poznatih brandova - Mazda, Volkswagen, Audi, Ford i Land
                        Rover. Također, Vaše rent-a-car iskustvo smo upotpunili vrhunskim kvalitetom usluga i maksimalnom
                        prilagodljivošću Vašim potrebama.
                        </br>
                        </br>
                        Obratite nam se s povjerenjem.
                        </br>
                        </br>
                        <strong>Radimo sa zadovoljstvom, da biste Vi vozili sa užitkom.</strong>
                    </p>
                    <div id="success"></div>

                </div>
            </div>
            <div class="col-xs-12 col-md-6 first">
                <div class="b-contacts__address">
                    <div class="b-contacts__address-hours">
                        <h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">ONLINE REZERVACIJA - rent-a-car</h2>
                        <form id="contactForm"  class="s-form">
                            <div class="s-relative">
                                <label>Lokacija i vrijeme preuzimanja vozila:</label>
                                <select name="user-topic" id="location" class="m-select required" required>
                                    <option value="0">Izaberite lokaciju</option>
                                    <option value="Topic 1">Sarajevo, Džemala Bijedića 172b</option>
                                </select>
                                <span class="fa fa-caret-down"></span>
                            </div>
                            <label class="location-dng">Lokacija mora biti izabrana</label>
                            <div class="pick-time">
                                <input type="text" placeholder="Datum" value="" name="date" id="date" />
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <select name="hours" id="hours" class="m-select s-relative">
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                </select>
                                <select name="minutes" id="minutes" class="m-select s-relative">
                                    <option value="00">00</option>
                                    <option value="30">30</option>
                                </select>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>

                            <div class="s-relative">
                                <label>Lokacija i vrijeme vraćanja vozila:</label>
                                <select name="user-topic" id="location2" class="m-select">
                                    <option value="0">Izaberite lokaciju</option>
                                    <option value="Topic 1">Sarajevo, Džemala Bijedića 172b</option>
                                </select>
                                <span class="fa fa-caret-down"></span>
                            </div>
                            <label class="location2-dng">Lokacija mora biti izabrana</label>
                            <div class="pick-time">
                                <input type="text" placeholder="Datum" value="" name="date" id="date1" />
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <select name="hours" id="hours" class="m-select s-relative">
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                </select>
                                <select name="minutes" id="minutes" class="m-select s-relative">
                                    <option value="00">00</option>
                                    <option value="30">30</option>
                                </select>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>

                            <div class="s-relative">
                                <label>Izbor vozila:</label>
                                <select name="user-topic" id="klass" class="m-select" required>
                                    <option value="0">Izaberite klasu vozila</option>
                                    <option value="1">Mala putnička/osobna vozila</option>
                                    <option value="2">Compact putnička/osobna vozila</option>
                                    <option value="3">Medium putnička/osobna vozila</option>
                                    <option value="4">Monovolumen (5-9 sjed)</option>
                                    <option value="5">Dostavna/teretna vozila</option>
                                    <option value="6">SUVs</option>
                                    <option value="7">OffRoad (terenska) vozila</option>
                                    <option value="8">Premium putnička/osobna vozila</option>
                                    <option value="9">Premium SUVs</option>
                                    <option value="10">HighLux SUVs</option>
                                </select>
                                <span class="fa fa-caret-down"></span>
                                
                            </div>
                            <label class="klass-dng">Vozilo mora biti izabrano</label></br>
                            <div class="s-relative grupe">
                                    
                                    <select name="grupe" id="group" class="m-select" required>
                                        <option value="0">Izaberite grupu vozila</option>
                                        <option value="1">Fiesta</option>
                                        <option value="2">Mondeo</option>
                                        <option value="3">Mazda</option>
                                    </select>
                                    <span class="fa fa-caret-down"></span>
                                    
                                </div>
                                <label class="grupa-dng">Grupa mora biti izabrana</label></br>
                            <label>Dodatna oprema i usluge:</label>
                            <div class="checkboxes">
                                <div class="check">
                                    <input type="checkbox">
                                    <label>Dječija autosjedalica</label>
                                </div>
                                <div class="check">
                                    <input type="checkbox">
                                    <label>Krovni kofer</label>
                                </div>
                                <div class="check">
                                    <input type="checkbox">
                                    <label>Krovni nosači</label>
                                </div>
                                <div class="check">
                                    <input type="checkbox">
                                    <label>Nosači za biciklo</label>
                                </div>
                                <div class="check">
                                    <input type="checkbox">
                                    <label>Nosači za skije</label>
                                </div>
                                <div class="check">
                                    <input type="checkbox">
                                    <label>Vozač</label>
                                </div>
                            </div>

                            <textarea id="user-message" name="user-message" placeholder="Napomena"></textarea>
                            <div class="buttons">
                                <a class="btn m-btn next link-btn">Naprijed
                                    <span class="fa fa-angle-right"></span>
                                </a>

                                <button class="btn m-btn link-btn">O vozilima
                                    <span class="fa fa-angle-right"></span>
                                </button>

                                <button class="btn m-btn link-btn">Cijenik Rent A Car usluga
                                    <span class="fa fa-angle-right"></span>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-md-6 second">
                    <div class="b-contacts__address">
                        <div class="b-contacts__address-hours">
                            <h2 class="s-titleDet wow zoomInUp" data-wow-delay="0.5s">ONLINE REZERVACIJA - rent-a-car</h2>
                            <form id="contactForm2" novalidate class="s-form">
                                <label>Unesite lične podatke:</label>
                                <input type="text" placeholder="IME" value="" name="username" id="user-name" required/>
                                <input type="text" placeholder="PREZIME" value="" name="userlastname" id="user-lastname" required/>
                                <input type="text" placeholder="KOMPANIJA" value="" name="user-company" id="user-company" />
                                <input type="text" placeholder="TELEFON" value="" name="userphone" id="user-phone" required/>
                                <input type="email" placeholder="EMAIL" value="" name="useremail" id="user-email" required/>      
                                <div class="buttons">
                                    <a class="btn m-btn pervious link-btn">nazad
                                        <span class="fa fa-angle-left"></span>
                                    </a>

                                    <button type="submit" class="btn m-btn link-btn">pošalji
                                            <span class="fa fa-angle-right"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!--b-contacts-->


<?php get_footer(); ?>