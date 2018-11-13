<?php
// Add scripts and stylesheets
function hugomitoire_scripts() {
    wp_enqueue_style( 'appStyles', get_template_directory_uri() . '/dist/css/style.min.css' );
    wp_enqueue_script( 'Js', get_template_directory_uri() . '/dist/js/all.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Swiper', get_template_directory_uri() . '/dis/js/all.js', array(), '4.4.2', true);
}
add_action( 'wp_enqueue_scripts', 'hugomitoire_scripts' );

// Theme Support
add_theme_support( 'title-tag' ); // Manages Dynamically Title Tags
add_theme_support( 'post-thumbnails' ); // Support Featured Images

// Register Main Menu
function register_my_menu() {
    register_nav_menu('main-menu',__( 'Navegador Primario' ));
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
    'description' => 'Se muestra en la sección FOOTER',
    'before_widget' => '<aside id="%1$s" class="widget col %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title text-warning">',
    'after_title' => '</h3>',
    ) );
    
    add_action( 'widgets_init', 'theme_slug_widgets_init' );
    function theme_slug_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Main Sidebar', 'hugomitoire' ),
            'id' => 'right-sidebar-1',
            'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        ) );
    }