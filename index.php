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
          <section id='page-<?php the_ID(); ?>' class="<?php echo $sectionType; ?>">
            <header>
              <h1><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
            <div id="typed"></div>
          </section>
        </div>
      </div>
      <?php
      break;

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
