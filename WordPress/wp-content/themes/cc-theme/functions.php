<?php
//remove visual editor
// add_filter( 'user_can_richedit' , '__return_false', 50);


//Title Support
function cc_theme_support_title(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'wp-block-styles' );
}

add_action('after_setup_theme', 'cc_theme_support_title');

function cc_register_styles(){

    $version = wp_get_theme()->get('version');
    wp_enqueue_style('cc-styles', get_template_directory_uri() . "/style.css", array('img-slider-styles'), $version, 'all');
    wp_enqueue_style('img-slider-styles', "https://unpkg.com/swiper@7/swiper-bundle.min.css", array(), $version, 'all');
    wp_enqueue_style('google-font', "https://fonts.googleapis.com/css?family=Oswald&display=swap", array(), $version, 'all');
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), $version, 'all');
}

add_action( 'wp_enqueue_scripts', 'cc_register_styles');

function cc_register_scripts(){

    $version = wp_get_theme()->get('version');
    wp_enqueue_script('cc-scripts', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}

add_action( 'wp_enqueue_scripts', 'cc_register_scripts');

register_nav_menu( 'siteNav', 'mainMenu');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );
	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	$content = preg_replace( '~\s?<p>(\s| )+</p>\s?~', '', $content );
	return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
    }
    add_filter('mime_types', 'webp_upload_mimes');

?> 