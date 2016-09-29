<?php
// Template for showing 404
 get_header();
?>
	<div>
		<main role="main" class="container">

			<section class="error-404 not-found row">
        <div class="col-sm-12">
          <header class="">
  					<h1 class=""><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
  				</header>
  				<div class="">
  					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); //How does this function access /language file? ?></p>
  					<?php get_search_form(); ?>
  				</div>
        </div>
			</section><!-- .error-404 -->

		</main>
	</div>
<?php
get_footer();
