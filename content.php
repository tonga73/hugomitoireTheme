<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
		<header class="card-header">
				<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
			<h1 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</header>

		<div class="card-body">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
</article><!-- #post -->