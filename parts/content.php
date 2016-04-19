<?php
/**
 * Thème {{sitedescription}}
 * Template part par defaut
 *
 * @package    {{sitedomain}}
 * @subpackage wordpress theme
 * @author     {{author}}
 */
?>

<article <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        if ( is_single() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        endif;
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php

        the_content();

        ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
