<?php

/**
 * Plugin Name: 	Spectra
 * Theme Author: 	Mariusz Rek - Rascals Themes
 * Theme URI: 		http://rascals.eu/spectra
 * Author URI: 		http://rascals.eu
 * File:			customizer-css.php
 * =========================================================================================================================================
 *
 * @package spectra-plugin
 * @since 1.0.0
 */


$_GET = array_map('strip_tags', $_GET);

$wp_load = dirname(__FILE__);
 
for ($i = 0; $i < 8; $i++) {
	$wp_load = dirname($wp_load);
	if (file_exists($wp_load . '/wp-load.php')) break;
	if ($i == 7) { 
	    echo 'Error: wp-load.php doesn\'t exists';
		die();
	}
}

require_once($wp_load . '/wp-load.php');

global $spectra_opts;

header('Content-type: text/css');


/* ACCENT COLOR
 ---------------------------------------------------------------------*/
 $accent_color = get_theme_mod( 'accent_color', '#F45826' );
if ( '#F45826' !== $accent_color) : ?>

/* ACCENT COLOR
 ---------------------------------------------------------------------*/
	/* Selection */
	::-moz-selection { background: <?php echo esc_attr( $accent_color ) ?> }
 	::selection { background: <?php echo esc_attr( $accent_color ) ?> }
	
	/* Color */
   	a, a > *, 
   	.entry-meta a:hover,
   	.color,
   	#slidebar header a:hover,
   	#slidebar header a:hover span,
   	#slidemenu header a:hover,
	#slidemenu header a:hover span, 
   	.entry-title a:hover,
   	.entry-meta a:hover,
   	.blog-grid-items article .entry-grid-title a:hover,
   	.content-title a:hover,
	.countdown .seconds,
	#events-list .event-date, #events-list-anim .event-date,
	#events-list-anim h2, #events-list-anim h2 a:hover,
	.masonry-events .event-date,
	.masonry-events .event-brick:hover .event-title,
	.comment .author a:hover,
	.widget a:hover,
	.widget-title a:hover,
	.widget table#wp-calendar #next a:hover, .widget table#wp-calendar #prev a:hover,
	.widget_rss li a,
	.tweets-widget li a,
	.tweets-widget li .date a:hover,
	.tweets li .date a:hover, /* >> Start shortcodes color */
	.tweets-slider .slide .date a:hover,
	.single-track .track-title:hover,
	ol.tracklist .track-buttons a:hover
	{ color: <?php echo esc_attr( $accent_color ) ?> }

	/* Background color */
	.edit-link a:hover,
	.comments-link,
	.section-sign,
	.widget table .buy-tickets:hover,
	.comment .reply a,
	.widget button,
	.widget .button,
	.widget input[type="button"],
	.widget input[type="reset"],
	.widget input[type="submit"],
	.widget_tag_cloud .tagcloud a:hover,
	input[type="submit"], button, .btn, .widget .btn,
	.thumb-icon .icon,
	.badge.new,
	.steps .step .step-number, /* >> Start shortcodes color */
	.single-track .track-buttons a,
	.icon_column a:hover,
	#site .wpb_tour_next_prev_nav a
   	{ background-color: <?php echo esc_attr( $accent_color ) ?> }

   	/* Border color */
	#slidemenu ul li a:hover
	{ border-color: <?php echo esc_attr( $accent_color ) ?> }
   	
<?php 
endif;

/* HEADING COLORS
 ---------------------------------------------------------------------*/
$headings_color = get_theme_mod( 'headings_color', '#ffffff' );
if ( '#ffffff' !== $headings_color) : ?>
/* HEADING COLORS
 ---------------------------------------------------------------------*/
   	h1, h2, h3, h4, h5, h6 { color: <?php echo esc_attr( $headings_color ) ?> }
<?php 
endif;

/* BODY BACKGROUND COLOR
 ---------------------------------------------------------------------*/
$body_bg_color = get_theme_mod( 'body_bg_color', '#222222' );
if ( '#222222' !== $body_bg_color) : ?>
/* BODY BACKGROUND COLOR
 ---------------------------------------------------------------------*/
   	body { background-color: <?php echo esc_attr( $body_bg_color ) ?> }
<?php 
endif;

/* BODY COLOR
 ---------------------------------------------------------------------*/
$body_color = get_theme_mod( 'body_color', '#b1b1b1' );
if ( '#b1b1b1' !== $body_color) : ?>
/* BODY COLOR
 ---------------------------------------------------------------------*
   	body { color: <?php echo esc_attr( $body_color ) ?> }
<?php 
endif;