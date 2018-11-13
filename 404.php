<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="404" class="content-area bg-dark text-light d-flex flex-column justify-content-center align-items-center p-5">
		<div id="content" class="site-content mt-5 py-5" role="main">

			<header class="page-header text-muted d-flex justify-content-center align-items-center">
				<i class="fas fa-times display-3 mx-3"></i>
				<h1 class="page-title"><?php _e( 'Sin resultados', 'hugomitoire' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Al parecer no se ha encontrado nada en esta ubicación', 'hugomitoire' ); ?></h2>
					<p><?php _e( 'Tal vez intentando con una búsqueda...', 'hugomitoire' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>