<?php
/**
 * Thème {{sitedescription}}
 * Template d'index
 *
 * @package    {{sitedomain}}
 * @subpackage wordpress theme
 * @author     {{author}}
 *
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        if ( have_posts() ){

            while ( have_posts() ){

                the_post();


                get_template_part( 'parts/content', get_post_type() );

            }

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'goliath-starter-theme-locale' ),
                'next_text'          => __( 'Next page', 'goliath-starter-theme-locale' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'goliath-starter-theme-locale' ) . ' </span>',
            ) );

        }



        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
