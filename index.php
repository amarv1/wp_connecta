<?php get_header(); ?>

<?php if( have_rows('slider') ): ?>
    <section class="b-slider">
        <div id="carousel" class="slide carousel carousel-fade">
            <div class="carousel-inner">
                <?php while( have_rows('slider') ) : the_row();  ?>
                    <div class="item <?php if(get_row_index()==1) {echo 'active';} ?>">
                        <img src="<?php the_sub_field('slide_image') ?>" alt="sliderImg" />
                        <div class="container">
                            <div class="carousel-caption b-slider__info">
                                <h3><?php the_sub_field('pretitle') ?></h3>
                                <h2><?php the_sub_field('title') ?></h2>
                                <p><?php the_sub_field('subtitle') ?></p>
                                <a class="btn m-btn" href="<?php echo get_sub_field('link') ?>">Detaljnije<span class="fa fa-angle-right"></span></a>
                            </div>
                            <div class="slider-overlay"></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <a class="carousel-control right" href="#carousel" data-slide="next">
                <span class="fa fa-angle-right m-control-right"></span>
            </a>
            <a class="carousel-control left" href="#carousel" data-slide="prev">
                <span class="fa fa-angle-left m-control-left"></span>
            </a>
        </div>
    </section><!--b-slider-->
<?php endif; ?>

<?php if( have_rows('newsletter') ): ?>
    <?php while( have_rows('newsletter') ) : the_row();  ?>
        <section class="b-contact">
            <div class="container">
                <div class="row" data-wow-delay="0.3s">
                    <div class="col-xs-4">
                        <div class="b-contact-title">
                            <h5><?php the_sub_field('title') ?></h5><br />
                            <h2><?php the_sub_field('pretitle') ?></h2>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="b-contact__form">
                            <p><?php the_sub_field('description') ?></p>
                            <form action="/" method="POST">
                                <div><span class="fa fa-user"></span><input type="text" name="user" value="" placeholder="Ime i prezime" /></div>
                                <div><span class="fa fa-envelope"></span><input type="text" name="email" value="" placeholder="Email" /></div>
                                <button type="submit"><span class="fa fa-angle-right"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--b-contact-->
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('introduction') ): ?>
    <?php while( have_rows('introduction') ) : the_row();  ?>
        <section class="b-welcome" style="background-color: white;">
            <div class="container" style="background-color: white;">
                <div class="row">
                    <div class="b-welcome__services">
                        <div class="col-md-3 col-xs-12">
                            <div class="row">
                                <?php 
                                    $icon_boxes=get_sub_field('icon_boxes')[0];
                                    $icon_box_icon_1 = $icon_boxes['icon1'];
                                    $icon_box_text_1 = $icon_boxes['text1'];
                                    $icon_box_link_1 = $icon_boxes['link1'];
                                    $icon_box_icon_2 = $icon_boxes['icon2'];
                                    $icon_box_text_2 = $icon_boxes['text2'];
                                    $icon_box_link_2 = $icon_boxes['link2'];
                                    $icon_box_icon_3 = $icon_boxes['icon3'];
                                    $icon_box_text_3 = $icon_boxes['text3'];
                                    $icon_box_link_3 = $icon_boxes['link3'];
                                    $icon_box_icon_4 = $icon_boxes['icon4'];
                                    $icon_box_text_4 = $icon_boxes['text4'];
                                    $icon_box_link_4 = $icon_boxes['link4'];
                                ?>
                                <div class="col-xs-12 m-padding">
                                    <div class="b-welcome__services-auto wow zoomInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInLeft;">
                                        <div class="b-welcome__services-img m-auto">
                                            <a href="<?php echo $icon_box_link_1 ?>"><span class="fa <?php echo $icon_box_icon_1 ?>"></span></a>
                                        </div>
                                        <h3><?php echo $icon_box_text_1 ?></h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-right visible-md visible-lg">
                                    <div class="m-circle wow slideInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInRight;">

                                    </div>
                                </div>
                                <div class="col-xs-12 m-padding">
                                    <div class="b-welcome__services-buying wow zoomInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInLeft;">
                                        <div class="b-welcome__services-img m-buying">
                                            <a href="<?php echo $icon_box_link_2 ?>"><span class="fa <?php echo $icon_box_icon_2 ?>"></span></a>
                                        </div>
                                        <h3><?php echo $icon_box_text_2 ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="b-welcome__text wow zoomInUp" data-wow-delay="0.3s" style="visibility: visible;animation-delay: 0.3s;animation-name: zoomInUp;color: #444;">
                            <h2><?php the_sub_field('pretitle') ?></h2>
                            <h3><?php the_sub_field('title') ?></h3>
                            <?php the_sub_field('text') ?>
                        </div>
                    </div>
                    <div class="b-welcome__services">
                        <div class="col-md-3 col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 m-padding">
                                    <div class="b-welcome__services-trade wow zoomInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInRight;">
                                        <div class="b-welcome__services-img m-trade">
                                            <a href="<?php echo $icon_box_link_3 ?>"><span class="fa <?php echo $icon_box_icon_3 ?>"></span></a>
                                        </div>
                                        <h3><?php echo $icon_box_text_3 ?></h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-left visible-md visible-lg">
                                    <div class="m-circle pull-right wow slideInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInLeft;">

                                    </div>
                                </div>
                                <div class="col-xs-12 m-padding">
                                    <div class="b-welcome__services-support wow zoomInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInRight;">
                                        <div class="b-welcome__services-img m-support">
                                            <a href="<?php echo $icon_box_link_4 ?>"><span class="fa <?php echo $icon_box_icon_4 ?>"></span></a>
                                        </div>
                                        <h3><?php echo $icon_box_text_4 ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('appointment') ): ?>
    <?php while( have_rows('appointment') ) : the_row();  ?>
        <section class="b-asks">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="b-asks__first wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                            <div class="b-asks__first-circle">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="b-asks__first-info">
                                <h2><?php the_sub_field('title_1') ?></h2>
                                <p><?php the_sub_field('description_1') ?></p>
                            </div>
                            <div class="b-asks__first-arrow">
                                <a href="listingsTwo.html"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
                        <div class="b-asks__first m-second wow zoomInRight" data-wow-delay="0.3s" data-wow-offset="100">
                            <div class="b-asks__first-circle">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="b-asks__first-info">
                                <h2><?php the_sub_field('title_2') ?></h2>
                                <p><?php the_sub_field('description_2') ?></p>
                            </div>
                            <div class="b-asks__first-arrow">
                                <a href="listingsTwo.html"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p class="b-asks__call wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100"><?php the_sub_field('subsection_note') ?></p>
                    </div>
                </div>
            </div>
        </section><!--b-asks-->
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('featured_sales') ): ?>
    <?php while( have_rows('featured_sales') ) : the_row();  ?>
        <?php if(get_sub_field('type_of_items')=='Cars'): ?>
            <section class="b-featured">
                <div class="container">
                    <h2 class="s-title wow zoomInUp" data-wow-delay="0.3s"><?php the_sub_field('title') ?></h2>
                    <div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">

                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda5_asset.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    38 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--b-featured-->
        <?php elseif(get_sub_field('type_of_items')=='Tyres'): ?>
            <section class="b-featured">
                <div class="container">
                    <h2 class="s-title wow bounceInRight" data-wow-delay="0.3s">Nokian gume</h2>
                    <div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    150 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian Authmn</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian summer</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    250 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian spring</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian winter</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--b-featured-->
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('statistics') ): ?>
    <section class="b-count">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="b-count__item">
                                <div class="b-count__item-circle">
                                    <span class="fa fa-car"></span>
                                </div>
                                <div class="chart" data-percent="260">
                                    <h2  class="percent">260</h2>
                                </div>
                                <h5>vozila na lageru</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="b-count__item">
                                <div class="b-count__item-circle">
                                    <span class="fa fa-users"></span>
                                </div>
                                <div class="chart" data-percent="25">
                                    <h2  class="percent">25</h2>
                                </div>
                                <h5>vrsta guma</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="b-count__item">
                                <div class="b-count__item-circle">
                                    <span class="fa fa-building-o"></span>
                                </div>
                                <div class="chart" data-percent="150">
                                    <h2  class="percent">150</h2>
                                </div>
                                <h5>drugih stvari</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="b-count__item j-last">
                                <div class="b-count__item-circle">
                                    <span class="fa fa-suitcase"></span>
                                </div>
                                <div class="chart" data-percent="547">
                                    <h2  class="percent">547</h2>
                                </div>
                                <h5>trecih stvari</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--b-count-->
<?php endif; ?>

<?php if( have_rows('featured_sales') ): ?>
    <?php while( have_rows('featured_sales') ) : the_row();  ?>
        <?php if(get_sub_field('type_of_items')=='Cars'): ?>
            <section class="b-featured">
                <div class="container">
                    <h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">Mazda program</h2>
                    <div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda5_asset.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    38 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Mazda 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>0,000 KM</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Siva</a>
                                    <a href="#">Dizel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--b-featured-->
        <?php elseif(get_sub_field('type_of_items')=='Tyres'): ?>
            <section class="b-featured">
                <div class="container">
                    <h2 class="s-title wow bounceInRight" data-wow-delay="0.3s">Nokian gume</h2>
                    <div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian 3</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    150 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian Authmn</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian summer</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    250 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian spring</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="b-featured__item wow bounceInRight" data-wow-delay="0.3s" data-wow-offset="150">
                                <a href="">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="">Nokian winter</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>210 km/h</div>
                                <div class="b-featured__item-links">
                                    <a href="#">Novo</a>
                                    <a href="#">2017</a>
                                    <a href="#">195/65R15</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--b-featured-->
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
