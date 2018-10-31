<div id="content-single" <?php post_class( 'container-fluid' ); ?>>
  <article class="row">
    <?php if ( has_post_thumbnail() ) { ?>
      <div id="single-img-wrapper">
        <img class="single-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
      </div>
    <?php } ?>
    <h2 class="single-title"><?php the_title(); ?></h2>

    <section class="single-body">
      <?php the_content(); ?>
    </section>

		<footer class="single-footer">
      <p class="single-meta">Publicado: <?php the_date('l, F j, Y'); ?> ~ <a href="#"><?php the_author(); ?></a></p>
			<?php edit_post_link( __( 'Editar', 'hugomitoire' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
  </article>
</div><!-- /.blog-post -->