<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '
                            <p id="breadcrumbs">','</p>
                        ' );
                    }
                ?>
            </div>
			<div class="container blog-flex">
				<article class="articles-blog">
					<h1>Page de résultat des recherches</h1>
					<h2>
						<?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>
					</h2>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</article>

				<div class="aside-right">
                    <?php //get_sidebar(); //appel une seule sidebar, la première définit dans le fichier function.php?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 1') ) : endif; ?>
                </div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
