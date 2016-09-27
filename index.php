<?php get_header(); ?>
<div>
  <main role="main">
    <?php while(have_posts()): the_post(); ?>
      <?php the_title(); ?>
      <?php the_excerpt(); ?>
      <p>testing</p>
    <?php endwhile; ?>
    <a href="/clean-wordpress/wp-content/uploads/2016/09/CV_2016-kristian_guld.pdf" target="_blank">CV</a>
  </main>
</div>
<?php get_footer(); ?>
