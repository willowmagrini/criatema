masc

function slugaaa_init() {
	register_post_type( 'slugaaa', array(
		'labels'            => array(
			'name'                => __( 'pluraaaal', 'temateste' ),
			'singular_name'       => __( 'singularaaaa', 'temateste' ),
			'all_items'           => __( 'Todos pluraaaal', 'temateste' ),
			'new_item'            => __( 'Novo singularaaaa', 'temateste' ),
			'add_new'             => __( 'Adicionar Novo', 'temateste' ),
			'add_new_item'        => __( 'Adicionar Novo singularaaaa', 'temateste' ),
			'edit_item'           => __( 'Editar singularaaaa', 'temateste' ),
			'view_item'           => __( 'Ver singularaaaa', 'temateste' ),
			'search_items'        => __( 'Buscar pluraaaal', 'temateste' ),
			'not_found'           => __( 'Nenhum singularaaaa encontrado', 'temateste' ),
			'not_found_in_trash'  => __( 'Nenhum singularaaaa encontrado', 'temateste' ),
			'parent_item_colon'   => __( 'singularaaaa pai', 'temateste' ),
			'menu_name'           => __( 'pluraaaal', 'temateste' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'excerpt' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'slugaaa',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'slugaaa_init' );

function slugaaa_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['slugaaa'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('singularaaaa updated. <a target="_blank" href="%s">Ver singularaaaa</a>', 'temateste'), esc_url( $permalink ) ),
		2 => __('Campo personalizado atualizado.', 'temateste'),
		3 => __('Campo personalizado deletado.', 'temateste'),
		4 => __('singularaaaa atualizado.', 'temateste'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('singularaaaa restaurado para a revisão %s', 'temateste'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Movie published. <a href="%s">View Movie</a>', 'temateste'), esc_url( $permalink ) ),
		7 => __('singularaaaa salvo.', 'temateste'),
		8 => sprintf( __('singularaaaa enviado. <a target="_blank" href="%s">Pré-visualização</a>', 'temateste'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('singularaaaa agendado para: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Pré-visualização</a>', 'temateste'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Rascunho de singularaaaa atualizado. <a target="_blank" href="%s">Pré-visualização</a>', 'temateste'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'slugaaa_updated_messages' );
fem

function slugaaa_init() {
	register_post_type( 'slugaaa', array(
		'labels'            => array(
			'name'                => __( 'pluraaaal', 'temateste' ),
			'singular_name'       => __( 'singularaaaa', 'temateste' ),
			'all_items'           => __( 'Todas pluraaaal', 'temateste' ),
			'new_item'            => __( 'Nova singularaaaa', 'temateste' ),
			'add_new'             => __( 'Adicionar Nova', 'temateste' ),
			'add_new_item'        => __( 'Adicionar Nova singularaaaa', 'temateste' ),
			'edit_item'           => __( 'Editar singularaaaa', 'temateste' ),
			'view_item'           => __( 'Ver singularaaaa', 'temateste' ),
			'search_items'        => __( 'Buscar pluraaaal', 'temateste' ),
			'not_found'           => __( 'Nenhuma singularaaaa encontrado', 'temateste' ),
			'not_found_in_trash'  => __( 'Nenhuma singularaaaa encontrado', 'temateste' ),
			'parent_item_colon'   => __( 'singularaaaa pai', 'temateste' ),
			'menu_name'           => __( 'pluraaaal', 'temateste' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'excerpt' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'slugaaa',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'slugaaa_init' );

function slugaaa_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['slugaaa'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('singularaaaa updated. <a target="_blank" href="%s">Ver singularaaaa</a>', 'temateste'), esc_url( $permalink ) ),
		2 => __('Campo personalizado atualizado.', 'temateste'),
		3 => __('Campo personalizado deletado.', 'temateste'),
		4 => __('singularaaaa atualizado.', 'temateste'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('singularaaaa restaurado para a revisão %s', 'temateste'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Movie published. <a href="%s">View Movie</a>', 'temateste'), esc_url( $permalink ) ),
		7 => __('singularaaaa salvo.', 'temateste'),
		8 => sprintf( __('singularaaaa enviado. <a target="_blank" href="%s">Pré-visualização</a>', 'temateste'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('singularaaaa agendado para: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Pré-visualização</a>', 'temateste'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Rascunho de singularaaaa atualizado. <a target="_blank" href="%s">Pré-visualização</a>', 'temateste'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'slugaaa_updated_messages' );
