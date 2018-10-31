<?php
// Add scripts and stylesheets
function hugomitoire_scripts() {
    wp_enqueue_style( 'appStyles', get_template_directory_uri() . '/dist/css/style.min.css' );
    wp_enqueue_script( 'appJs', get_template_directory_uri() . '/dist/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'hugomitoire_scripts' );

// Theme Support
add_theme_support( 'title-tag' ); // Manages Dynamically Title Tags
add_theme_support( 'post-thumbnails' ); // Support Featured Images

// Register Main Menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

// Social Menu Customizer
require_once get_template_directory() . '/inc/custom-post-creator.php';

// Social Menu Customizer
require_once get_template_directory() . '/inc/social-menu-customizer.php';

// NavWalker Bootstrap
// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Require Footer Widgets
register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget col %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title text-warning">',
    'after_title' => '</h3>',
    ) );