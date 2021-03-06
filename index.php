<?php
// Get pages for single page layout
$query = new WP_Query([
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC'
]);
?>
<?php get_header(); ?>
<div id="site-wrapper">
  <?php
  while ($query->have_posts()) : $query->the_post();
  $GLOBALS['sectionType'] =  get_post_meta(get_the_ID(), 'class', true);
  switch ($GLOBALS['sectionType']) {
    case 'jumbotron':
      get_template_part('template-parts/content', 'jumbotron');
    break; // end jumbotron
    case 'skills':
      get_template_part('template-parts/content', 'skills');
    break; //end skills
    case 'reference':
      get_template_part('template-parts/content', 'reference');
    break; //end reference
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
<?php get_footer(); ?>
