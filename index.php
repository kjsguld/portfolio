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
    <?php
    while ($query->have_posts()) : $query->the_post();
    $sectionType =  get_post_meta(get_the_ID(), 'class', true);
    switch ($sectionType) {
      case 'jumbotron':
      ?>
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
      <?php
      break;
      // end jumbotron
      case 'skill':
      ?>
      <div class="container">
        <section id='page-<?php the_ID(); ?>' class="<?php echo $sectionType; ?>">
          <header>
            <h1><?php the_title(); ?></h1>
          </header>
          <?php the_content(); ?>
        </section>
      </div>
      <?php
      break;
      //end skill
      default:
        ?>
        <div class="container">
          <section id='page-<?php the_ID(); ?>' class="<?php echo $sectionType; ?>">
            <header>
              <h1><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
          </section>
        </div>
        <?php
        break;
      } //end switch
    endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
