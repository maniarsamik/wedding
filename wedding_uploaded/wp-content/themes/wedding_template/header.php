<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding_template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page Title -->
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/favicon/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  id="home">

   <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span class="icon"><i class="fi flaticon-two"></i></span>
            </div>
        </div>
        <!-- end preloader -->


        <!-- strat music-box -->
        <div class="music-box">
            <button class="music-box-toggle-btn">
                <i class="fa fa-music"></i>
            </button>

            <div class="music-holder">
      <!--<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/102137206&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>-->
		<iframe width="560" height="315" src="https://www.youtube.com/embed/l2QtCgAvQC0?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
        </div>
        <!-- end music box -->


        <!-- start of hero -->
        <section class="hero">
            <div class="hero-slider hero-slider-s1">
                <div class="slide-item">
                    <img src="<?php bloginfo('template_url'); ?>/images/slider/slide-1.jpg" alt class="slider-bg">
                </div>

                <div class="slide-item">
                    <img src="<?php bloginfo('template_url'); ?>/images/slider/slide-2.jpg" alt class="slider-bg">
                </div>
                <div class="slide-item">
                    <img src="<?php bloginfo('template_url'); ?>/images/slider/slide-3.jpg" alt class="slider-bg">
                </div>
                <div class="slide-item">
                    <img src="<?php bloginfo('template_url'); ?>/images/slider/slide-4.jpg" alt class="slider-bg">
                </div>
                <div class="slide-item">
                    <img src="<?php bloginfo('template_url'); ?>/images/slider/slide-5.jpg" alt class="slider-bg">
                </div>
	        </div>
            <div class="wedding-announcement">
                <div class="couple-name-merried-text">
                    <h2 class="wow slideInUp" data-wow-duration="1s">Radha &amp; Krishna</h2>
                    <div class="married-text wow fadeIn" data-wow-delay="1s">
                        <h4 class="">
                        <span class=" wow fadeInUp" data-wow-delay="1.05s">W</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.10s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.15s">'</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.20s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.25s">e</span>
                        <span>&nbsp;</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.30s">g</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.35s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.40s">t</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.45s">t</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.50s">i</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.55s">n</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.60s">g</span>
                        <span>&nbsp;</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.65s">m</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.70s">a</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.75s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.80s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.85s">i</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.90s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.95s">d</span>

                        </h4>
                    </div>
                    <!-- <i class="fa fa-heart"></i> -->
                </div>

                <div class="save-the-date">
                    <h4>Save the date</h4>
                    <span class="date">25 DEC 2017</span>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

  <!-- Start header -->
  <header id="header" class="site-header header-style-1">
    <nav class="navigation navbar original navbar-expand-lg">
      <div class="container">
        <div class="navbar-header">
          <button class="open-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> </button>
          <div class="couple-logo">
            <h1><a href="#home">S <i class="fi flaticon-shape-1"></i> F</a></h1>
          </div>
        </div>
        <div class="navbar-collapse collapse navbar-right navigation-holder" id="navbar">
          <button class="close-navbar"><i class="fa fa-close"></i></button>
          <ul class="navbar-nav nav">
            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#couple">Couple</a></li>
            <li class="nav-item"><a class="nav-link" href="#story">Story</a></li>
            <li class="nav-item"><a class="nav-link" href="#events">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="#people">People</a></li>
            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="#rsvp">RSVP</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- end of header --> 
	