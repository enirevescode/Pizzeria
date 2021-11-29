<?php get_header(); ?>

<h1>La Carte de Pizze</h1>
<br>
<br>
<!-- <article class="post"> -->
   <?php if (have_posts()) : ?>
      <div class="container">
         <?php while (have_posts()) : the_post(); ?>
         <div class="card border-primary">
            <div class="card-img-top">
               <?php
               $image_id = get_field('photo'); // On récupère l'ID
               if ($image_id) {
                  echo wp_get_attachment_image($image_id, 'medium');
               } ?>
               <div class="card-body">
                  <h5 class="card-title"><?php echo get_post_meta(get_the_ID(), 'pizza', true); ?></h5>
                  <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'description', true); ?></p>
                  <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'prix', true); ?> €</p>
               </div>
            </div>
         </div>
      </div>
<br>
<br>
<?php endwhile; endif; ?>
<!-- </article> -->



<?php get_footer(); ?>