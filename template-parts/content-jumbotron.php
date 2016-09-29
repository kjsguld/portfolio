<div class="jumbotron">
  <div class="container">
    <section id='page-<?php the_ID(); ?>'>
      <div class="col-md-6">
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content(); ?>
        <div><p id="typed"></p></div>
      </div>
      <div class="col-md-6">
        <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
      </div>
    </section>
  </div>
</div>
