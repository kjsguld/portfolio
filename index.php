<?php get_header(); ?>
<div>
  <main role="main">

    <?php
    // Get pages for single page layout
    $query = new WP_Query([
      'post_type' => 'page',

    ]);
    ?>
    <div id="site-wrapper">
      <?php while ($query->have_posts()): $query->the_post();  ?>
        <section>
          <header>
            <h1><?php the_title(); ?></h1>
          </header>

        </section>
      <?php endwhile; ?>
    </div>

    <?php while(have_posts()): the_post(); ?>
      <?php the_title(); ?>
      <?php the_excerpt(); ?>

    <?php endwhile; ?>
    <a href="/clean-wordpress/wp-content/uploads/2016/09/CV_2016-kristian_guld.pdf" target="_blank">CV</a>
  </main>
</div>
<?php get_footer(); ?>
