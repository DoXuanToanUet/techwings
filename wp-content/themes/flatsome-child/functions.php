<?php
// Add custom Theme Functions here
//active theme h
update_option( 'flatsome_wup_purchase_code', 'makhichhoatladay' );
update_option( 'flatsome_wup_supported_until', '01.01.2050' );
update_option( 'flatsome_wup_buyer', 'jhteam' );
add_action( 'init', 'hide_notice' );
function hide_notice() {
remove_action( 'admin_notices', 'flatsome_maintenance_admin_notice' );
}

//Remove noindex of woocommerce
add_action( 'init', 'remove_wc_page_noindex_by_thangdangblog_com' );
function remove_wc_page_noindex_by_thangdangblog_com(){
	remove_action( 'wp_head', 'wc_page_noindex' );
}


function add_theme_scripts()
{
    $version = '1.0';
//	wp_enqueue_style( 'FontAwesome', get_template_directory_uri() . '/assets/plugins/linearIcon/linearIcon.css', array(), $version, 'all' );
    // wp_enqueue_style('devFontAwe', get_stylesheet_directory_uri() . '/assets/plugins/fontAwesome/font-awesome.min.css', array(), $version, 'all');
    wp_enqueue_style('devMainCss', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), $version, 'all');
    // wp_enqueue_style('devSwiperCss', get_stylesheet_directory_uri() . '/assets/plugins/swiper/swiper.min.css', array(), $version, 'all');

    // wp_enqueue_script('devSwiperJs', get_stylesheet_directory_uri() . '/assets/plugins/swiper/swiper.min.js', array(), $version, true);
    wp_enqueue_script('devMainJS', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), $version, true);

    // wp_enqueue_style('FancyboxCss', get_stylesheet_directory_uri() . '/assets/plugins/fancybox/fancybox.css', array(), $version, 'all');
    // wp_enqueue_script('FancyboxJs', get_stylesheet_directory_uri() . '/assets/plugins/fancybox/fancybox.min.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

