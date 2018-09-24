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
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class("single-article"); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- titre de l'article -->
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /titre de l'article -->

						<!-- post details -->
						<p>
							<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>, le 
							<span class="date"><?php the_time('j F Y à '); ?> <?php the_time('g:i a.'); ?></span> 
							<span class="comments"><?php //if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						</p>
						<!-- /post details -->
						
						<!-- Contenu de l'article -->
						<?php the_content(); // Dynamic Content ?>
						<!-- /Contenu de l'article -->
						
						<!-- Tags -->
						<p>
							<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
						</p>
						<!-- /Tags -->
						
						<!-- Catégorie -->
						<p>
							<?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?>
						</p>
						<!-- /Catégorie -->

						<!--p><?php //_e( 'This post was written by ', 'html5blank' ); the_author(); ?></p-->

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

						<?php comments_template(); ?>

					</article>
					<!-- /article -->
					
					<!-- Sidebar -->
					<div class="aside-right">
						<?php //get_sidebar(); //appel une seule sidebar, la première définit dans le fichier function.php ?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 1') ) : endif; ?>
					</div>
					<!-- /Sidebar -->

				<?php endwhile; ?>

				<?php else: ?>
					
					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->
					
					<!-- Sidebar -->
					<div class="aside-right">
						<?php //get_sidebar(); //appel une seule sidebar, la première définit dans le fichier function.php?>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 1') ) : endif; ?>
					</div>
					<!-- /Sidebar -->

				<?php endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
