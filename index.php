<?php get_header(); ?>
<?php
// Get pages for single page layout
$query = new WP_Query([
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC'
]);
?>
<div>
  <div id="site-wrapper">
    <?php while ($query->have_posts()): $query->the_post();  ?>
      <section id='page-<?php the_ID(); ?>' <?php post_class(); ?>>
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content(); ?>
      </section>
    <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
