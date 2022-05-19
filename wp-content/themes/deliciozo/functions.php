<?php

 ///// Retirer les éléments inutiles de wp /////


 function sgdelicio_remove_menu_pages() {
	//remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'sgdelicio_remove_menu_pages' );

//constante pour la version.
define('sgdelicio_version', '1.6');

//chargement dans le front-end
function sgdelicio_scripts()
{
//==========================================
	//======= chargement des styles =========
//==========================================

	wp_enqueue_style(
		'sgdelicio_bootstrap-style',
		get_template_directory_uri() . '/css/bootstrap.min.css',
		array(), sgdelicio_version, 'all');
	//lien avec style

	 wp_enqueue_style(
		'parent_style',
		get_template_directory_uri() . '/style.css',
		array('sgdelicio_bootstrap-style'), sgdelicio_version, 'all');
	
	// chargement des scripts
	
	wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), sgdelicio_version, true);
	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper-js'), sgdelicio_version, true);

	wp_enqueue_script('sgdelicio_script', get_template_directory_uri() . '/js/deliciozo.js', array('jquery', 'bootstrap-js'), sgdelicio_version, true);
}

add_action('wp_enqueue_scripts', 'sgdelicio_scripts');


add_theme_support('post-thumbnails');

function sgdelicio_admin_scripts()
{

	wp_enqueue_style('sgdelicio_bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), sgdelicio_version);
}
add_action('admin_init', 'sgdelicio_admin_scripts');

/////////////////// UTILITAIRES

function sgdelicio_setup()
{
	add_theme_support('post-thumbnails');

	// taille image card smartphone
	add_image_size('smartph', 358, 200, true);
	add_image_size('slider', 1030, 650, true );
	add_image_size( 'fiche_y', 208, 208, true );


	// support du titre
	add_theme_support('title-tag');

	require_once('includes/bootstrap_5_wordpress-navbar_walker_main.php');
}
	//activation onglet 'menu' du dashboard
	register_nav_menu('main-menu', 'Main menu');


add_action('after_setup_theme', 'sgdelicio_setup');


function my_single_template($single) {
	
	global $post;

	$single_path = get_stylesheet_directory() . '/single';
 
	foreach((array)get_the_category() as $cat) :

			  if(file_exists($single_path . '/single-' . $cat->slug . '.php'))
			  return $single_path . '/single-' . $cat->slug . '.php';

	endforeach;
}

add_filter('single_template', 'my_single_template');


// ///////Custom Post Type slider ds galerie photos ////////

function sgdelicio_slider_init () {
	$labels = array(
		'name' => 'Carousel',
		'singular_name' => 'Image',
		'add_new' => 'Ajoutez 1 image',
		'edit_item' => 'Modifiez',
		'new_item' => 'Nouveau',
		'all_items' => 'Voir liste',
		'view_item' => 'Voir l\' élément',
		'search_item' => 'Cherchez 1 image',
		'not_found' => 'Aucun élément trouvé',
		'not_found_in_trash' => 'Aucun élément dans la corbeille',
		'menu_name' => 'Slider'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'rewite' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'hierachical' => false,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-star-filled',
		'publicly_queryable' => false,
		'show_in_nav_menus' => true,
		'exlude_from_search' => true,
		'supports' => array ('title', 'page-attributes', 'thumbnail') //editor
	);
register_post_type('sgdelicio_slider', $args);
} //end function sgdelcio_slider_init

add_action('init', 'sgdelicio_slider_init');


/////////////AJOUT IMAGE ET RANG D'APPARITION DS LE CPT SLIDER///

add_filter('manage_edit-sgdelicio_slider_columns', 'sgdelicio_col_change');

function sgdelicio_col_change($columns) {
	$columns['sgdelicio_slider_image_order'] = "ordre";
	$columns['sgdelicio_slider_image'] = "image affichée";

	return $columns;
}
	add_action('manage_sgdelicio_slider_posts_custom_column', 'sgdelicio_content_show', 10,2);
function sgdelicio_content_show ($column, $post_id) {
		global $post;
		if($column == 'sgdelicio_slider_image') {
			echo the_post_thumbnail(array(100,100));
			}
		if($column == 'sgdelicio_slider_image_order') {
			echo $post->menu_order;
		}
}

/////////tri auto sur l'ordre ds la colonne admin pr le CPT SLIDER///

function sgdelicio_change_slides_order($query) {
	global $post_type, $pagenow;

	if($pagenow == 'edit.php' && $post_type == 'sgdelicio_slider') {
		$query-> query_vars['orderby'] = 'menu_order';
		$query-> query_vars['order'] = 'asc';
	}
}
add_action('pre_get_posts', 'sgdelicio_change_slides_order');