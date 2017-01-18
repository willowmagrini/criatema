add_action( 'init', 'CCPPTT_cpt' );

function CCPPTT_cpt() {
	$labels = array(                        
		'name'               => 'CCPPTT', 
		'singular_name'      => 'CCPPTT',
		'menu_name'          => 'CCPPTT',
		'name_admin_bar'     => 'CCPPTT',
		'add_new'            => 'Adicionar nova',
		'add_new_item'       => 'Adicionar nova CCPPTT',
		'new_item'           => 'Nova CCPPTT' ,
		'edit_item'          => 'Editar CCPPTT',
		'view_item'          => 'Ver todas' ,
		'all_items'          => 'Todas' ,
		'search_items'       => 'Buscar',
		'parent_item_colon'  => 'Mãe' ,
		'not_found'          => 'Nenhuma encontrada' ,
		'not_found_in_trash' => 'Nenhuma encontrada na lixeira' ,
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'CCPPTT' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon' => 'dashicons-book',
		'taxonomies' => array('post_tag', 'categories'),
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type( 'CCPPTT', $args );
}