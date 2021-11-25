<?php get_header(); ?>

<h1>La Carte de Pizze</h1>

<article class="post">
<?php if( have_posts() ) : ?>

<div class="container">
	<?php while( have_posts() ) : the_post(); ?>
            <div class="card-group">
               <div class="card">
               <?php 
	$image_id = get_field( 'photo' ); // On récupère l'ID
	if( $image_id ) {	
		echo wp_get_attachment_image( $image_id, 'full' );
    } ?>
                  <div class="card-body">
                     <h5 class="card-title"><?php the_title(); ?></h5>
                     <p class="card-text"><?php echo get_post_meta( get_the_ID(), 'description', true ); ?></p>
                     <p class="card-text"><?php echo get_post_meta( get_the_ID(), 'prix', true ); ?>€</p>
                  </div>
               </div>
               
            </div>
            <?php echo '<br>'; ?>
        <?php endwhile; endif; ?>

<!-- <div class='row'>
	<div class='col-md-3'></div>
<div class='col-md-6'>
<div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
</div>
<div class='col-md-3'></div>
</div> -->

		</article>

	
<?php get_footer(); ?>