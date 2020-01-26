<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.images/couple/img-1.jpg
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wedding_template
 */

get_header();
?>

	 <!-- start wedding-couple-section -->
        <section class="wedding-couple-section section-padding" id="couple">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gb groom">
                            <div class="img-holder wow fadeInLeftSlow">
                                <img src="<?php bloginfo('template_url'); ?>/images/couple/img-1.jpg" alt>
                            </div>
                            <div class="details">
                                <div class="details-inner">
                                    <h3>The groom</h3>
                                    <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    <span class="signature">Suntina</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gb bride">
                            <div class="details">
                                <div class="details-inner">
                                    <h3>The Bride</h3>
                                    <p>Hi I am suntina , dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    <span class="signature">Famico</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="img-holder wow fadeInRightSlow">
                                <img src="<?php bloginfo('template_url'); ?>/images/couple/img-2.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end wedding-couple-section -->


        <!-- start count-down-section -->
        <section class="count-down-section section-padding parallax" data-bg-image="<?php bloginfo('template_url'); ?>/images/countdown-bg.jpg" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <h2><span>We are waiting for.....</span> The adventure</h2>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="count-down-clock">
                            <div id="clock">

                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end count-down-section -->


        <!-- start story-section -->
        <section class="story-section section-padding" id="story">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our love story</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="story-timeline">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="story-text right-align-text">
                                        <h3>First meet</h3>
                                        <span class="date">Jan 12 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-holder">
                                        <img src="<?php bloginfo('template_url'); ?>/images/story/img-1.jpg" alt class="img img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-holder right-align-text story-slider">
                                        <img src="<?php bloginfo('template_url'); ?>/images/story/img-2.jpg" alt class="img img-fluid">
                                        <img src="<?php bloginfo('template_url'); ?>/images/story/img-3.jpg" alt class="img img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-holder">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text">
                                        <h3>First date</h3>
                                        <span class="date">Feb 14 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 text-holder right-heart">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text right-align-text">
                                        <h3>Proposal</h3>
                                        <span class="date">Apr 14 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-holder right-align-text story-slider">
                                        <img src="<?php bloginfo('template_url'); ?>/images/story/img-7.jpg" alt class="img img-fluid">
                                        <img src="<?php bloginfo('template_url'); ?>/images/story/img-5.jpg" alt class="img img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-holder video-holder">
                                        <img src="<?php bloginfo('template_url'); ?>/images/story/img-8.jpg" alt class="img img-fluid">
                                        <a href="https://www.youtube.com/embed/XSGBVzeBUbk?autoplay=1" data-type="iframe" class="video-play-btn">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-holder">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text">
                                        <h3>Enagagement</h3>
                                        <span class="date">Jul 14 2017</span>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end story-section -->


        <!-- start cta -->
        <section class="cta section-padding parallax" data-bg-image="<?php bloginfo('template_url'); ?>/images/cta-bg.jpg" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><span>We are going to...</span> Celebrate Our Love</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta -->



        <!-- start events-section -->
        <section class="events-section section-padding" id="events">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Wedding events</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="event">
                            <div class="img-holder">
                                <img src="<?php bloginfo('template_url'); ?>/images/events/img-1.jpg" alt class="img img-fluid">
                            </div>
                            <div class="details">
                                <h3>The reception</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> 32 big bro road, Chanpai, London.</li>
                                    <li><i class="fa fa-clock-o"></i> Nov 25 2017, 9AM - 5PM</li>
                                </ul>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                <a class="see-location-btn popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">
                                    See location <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="event">
                            <div class="img-holder">
                                <img src="<?php bloginfo('template_url'); ?>/images/events/img-2.jpg" alt class="img img-fluid">
                            </div>
                            <div class="details">
                                <h3>Wedding party</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> 32 big bro road, Chanpai, London.</li>
                                    <li><i class="fa fa-clock-o"></i> Nov 25 2017, 9AM - 5PM</li>
                                </ul>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                <a class="see-location-btn popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.0160484383277!2d144.99053291585201!3d-37.81309307975254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ef89a7e023%3A0xb1353055e38c1ab8!2sNew+York+Tomato+Cafe!5e0!3m2!1sbn!2sbd!4v1503743893919">
                                    See location <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end events-section -->


        <!-- start inportant-people-section -->
        <section class="inportant-people-section section-padding" id="people">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Groomsmen &amp; Bridesmaid</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="inportant-people-content">
                            <div class="tablist">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#groomsmen" data-toggle="tab" class="active show">Groomsmen</a>
                                    </li>
                                    <li>
                                        <a href="#bridesmaid" data-toggle="tab">Bridesmaid</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in grid-wrapper active show" id="groomsmen">
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/groomsmen/img-1.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/groomsmen/img-1.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Jhon Michel</h3>
                                            <span>Best man</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/groomsmen/img-2.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/groomsmen/img-2.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Chasmoos jhon</h3>
                                            <span>Best friden</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/groomsmen/img-3.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/groomsmen/img-3.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Kaiste pate</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/groomsmen/img-4.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/groomsmen/img-4.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Hatu Michel</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/groomsmen/img-5.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/groomsmen/img-5.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Michel doin</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/groomsmen/img-6.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/groomsmen/img-6.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Topper jone</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade grid-wrapper" id="bridesmaid">
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-1.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-1.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Rachel Li</h3>
                                            <span>Made of honor</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-2.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-2.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Male Vign</h3>
                                            <span>Best friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-3.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-3.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Jonny Mich</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-4.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-4.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Brodd Wid</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-5.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-5.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Nokshal bedi</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <a href="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-6.jpg" class="popup-image">
                                                <img src="<?php bloginfo('template_url'); ?>/images/bridesmaid/img-6.jpg" alt class="img img-fluid">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <h3>Holly Fie</h3>
                                            <span>Friend</span>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end inportant-people-section -->


        <!-- start gallery-section -->
        <section class="gallery-section section-padding" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our gallery</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col-sm-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <li><a data-filter=".wedding" href="#">Wedding</a></li>
                                <li><a data-filter=".ceremony" href="#">Ceremony</a></li>
                                <li><a data-filter=".party" href="#">Party</a></li>
                            </ul>
                        </div>

                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            <div class="grid wedding">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-1.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-1.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid wedding ceremony">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-2.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-2.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid ceremony eudcation">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-3.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-3.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid wedding party">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-4.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-4.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid ceremony">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-5.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-5.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid party">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-6.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-6.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid wedding">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-7.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-7.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid ceremony">
                               <!--  <a href="images/gallery/img-8.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-8.jpg" alt class="img img-fluid">
                                </a> -->
                                <a href="https://www.youtube.com/embed/XSGBVzeBUbk?autoplay=1" data-type="iframe" class="video-play-btn">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-8.jpg" alt class="img img-fluid">
                                    <i class="fa fa-play"></i>
                                </a>

                            </div>
                            <div class="grid ceremony">
                                <a href="<?php bloginfo('template_url'); ?>/images/gallery/img-9.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php bloginfo('template_url'); ?>/images/gallery/img-9.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gallery-section -->



        <!-- start rsvp-section -->
        <section class="rsvp-section section-padding parallax" data-bg-image="<?php bloginfo('template_url'); ?>/images/rsvp-bg.jpg" data-speed="7" id="rsvp">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Join our party</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col-sm-12">
                        <p>Please reserve before December 16th, 2017.</p>
                        <form id="rsvp-form" class="form validate-rsvp-form row" method="post">
							<?php echo do_shortcode( '[contact-form-7 id="2808" title="weddingfinal"]' ); ?>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end rsvp-section -->


        <!-- start getting-there-section -->
        <section class="getting-there-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Getting there</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col-md-6 col-sm-12">
                        <h3>Transportation</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h3>Accommodations</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end getting-there-section -->


        <!-- start gift-registration-section -->
        <section class="gift-registration-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Gift registration</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, cupiditate, repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic, deleniti maiores rem iste labore commodi perferendis cumque.repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic.</p>

                        <div class="gif-registration-slider">
                            <div class="register">
                                <img src="<?php bloginfo('template_url'); ?>/images/gift/img-1.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="<?php bloginfo('template_url'); ?>/images/gift/img-2.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="<?php bloginfo('template_url'); ?>/images/gift/img-3.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="<?php bloginfo('template_url'); ?>/images/gift/img-1.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="<?php bloginfo('template_url'); ?>/images/gift/img-2.jpg" alt class="img img-fluid">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gift-registration-section -->


<?php

get_footer();
