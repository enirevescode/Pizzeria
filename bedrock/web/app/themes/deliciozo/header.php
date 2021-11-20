<!doctype html>
<!--balise wp pour reconnaissance auto de la langue cela remplace lang="fr"-->
<html <?php language_attributes(); ?>>

<head>
  <title>Deliciozo Pizzeria</title>

  <a href="<?php echo home_url( '/' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ikone_pizza.png" type="image/x-icon"></a>
  <!-- Required meta tags -->
  <!-- balise wp remplace "utf-8"-->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- meta données publicitaires voir help pr categorie et tag-->

<?php if(is_home()): ?>
    <meta name="description" content="Le site d'une pizzeria à Paris en France en consommation sur place ou à emporter, commande sans livraison, click 'n collect de pizza Napolitaines"/>
<?php endif; ?>

<?php if(is_front_page()): ?>
    <meta name="description" content="Le site d'une pizzeria à Paris en France en consommation sur place ou à emporter, commande sans livraison, click 'n collect de pizza Napolitaines"/>
<?php endif; ?>

<?php if(is_page() && !is_front_page()): ?>
    <meta name="description" content="Le site d'une pizzeria à Paris en France en consommation sur place ou à emporter, commande sans livraison, click 'n collect de pizza Napolitaines"/>
<?php endif; ?>

  <?php wp_head(); ?>

</head>
<!-- La classe home permet d’appliquer des styles différents des autres pages. logged pr les users connectés admin-bar pr la bar WP-->
<body <?php body_class(); ?>>
<body class="home blog">

<!-- permet aux extensions d’écrire du code au début du body. C’est utile notamment pour Yoast qui vient y placer le Google Tag Manager et autres codes de scripts. -->
<?php wp_body_open(); ?>

  <header>

  <a href="<?php echo home_url( '/' ); ?>">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!--fonction qui permet de ramener à la page accueil-->
      <div class="container-fluid">
        <a class="navbar-brand my-auto" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/ikone_pizza.png" alt="" width="45" height="auto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo home_url('/'); ?>">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Carte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Commande</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Galerie Photos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nos adresses
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Paris 1er</a></li>
                <li><a class="dropdown-item" href="#">Saint-Mandé</a></li>
                <li><a class="dropdown-item" href="#">Neuilly/Seine</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="collapse navbar-collapse" id="main-menu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>
    </div>
    </div>
    </nav>
    </div>

    <!--entete-->
    <div class="jumbotron img-fluid">
      <h1>Deliciozo</h1>
      <div class="entete">Autentica Pizza Napoletana</div>
      <p class="entete2">Benvenuto !</p>
      <a class="btn btn-lg" href="#" role="button">Réservez !</a>
    </div>


  </header>