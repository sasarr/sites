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
                    
                    <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

                    <?php get_template_part('loop'); ?>

                    <?php get_template_part('pagination'); ?>

                    <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 2') ) : endif; ?>
                </article>
                
                
                <div class="aside-right">
                    <?php //get_sidebar(); //appel une seule sidebar, la première définit dans le fichier function.php?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 1') ) : endif; ?>
                </div>
            </div>
        </section>
        <!-- /section -->
	</main>

    
    
<?php get_footer(); ?>