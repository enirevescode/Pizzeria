<?php
//création d'1 constante pour la version. dans la fonction il ne faut pas //mettre les '' car c'est 1 constante !
define('sgdelicio_version', '1.0.6');
//chargement de scripts - dar 1 n. de fonction propre
//chargement dans le front-end
function sgmontheme_scripts()
{
	// chargement des styles
	//lien bootstrap qui se charge en 1er et ensuite le mien
	wp_enqueue_style('sgdelicio_bootsrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), sgdelicio_version, 'all');
	//lien avec style
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css', array('sgdelicio_bootsrap-style'), sgdelicio_version, 'all');
	//lien avec js true pour qu'il aille dans le footer
	//là où doit se situer le js
	// chargement des scripts
	// pour que le menu hamburger fonctionne il faut télécharger la library js de bootstrap et donner son chemin
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), sgdelicio_version, true);
	//montheme.js est 1 fichier que g créé pour mettre des fonctions .js
	wp_enqueue_script('sgdelicio_script', get_template_directory_uri() . '/js/montheme.js', array('jquery', 'bootstrap-js'), sgdelicio_version, true);
}

add_action('wp_enqueue_scripts', 'sgmontheme_scripts');

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// chargement dans l'admin de wp
function sgdelicio_admin_scripts()
{

	//chargement des styles dans l'admin (can serve pr les créations de plugin)
	wp_enqueue_style('sgdelicio_bootsrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), sgdelicio_version);
}
add_action('admin_init', 'sgdelicio_admin_scripts');

///////////////////////////////////// UTILITAIRES

function sgdelicio_setup()
{
	// support vignettes, images à la une

	add_theme_support('post-thumbnails');
	// retirer la version de wp pour + de sécurité
	remove_action('wp_head', 'wp_generator');
	// enlève les guillemets à la française
	//remove_filter ('the_content', 'wptexturize');

	// support du titre - réduit les conflits avec les logiciels seo- ajouter auto le titre du site ds l'entête de celui-ci
	add_theme_support('title-tag');

	//activer dans la dashboard de wp l'onglet 'menu' pour leur gestion. on y met principal ou en-tête, menu footer...
	register_nav_menus(array('primary' => 'principal', 'secondary' => 'footer'));

	// Register Custom Navigation Walker
	require_once('includes/bootstrap-5-wordpress-navbar-walker-main.php');
}

add_action('after_setup_theme', 'sgdelicio_setup');


/////////////////////////Affichage date + Catégories utiles pour les articles

//ce modèle d'affichage 29 novembre 2016 

function sgdelicio_give_me_meta_01($date1, $date2, $cat, $tags)
{
	$chaine = 'publié le <time class="entry-date" datetime="';
	$chaine .= $date1;
	$chaine .= '">';
	$chaine .= $date2;
	$chaine .= '</time> dans la catégorie ';
	$chaine .= $cat;
	$chaine .= ' avec les étiquettes: ' . $tags;

	return $chaine;
}

////////////////// modifie le texte d'excerpt dans 1 article tronqué

function sgdelicio_excerpt_more($more)
{
	return ' <a class="more-link" href=" ' . get_permalink() . '">' . '[lire la suite]' . '</a>';
}
add_filter('excerpt_more', 'sgdelicio_excerpt_more');

//// faire apparaître les widgets et sidebares ds le dasboard

function sgdelicio_widgets_init(){
	register_sidebar(array(
		'name' => 				'Footer Widget Zone',
		'description' => 		'Widget affichés dans le footer : 4 au max',
		'id' => 					'Widgetizd-footer',
		'before_widget' => 	'<div id="%1$s" class="col-xs-12 col-sm-6 col-md-3 %2$s"><div class="inside-widget">',//on rend responsive
		'after_widget' => 	'</div></div>',
		'before_title' => 	'<h2 class="h3 text-center">',
		'after_title' => 		'</h2>',
	));
}
add_action('widgets_init', 'sgdelicio_widgets_init');
