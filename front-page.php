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
                                <a class="btn m-btn" href="detail.html">Detaljnije<span class="fa fa-angle-right"></span></a>
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
                <div class="row wow zoomInLeft" data-wow-delay="0.3s" data-wow-offset="100">
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
                                <div class="col-xs-12 m-padding">
                                    <div class="b-welcome__services-auto wow zoomInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInLeft;">
                                        <div class="b-welcome__services-img m-auto">
                                            <span class="fa fa-cab"></span>
                                        </div>
                                        <h3>PRODAJA VOZILA</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-right visible-md visible-lg">
                                    <div class="m-circle wow slideInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInRight;">

                                    </div>
                                </div>
                                <div class="col-xs-12 m-padding">
                                    <div class="b-welcome__services-buying wow zoomInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInLeft;">
                                        <div class="b-welcome__services-img m-buying">
                                            <span class="fa fa-book"></span>
                                        </div>
                                        <h3>PRODAJA GUMA</h3>
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
                                            <span class="fa fa-male"></span>
                                        </div>
                                        <h3>NAJAM VOZILA</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-left visible-md visible-lg">
                                    <div class="m-circle pull-right wow slideInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInLeft;">

                                    </div>
                                </div>
                                <div class="col-xs-12 m-padding">
                                    <div class="b-welcome__services-support wow zoomInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInRight;">
                                        <div class="b-welcome__services-img m-support">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45px" height="45px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                                                        <g>
                                                            <path d="M257.938,336.072c0,17.355-14.068,31.424-31.423,31.424c-17.354,0-31.422-14.068-31.422-31.424
                                                                c0-17.354,14.068-31.423,31.422-31.423C243.87,304.65,257.938,318.719,257.938,336.072z M385.485,304.65
                                                                c-17.354,0-31.423,14.068-31.423,31.424c0,17.354,14.069,31.422,31.423,31.422c17.354,0,31.424-14.068,31.424-31.422
                                                                C416.908,318.719,402.84,304.65,385.485,304.65z M612,318.557v59.719c0,29.982-24.305,54.287-54.288,54.287h-39.394
                                                                C479.283,540.947,379.604,606.412,306,606.412s-173.283-65.465-212.318-173.85H54.288C24.305,432.562,0,408.258,0,378.275v-59.719
                                                                c0-20.631,11.511-38.573,28.46-47.758c0.569-84.785,25.28-151.002,73.553-196.779C149.895,28.613,218.526,5.588,306,5.588
                                                                c87.474,0,156.105,23.025,203.987,68.43c48.272,45.777,72.982,111.995,73.553,196.779C600.489,279.983,612,297.925,612,318.557z
                                                                M497.099,336.271c0-13.969-0.715-27.094-1.771-39.812c-24.093-22.043-67.832-38.769-123.033-44.984
                                                                c7.248,8.15,13.509,18.871,17.306,32.983c-33.812-26.637-100.181-20.297-150.382-79.905c-2.878-3.329-5.367-6.51-7.519-9.417
                                                                c-0.025-0.035-0.053-0.062-0.078-0.096l0.006,0.002c-8.931-12.078-11.976-19.262-12.146-11.31
                                                                c-1.473,68.513-50.034,121.925-103.958,129.46c-0.341,7.535-0.62,15.143-0.62,23.08c0,28.959,4.729,55.352,12.769,79.137
                                                                c30.29,36.537,80.312,46.854,124.586,49.59c8.219-13.076,26.66-22.205,48.136-22.205c29.117,0,52.72,16.754,52.72,37.424
                                                                c0,20.668-23.604,37.422-52.72,37.422c-22.397,0-41.483-9.93-49.122-23.912c-30.943-1.799-64.959-7.074-95.276-21.391
                                                                C198.631,535.18,264.725,568.41,306,568.41C370.859,568.41,497.099,486.475,497.099,336.271z M550.855,264.269
                                                                C547.4,116.318,462.951,38.162,306,38.162S64.601,116.318,61.145,264.269h20.887c7.637-49.867,23.778-90.878,48.285-122.412
                                                                C169.37,91.609,228.478,66.13,306,66.13c77.522,0,136.63,25.479,175.685,75.727c24.505,31.533,40.647,72.545,48.284,122.412
                                                                H550.855L550.855,264.269z"></path>
                                                        </g>
                                                    </svg>
                                        </div>
                                        <h3>FLEET MANAGEMENT</h3>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda5_asset.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    38 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    150 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian Authmn</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian summer</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    250 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian spring</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian winter</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda5_asset.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    38 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda3_asset.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    30 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/mazda_asset.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    45 000 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Mazda 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian 3</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    150 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian Authmn</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                    <span class="m-leasing">Akcija</span>
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian summer</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre5_edited.jpg" alt="mers" width="186" />
                                    <span class="m-premium">Novo</span>
                                </a>
                                <div class="b-featured__item-price">
                                    250 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian spring</a></h5>
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
                                <a href="detail.html">
                                    <img src="media/186x113/tyre1_edited.jpg" alt="mers" width="186" />
                                </a>
                                <div class="b-featured__item-price">
                                    200 KM
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="detail.html">Nokian winter</a></h5>
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
