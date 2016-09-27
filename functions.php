<?php
register_nav_menus(array(
    'header_menu' => 'Header menu'
));

//removeing admin header
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

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
  wp_register_style(
    'open-sans',
    'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
    [],
    null,
    'all'
  );
  wp_enqueue_style('font-awesome');
  wp_enqueue_style('open-sans');

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

function set_scripts(){

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
}

add_action('wp_enqueue_scripts', 'set_scripts');
