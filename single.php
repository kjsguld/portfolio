<?php get_header(); ?>
<div id="site-wrapper">
  <?php while(have_posts()): the_post(); ?>
    <main class="container">
      <section id='page-<?php the_ID(); ?>' class="<?php // NO GLOBALS[] ?>row">
        <div class="col-md-3 col-sm-4 single-secondary">
          <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
        </div>
        <article class="col-md-6 col-sm-5">
          <header>
            <h1><?php the_title(); ?></h1>
          </header>
          <?php the_content(); ?>
          <?php the_excerpt(); ?>
        </article>
        <div class="col-md-3 col-sm-3 tags-box single-secondary">
          <header>
            <h2>Tags</h2>
          </header>
          <?php the_tags( '<ul class="tags-list"><li>', '</li><li>', '</li></ul>' ); ?>
        </div>
      </section>
    </main>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
