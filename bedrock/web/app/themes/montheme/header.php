<!doctype html>
<!--balise wp pour reconnaissance auto de la langue cela remplace lang="fr"-->
<html <?php language_attributes(); ?>>
  <head>
    <title>VENTE SAINT-POL DE LEON</title>
    <!-- <link rel="icon" type= "image" href="favicon.ico" /> -->
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/drapeau.jpg" type="image/x-icon"></a>
    <!-- Required meta tags -->
    <!-- balise wp remplace "utf-8"-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="vente, maison, saint-pol-de-léon, finistère, maison à la mer">

    <!-- insertion de la feuille de style -->
    <?php wp_head (); ?>

  </head>
  <body>
   <header>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
       
        <h1 class="display-4">DEGEMER MAT !</h1>
        <p class="lead">Venez découvrir votre nouvelle Maison de 190 m<sup>2</sup> avec terrasse et un grand jardin de 230 m<sup>2</sup> à Saint-Pol de Léon - Finistère</p>
      </div>
      
    </div>
    <!-- code pour afficher dans le dasboard au niv apparence -> menus -> notre menu bootstrap-->

    <?php
      wp_nav_menu( array( 
        'menu'              =>'top-menu',
        'theme_location'    =>'primary',
        'depth'             =>2,
        'container'         =>'div',
        'container_class'   =>'collapse navbar-collapse',
        'container_id'      =>'navbar',
        'menu_class'        =>'nav navbar-nav ml-auto',
        'fallback_cb'       =>'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    ); ?>
    <!-- fin de la fonction -->

    <!-- menu navigation -->
    <div id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg_light fixed-top">
    <a href="<?php echo home_url( '/' ); ?>"> <!--fonction qui permet de ramener à la page accueil-->  
    <a class="navbar-brand ml-4" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/Bretagne-Drapeau.png" width="40" height="40" alt="drapeau breton"></a></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: aliceblue">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text ml-3 mr-5" style="color: aliceblue" href="#quartier">LE QUARTIER<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text ml-5 mr-5"  style="color: aliceblue" href="#maison">LA MAISON</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text ml-5 mr-5" style="color: aliceblue" href="#contact">CONTACT</a>
          </li>
          
        </ul>
      </div>
    </nav>
  </div>
  </header>