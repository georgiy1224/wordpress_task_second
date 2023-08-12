<?php



function theme_enqueue_styles() {

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



function avada_lang_setup() {

	$lang = get_stylesheet_directory() . '/languages';

	load_child_theme_textdomain( 'Avada', $lang );

}

add_action( 'after_setup_theme', 'avada_lang_setup' );

function footer_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Form Widget', 'textdomain' ),
        'id'            => 'footer-form-widget',
        'description'   => __( 'Widgets in this area will be shown in footer', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'footer_widgets_init' );

function certification_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Certification Widget', 'textdomain' ),
        'id'            => 'certification-widget',
        'description'   => __( 'Widgets in this area will be shown in footer', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'certification_widgets_init' );

function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Company Name Widget', 'textdomain' ),
        'id'            => 'company-name-widget',
        'description'   => __( 'Widgets in this area will be shown in header', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

function extracredit_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Extra Credit Widget', 'textdomain' ),
        'id'            => 'extracredit-widget',
        'description'   => __( 'Widgets in this area will be shown in header', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'extracredit_widgets_init' );

function idanfactor_credit_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Idanfactor Credit Widget', 'textdomain' ),
        'id'            => 'idanfactor-widget',
        'description'   => __( 'Widgets in this area will be shown in header', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'idanfactor_credit_widgets_init' );

function mobilecaller_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Mobile Caller Widget', 'textdomain' ),
        'id'            => 'mobilecaller-widget',
        'description'   => __( 'Widgets in this area will be shown for mobile', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'mobilecaller_widgets_init' );
