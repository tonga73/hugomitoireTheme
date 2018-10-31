<?php
/**
 * Template Name: Inicio
 *
 * @package WordPress
 * @subpackage HugoMitoire Theme
 * @since 1.0
 */
get_header(); ?>

<div class="homepage">
    <?php if ( has_post_thumbnail() ) { ?>
      <section style="background-size: cover;background-image: url('<?php echo the_post_thumbnail_url(); ?>');background-repeat: no-repeat;background-position-y: center;" class="jumbotron">
        <div id="front-jumbo-content">
          <div class="row text-light">
            
            <p class="order-sm-last col-sm-12 order-lg-first col-lg-7 d-flex flex-column justify-content-center">
              <a style="text-decoration: none;" width="100%" href="<?php echo get_the_permalink( 1813 ); ?>">
                <button class="btn btn-lg btn-block btn-outline-warning">
                 <?php echo get_the_title( 1813 ); ?>
                </button>
              </a>
            </p>
            <div class="col-sm-12 col-lg-5 text-center mb-3">
              <?php echo get_the_post_thumbnail( 1813 ); ?>
            </div>
          </div>
        </div>
          <div id="libros-scrollable">
            <nav class="nav">
              <button id="slideBack">
                <i class="fas fa-arrow-left"></i>
              </button>
              <button id="slide">
                <i class="fas fa-arrow-right"></i>
              </button>
            </nav>
            <?php
            $args = array( 
              'post_type' => 'libros', 
              'posts_per_page' => -1,
              'cat' => '191',
              'order' => 'ASC'
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
              echo '<div class="card">';
              the_post_thumbnail( 'medium' );
              echo '</div>';
            endwhile;
            ?>
          </div>
      </section>  
    <?php } ?>
    <div id="featured-front"></div>
    <div id="front-content-section">
      <div class="row">
        <div class="col-12">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
          endwhile; endif; ?>
        </div>
      </div>
    </div>
</div><!-- /.blog-post -->

<?php get_footer();