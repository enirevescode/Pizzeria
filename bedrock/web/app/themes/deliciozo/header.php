<!doctype html>
<!--balise wp pour reconnaissance auto de la langue cela remplace lang="fr"-->
<html <?php language_attributes(); ?>>
  <head>
    <title>Deliciozo Pizzeria</title>
    <!-- <link rel="icon" type= "image" href="favicon.ico" /> -->
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/logo.ico" type="image/x-icon"></a>
    <!-- Required meta tags -->
    <!-- balise wp remplace "utf-8"-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="">

    <!-- insertion de la feuille de style -->
    <?php wp_head (); ?>

  </head>
  <body>
   <header>

    <nav class="navbar navbar-expand-md navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
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

<img src="<?php echo get_template_directory_uri(); ?>/assets/restaurant.jpg" class="img-fluid" alt="salle de restauration">
    </header>