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
      get_template_part('template-parts/content', 'jumbotron');
      break;
      // end jumbotron
      case 'skills':
      get_template_part('template-parts/content', 'skills');
      break;
      //end skills
      case 'reference':
      get_template_part('template-parts/content', 'reference');
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
