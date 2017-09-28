<?php 

function codex_custom_init() {
	$labelsCase = array(
		'name' => _x('Cases', 'nome plural do tipo de post'),
		'singular_name' => _x('Case', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Case', 'case'),
		'add_new_item' => __('Adicionar case'),
		'edit_item' => __('Editar case'),
		'new_item' => __('Novo case'),
		'all_items' => __('Todos os cases'),
		'view_item' => __('Ver case'),
		'search_items' => __('Procurar por case'),
		'not_found' =>  __('Nenhum case foi encontrado'),
		'not_found_in_trash' => __('Não há cases na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Cases'

	);
	$argsCases = array(
		'labels' => $labelsCase,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_icon' => 'dashicons-screenoptions',
		'menu_position' => 5,
		'supports' => array( 'title', 'author', 'thumbnail' )
	); 
	register_post_type('case',$argsCases);





	$labelsAgencia = array(
		'name' => _x('Agências', 'nome plural do tipo de post'),
		'singular_name' => _x('Agência', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar agência', 'agência'),
		'add_new_item' => __('Adicionar agência'),
		'edit_item' => __('Editar agência'),
		'new_item' => __('Nova agência'),
		'all_items' => __('Todas as agencias'),
		'view_item' => __('Ver agência'),
		'search_items' => __('Procurar por agência'),
		'not_found' =>  __('Nenhuma agência foi encontrada'),
		'not_found_in_trash' => __('Não há agências na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Agências'

	);
	$argsAgencias = array(
		'labels' => $labelsAgencia,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_icon' => 'dashicons-screenoptions',
		'menu_position' => 5,
		'supports' => array( 'title', 'author', 'thumbnail' )
	); 
	register_post_type('agencia',$argsAgencias);





}
add_action( 'init', 'codex_custom_init' );




if ( function_exists( 'add_image_size' ) ) 
{
	add_image_size( 'foto-destaque', 360, 300, true );
	add_image_size( 'zoom-destaque', 240, 300, true );
	add_image_size( 'tb-lista', 220, 215, true );
	add_image_size( 'tb-foto', 102, 100, true );
	add_image_size( 'foto', 470, 460, true );
}

function get_post_by_type($type, $order = 'DESC')
{
	$args = array(
		'post_type' => $type,
		'order' => $order,
		'posts_per_page' => -1
	);
	return new WP_Query( $args );
}

