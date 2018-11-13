<?php
function create_post_libros() {
	register_post_type( 'libros',
		array(
			'labels'       => array(
				'name'       => __( 'Libros' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'comments',
				'author',
				'custom-fields'
			), 
			'taxonomies'   => array(
				'post_tag',
				'category',
			)
		)
	);
	register_taxonomy_for_object_type( 'category', 'libros' );
	register_taxonomy_for_object_type( 'post_tag', 'libros' );
}
add_action( 'init', 'create_post_libros' );