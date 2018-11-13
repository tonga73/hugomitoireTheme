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
    <ul class="nav nav-tabs justify-content-end" id="librosTab" role="tablist">
      <li class="nav-item"><a data-toggle="tab" href="#todos" role="tab" aria-controls="todos" aria-selected="true" class="nav-link active">Todos</a></li>
      <li class="nav-item"><a data-toggle="tab" href="#cuentos" role="tab" aria-controls="cuentos" aria-selected="false" class="nav-link">Cuentos</a></li>
      <li class="nav-item"><a data-toggle="tab" href="#novelas" role="tab" aria-controls="novelas" aria-selected="false" class="nav-link">Novelas</a></li>
    </ul> 
    <div class="tab-content" id="librosTab">
      <div class="container-fluid tab-pane fade show active" id="todos" role="tabpanel" aria-labelledby="todos-tab">
        <div class="row">
                <?php
                $args = array( 
                  'post_type' => 'libros', 
                  'posts_per_page' => -1,
                  'orderby' => 'rand'
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
      <div class="container-fluid tab-pane fade" id="cuentos" role="tabpanel" aria-labelledby="cuentos-tab">
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
      <div class="container-fluid tab-pane fade" id="novelas" role="tabpanel" aria-labelledby="novelas-tab">
        <div class="row">
                <?php
                $args = array( 
                  'post_type' => 'libros', 
                  'posts_per_page' => -1,
                  'orderby' => 'date',
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
	</div>
<?php get_footer(); ?>
