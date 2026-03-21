<?php

function ds_theme_enqueue_assets() {

    // Main stylesheet
    wp_enqueue_style(
        'ds-theme-style',
        get_stylesheet_uri(),
        array(),
        '1.0',
        'all'
    );

    // Extra stylesheet
    wp_enqueue_style(
        'ds-theme-extra-style',
        get_template_directory_uri() . '/css/extra.css',
        array('ds-theme-style'),
        '1.0',
        'all'
    );

    // Main JavaScript file
    wp_enqueue_script(
        'ds-theme-main-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        '1.0',
        true
    );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    };
}

add_action( 'wp_enqueue_scripts', 'ds_theme_enqueue_assets' );

function ds_setup(){
    add_theme_support('menus');

    //register primary menu //
    register_nav_menu('primary','Primary Menu');
}

add_action('init','ds_setup')
?>