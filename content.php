<article id="post-<?php the_ID(); ?>" <?php post_class( 'card m-0' ); ?>>
		<picture class="card-img-top">
			<img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
		</picture>
		<header class="card-header">
			<h1 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<p class="text-light bg-secondary col-3 ml-auto text-center card-meta"><?php the_date('F j, Y'); ?></p>
		</header>

		<div class="card-body">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
</article><!-- #post -->