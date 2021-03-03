<?php
    add_action('wp_enqueue_scripts', 'my_scripts');
    function my_scripts() {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/vendors/Swiper/Swiper.css');

        wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/vendors/Swiper/Swiper.js');
        wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('localstorage-js', get_stylesheet_directory_uri() . '/assets/js/localstorage.js');
    }

    register_nav_menus(array(
        'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
    ));