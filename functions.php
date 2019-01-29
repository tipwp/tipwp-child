<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

function tipwp_child_theme_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
add_filter( 'locale_stylesheet_uri', 'tipwp_child_theme_locale_css' );
         

function tipwp_child_theme_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','magnific-popup','slick','tipwp-style' ) );
    }
add_action( 'wp_enqueue_scripts', 'tipwp_child_theme_css', 20 );

// END ENQUEUE PARENT ACTION
