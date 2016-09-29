<?php
// Get pages for single page layout
$query = new WP_Query([
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC'
]);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <title><?php wp_title('-', true, 'right') . bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body  <?php body_class(); ?>>
    <!-- nav start -->
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headerNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="headerNav">
          <ul class="nav navbar-nav">
            <?php while ($query->have_posts()): $query->the_post();  ?>
              <li>
                <a href="#page-<?php the_ID(); ?>" >
                  <?php the_title(); ?>
                </a>
              </li>
            <?php endwhile; ?>
            <?php pll_the_languages(); ?>
          </ul>
        </div>
      </div>
      <?php
      // wp_nav_menu([
			// 	'theme_location' => 'main-nav',
			// 	'menu_class' => 'nav navbar-nav'
			// ]);
      ?>
    </nav>
    <!-- nav end -->
