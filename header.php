<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="<?php echo get_bloginfo('description') ?>">
      <?php wp_head(); ?>
    </head>
    <body>

      <nav class="navbar navbar-fixed-top">
        <?php
        wp_nav_menu([
					'theme_location' => 'main-nav',
					'menu_class' => 'nav navbar-nav'
				]);


        ?>
      </nav>
