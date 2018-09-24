<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <div class="intro" >
                <h1><?php the_title(); ?></h1>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="global-search">
                <div class="container">
                    <?php get_template_part('searchform');?>
                </div>
            </div>
            <div class="container">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '
                            <p id="breadcrumbs">','</p>
                        ' );
                    }
                ?>
            </div>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="container">
                    <!--h1><?php //the_title(); ?></h1-->
                    
                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php the_content(); ?>

                        <?php comments_template( '', true ); // Remove if you don't want comments ?>

                        <?php edit_post_link(); ?>

                    </article>
                    <!-- /article -->
                </div>
            <?php endwhile; ?>

            <?php else: ?>
                <div class="container">
                    <!-- article -->
                    <article>

                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>
                    <!-- /article -->
                </div>
            <?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
