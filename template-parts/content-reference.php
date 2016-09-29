<?php
//skill query
$subQuery = new WP_Query([
  'post_type' => 'post',
  'category_name' => 'reference',
  'order' => 'ASC'
]);
?>
<div class="container">
  <section id='page-<?php the_ID(); ?>' class="<?php echo $GLOBALS['sectionType']; ?> row">
    <div class="col-md-6 col-md-offset-3 text-center">
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
      <?php the_content(); ?>
    </div>
    <?php while ($subQuery->have_posts()) : $subQuery->the_post(); ?>
      <article class="skill-article col-md-4 col-sm-6">
        <div>
          <h2 class="text-center"><?php the_title(); ?><h2>
        </div>
        <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
        <div>
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </section>
</div>
