<?php get_header(); ?>

<h1>its a single.php</h1>
<?php while(have_posts()): the_post(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
