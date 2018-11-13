<?php get_header(); ?>   
<div id="blog-main" class="container-fluid bg-dark">
  <div class="row m-0">
        <div class="col-sm-12 col-md-12 col-lg-8 m-0">
            <div class="card-columns">
              <?php
              if ( have_posts() ) : while ( have_posts() ) : the_post();

                  get_template_part( 'content', get_post_format() );

              endwhile; ?>
            </div>
            <nav id="blog-pagination">
              <?php
              $prev_link = get_previous_posts_link(__('&laquo; Siguiente'));
              $next_link = get_next_posts_link(__('Anterior &raquo;'));
              // as suggested in comments
              if ($prev_link || $next_link) {
                echo '<ul class="pagination navbar">';
                if ($prev_link){
                  echo '<li class="page-link prev">'.$prev_link .'</li>';
                }
                if ($next_link){
                  echo '<li class="page-link next">'.$next_link .'</li>';
                }
                echo '</ul>';
              }  
              ?>
            </nav>
            <?php else : ?>
            <p><?php _e('Disculpa, no se han encontrado coincidencias.'); ?></p>
            <?php endif; ?>

        </div><!-- /.blog-main -->

      <?php get_sidebar(); ?>

  </div>
</div>
<?php get_footer(); ?>