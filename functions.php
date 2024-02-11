<?php
function myespt_support_include() {
    load_theme_textdomain("ifmyespts");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "myespt_support_include");

// Theme CSS and JS calling
function myespt_css_js() {
    // CSS
    wp_enqueue_style('wpcore', get_template_directory_uri().'/assets/css/wp-core.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.3.1', 'all');
    wp_enqueue_style('mmenu', get_template_directory_uri().'/assets/css/mmenu-light.css', array(), null, 'all');
    wp_enqueue_style('sMain-style', get_template_directory_uri().'/assets/css/style.css', array(), null, 'all');
    wp_enqueue_style('myespt-style', get_stylesheet_uri());
    
    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.3.1', true);
    wp_enqueue_script('mmenu-light', get_template_directory_uri().'/assets/js/mmenu-light.js', array('jquery'), null, true);
    wp_enqueue_script('mainJS', get_template_directory_uri().'/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'myespt_css_js');

// Include files
require_once 'inc/acf.php';
require_once 'inc/post-type.php';
require_once 'inc/fc-sec-option.php';
require_once 'inc/shortcode.php';

// Menu Register
register_nav_menu('main_menu', __('Main Menu', 'ifmyespts'));
register_nav_menu('footer_menu_m', __('Footer Menu Main', 'ifmyespts'));
register_nav_menu('footer_menu_b', __('Footer Menu Bottom', 'ifmyespts'));

// Sidebar widgets
if(function_exists('register_sidebar')){
    register_sidebar( array(
        'name'          => esc_html__( 'Post Category Sidebar', 'ifmyespts' ),
        'id'            => 'myespt_ost_sidebar', // Use the same name as in sidebar.php
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'ifmyespts' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title mb-3">',
        'after_title'   => '</h4>',
    ) );
}