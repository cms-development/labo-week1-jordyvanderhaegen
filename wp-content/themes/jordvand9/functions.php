<?php
/**
 * Proper way to enqueue scripts and styles
 */
function jordvand9_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_register_style('Bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('Bootstrap');
    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'jordvand9' ),
        'id' => 'main-sidebar',
     ) );
}
add_action( 'wp_enqueue_scripts', 'jordvand9_enqueue_scripts' );
add_action( 'widgets_init', 'theme_slug_widgets_init');

?>