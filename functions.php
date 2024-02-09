<?php
//движок wordpress расширяемый - с плагинами, которые не могут получить доступ в html-коде
//экшен-хук, подключаем стили и скрипты
add_action( 'wp_enqueue_scripts', function() {
    //зависимости нет - пустой array
    wp_enqueue_style( 'lab6_css', get_stylesheet_directory_uri() . '/style.css', array(), null, false);

    wp_enqueue_style( 'lab6_slick_theme_css', get_stylesheet_directory_uri() . '/js/slick/slick-theme.css', array(), null, false);

    wp_enqueue_style( 'lab6_slick_css', get_stylesheet_directory_uri() . '/js/slick/slick.css', array(), null, false);

    //подключаем jquery, который уже в ядре
    wp_enqueue_script( 'lab6_jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, true);

    wp_enqueue_script( 'lab6_slick_script', get_stylesheet_directory_uri() . '/js/slick/slick.min.js', array(), null, true);

    //!!!
    wp_enqueue_script( 'lab6_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array(), null, true);
    //!!!
    wp_enqueue_script( 'lab6_slider', get_stylesheet_directory_uri() . '/js/index.js', array(), null, true);

});

//экшен-хук, подключаем заголовок
add_action( 'after_setup_theme', function() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); //??

});

//регистрация области для отображения меню
    register_nav_menus( 
        array(  
            'primary' => 'Название меню',
            'footer_menu' => 'Меню в подвале сайта'
 ) );

?>