<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="page-404">
			<div class="container">
				<!-- article -->
				<article id="post-404">

					<h1><?php _e( 'Page not found', 'html5blank' ); ?> !</h1>

					<img src="<?php echo get_template_directory_uri(); ?>/img/404.gif" alt="Page 404 not found" />
					
					<!--Formulaire de recherche-->
					<?php get_template_part('searchform');?>

					<a class="return-hompage" href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>

				</article>
				<!-- /article -->
			</div>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
