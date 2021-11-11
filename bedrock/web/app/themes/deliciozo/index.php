<?php get_header(); ?>

<!--insertion d'1 boucle-->

<section>
   <div class="container">
      <?php if (have_posts()) : ?>
         <?php while (have_posts()) :  the_post(); ?>

            <div class="card-group">
               <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
               <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
            </div>
         <?php endwhile; ?>
      <?php else : ?>
         <div class="row">
            <div class="col-xs-12">
               <p>y a pas de résultats</p>
            </div>
            <!--fin row-->
         <?php endif; ?>
         </div>
         <!--fin container-->


</section>

<?php get_footer(); ?>