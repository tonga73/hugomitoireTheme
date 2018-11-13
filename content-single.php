<div id="content-single" <?php post_class( 'container-fluid' ); ?>>
  <article class="row">
    <?php if ( has_post_thumbnail() ) { ?>
      <div id="single-img-wrapper">
        <img class="single-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
      </div>
    <?php } ?>
    <h2 class="single-title"><?php the_title(); ?></h2>

    <section class="single-body">
      <span class="d-flex align-items-center justify-content-between">
      <p style="opacity: 0.7;" class="single-meta">Publicado en <?php the_date('F, Y'); ?></p>
      </span>
      <?php the_content(); ?>
    </section>

		<footer class="single-footer">
			<?php edit_post_link( __( 'Editar', 'hugomitoire' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
    

    <div class="modal fade libro-modal" tabindex="-1" role="dialog" aria-labelledby="<?php the_ID(); ?>" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <?php the_meta() ?>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="modal-body">
            <?php echo the_excerpt(); ?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>
  </article>
</div><!-- /.blog-post -->