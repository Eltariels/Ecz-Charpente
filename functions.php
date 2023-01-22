<?php

define('ID_MAIN_NAV', 2); 
define('ID_FOOTER_NAV', 3); 

add_image_size('imgblochome', '540', '360', false);
add_image_size('imgaboutus', '540', '360', false);
add_image_size('imgblockservice', '540', '360', false);
add_image_size('imgblocksolarpanel', '540', '360', false);
add_image_size('imgblockrealisation', '540', '360', false);

//activate menu in theme
add_theme_support("menus");

function register_my_menus()
{
    register_nav_menus(
        array(
            'main_menu' => __('Menu principal'),
            'footer_menu' => __('Footer menu')
        )
    );
}
add_action('init', 'register_my_menus');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Page option',
        'menu_title'    => 'Option du site',
        'menu_slug'     => 'option',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

if (!is_admin()) {
    wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', array(), 1, 'all');
}

function debug($vars)
{
    echo ('<pre>');
    var_dump($vars);
    echo ('</pre>');
    die('end');
}
