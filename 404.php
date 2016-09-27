<?php
// Template for showing 404
 get_header();
?>
	<div>
		<main role="main">

			<section class="error-404 not-found">
				<header class="">
					<h1 class=""><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!--  -->
			</section><!-- .error-404 -->

		</main>
	</div>
<?php
get_footer();
