<?php
/**
 * Template Name: Market
 *
 * @package WordPress
 * @subpackage HugoMitoire Theme
 * @since 1.0
 */
get_header(); ?>

<div id="market" class="container-fluid bg-dark">
    <div class="row">
    <?php get_header();

    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content-market', get_post_format() );
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    endwhile; endif; ?>
    </div>
</div>

<?php get_footer();