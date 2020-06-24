<?php
define('JU_DEVMODE', true);
//////////////HOOKS for STYLES//////////////
function ju_eneque()
{
    $uri = get_theme_file_uri();
    $ver = JU_DEVMODE ? time() : false;

    wp_register_style('ju_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver);
    wp_register_style('ju_bootstrap', $uri . '/Assets/css/bootstrap.css', [], $ver);
    wp_register_style('ju_style', $uri . '/Assets/css/style.css', [], $ver);
    wp_register_style('ju_dark', $uri . '/Assets/css/dark.css', [], $ver);
    wp_register_style('ju_font_icons', $uri . '/Assets/css/font-icons.css', [], $ver);
    wp_register_style('ju_animate', $uri . '/Assets/css/animate.css', [], $ver);
    wp_register_style('ju_magnific_popup', $uri . '/Assets/css/magnific-popup.css', [], $ver);
    wp_register_style('ju_responsive', $uri . '/Assets/css/responsive.css', [], $ver);
    wp_register_style('ju_custom', $uri . '/Assets/css/custom.css', [], $ver);



    wp_enqueue_style('ju_google_fonts');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_dark');
    wp_enqueue_style('ju_font_icons');
    wp_enqueue_style('ju_animate');
    wp_enqueue_style('ju_magnific_popup');
    wp_enqueue_style('ju_responsive');
    wp_enqueue_style('ju_custom');





    ///////////////SCRIPTS//////////////////
    wp_register_script('ju_plugin', $uri . '/Assets/js/plugins.js', [], $ver, true);
    wp_register_script('ju_functions', $uri . '/Assets/js/functions.js', [], $ver, true);



    //////////////////////INCLUDE////////////////////
    include(get_theme_file_path('custom-nav-walker.php'));


    wp_enqueue_script('jquery');
    wp_enqueue_script('js_plugin');
    wp_enqueue_script('js_functions');
}

//////////////////////////////SHOW MENU
function ju_setup_theme()
{
    register_nav_menu('primary', __('primary_menu', 'tutorial'));
}
function ju_widgets()
{
    register_sidebar([
        'name' => __('First Sidebar', 'udemy'),
        'id'   => 'ju_sidebar',
        'description' => __('Sidebar for theme ', 'udemy'),
        'before_widget' => '<div id="%1$s" class="widget cleafix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}








add_action('after_setup_theme', 'ju_setup_theme');
add_action('wp_enqueue_scripts', 'ju_eneque');
add_action('widgets_init', 'ju_widgets');
