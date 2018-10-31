<?php
/**
 * Template Name: Libros
 *
 * @package WordPress
 * @subpackage HugoMitoire Theme
 * @since 1.0
 */
get_header(); ?>
  <div id="libros-page" class="bg-dark">
    <div class="libros-separator">
      <h2>Cuentos</h2> 
    </div> 
    <div class="container-fluid">
      <div class="row">
              <?php
              $args = array( 
                'post_type' => 'libros', 
                'posts_per_page' => -1,
                'cat' => '191'
              );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
              ?>
                <div id="libro-container post-<?php the_ID(); ?>" <?php post_class( 'col-sm-12 col-lg-3 my-3' ); ?>>
                    <a class="libro" href="<?php echo get_the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
                </div>
              <?php
              endwhile;
              ?>
      </div>
    </div> 
      <div class="libros-separator">
        <h2>Novelas</h2>
      </div>
    <div class="container-fluid">
      <div class="row">
              <?php
              $args = array( 
                'post_type' => 'libros', 
                'posts_per_page' => -1,
                'cat' => '190'
              );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
              ?>
                <div id="libro-container post-<?php the_ID(); ?>" <?php post_class( 'col-sm-12 col-lg-3 my-3' ); ?>>
                    <a class="libro" href="<?php echo get_the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
                </div>
              <?php
              endwhile;
              ?>
      </div>
    </div>
	</div>
<?php get_footer(); ?>
