<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// PERFILES
		$labels = array(
			'name'          => 'Perfiles',
			'singular_name' => 'Perfil',
			'add_new'       => 'Nuevo Perfil',
			'add_new_item'  => 'Nuevo Perfil',
			'edit_item'     => 'Editar Perfil',
			'new_item'      => 'Nuevo Perfil',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Perfil',
			'search_items'  => 'Buscar Perfil',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Perfiles'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'perfiles' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'perfil', $args );

	});