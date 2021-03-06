<?php
// register_nav_menus(array(
//     'header_menu' => 'main-nav'
// ));

//removeing admin header
add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails', ['post', 'page']);

function set_styles(){

  // Bootstrap Core CSS
  wp_enqueue_style(
    'bootstrap-css',
    get_template_directory_uri() ."/vendor/bootstrap/css/bootstrap.min.css",
    [],
    null,
    'all'
  );
  wp_enqueue_style('bootstrap-css');

  // Custom Fonts
  wp_enqueue_style(
    'font-awesome',
    get_template_directory_uri() ."/vendor/font-awesome/css/font-awesome.min.css",
    [],
    null,
    'all'
  );
  wp_enqueue_style('font-awesome');

  wp_register_style(
    'googleFonts',
    'https://fonts.googleapis.com/css?family=Open+Sans%7CRoboto',
    [],
    null,
    'all'
  );
  wp_enqueue_style('googleFonts');

  // Base style
  wp_register_style(
    'style',
     get_template_directory_uri() . '/style.css',
    [],
    null,
    'all'
  );
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'set_styles');
// End set_styles

function set_scripts(){

  // Google Analytics
  wp_register_script(
    'googleAnalytics',
    get_template_directory_uri(). '/js/googleAnalytics.js',
    [],
    null,
    false
  );
  wp_enqueue_script('googleAnalytics');

  // Jquery in footer
  wp_register_script(
    'jquery',
    get_template_directory_uri() . '/vendor/jquery/jquery.min.js',
    [],
    null,
    true
  );
  wp_enqueue_script('jquery');

  // Bootstrap core javaScript in footer
  wp_register_script(
    'bootstrap-js',
    get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js',
    [jquery],
    null,
    true
  );
  wp_enqueue_script('bootstrap-js');

  // typed.js
  wp_register_script(
    'typed',
    get_template_directory_uri() . '/vendor/typed/typed.js',
    [jquery],
    null,
    true
  );
  wp_enqueue_script('typed');

  // App core
  wp_register_script(
    'core',
    get_template_directory_uri() . '/js/core.js',
    [jquery],
    null,
    true
  );
  wp_enqueue_script('core');

}
add_action('wp_enqueue_scripts', 'set_scripts');
// End set_scripts
