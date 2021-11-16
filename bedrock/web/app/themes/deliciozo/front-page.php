<?php get_header(); ?>

<section class="histoire">
   <div class="row mb-5 mx-5" style="text-align: justify">
      <div class="col-6">
         <p class="hist1">
            La Pizzeria Deliciozo, c'est une pizzeria hyper chaleureuse et authentique où, comme à Naples, on déguste une somptueuse Margherita recouverte de bons produits et servie avec de gros bords généreux. Deux fours de Picolono Gaspacho de 3 tonnes, des tomates San Marzano de Paolina Rappi, de la mozzarella de bufflonne de Sylvester Stallone qui arrive en direct 3 fois par semaine. Niveau prix - en achetant tout en direct des</p>
      </div>
      <div class="col-6">
         <p class="hist2">
            producteurs et avec nos 250 places assises - on arrive à recréer en plein cœur de Paris, la magie de Naples. Idem sur la bière brassée maison avec des pintes de blanche ou brune et nos glaces italiennes maison au lait de bufflonne. Si jamais vous voulez arroser ces bonnes nouvelles, on a le plus gros bar de Paris : 500 références d’alcool et des cocktails de dingue orchestrés par Ricardo Boulbito.
         </p>
      </div>
   </div>

   <div class="row mx-5" style="text-align: justify">

      <p><em> La Pizzeria Deliciozo<em>, c'est une pizzeria hyper chaleureuse et authentique où, comme à Naples, on déguste une somptueuse Margherita recouverte de bons produits et servie avec de gros bords généreux. Deux fours de Picolono Gaspacho de 3 tonnes, des tomates San Marzano de Paolina Rappi, de la mozzarella de bufflonne de Sylvester Stallone qui arrive en direct 3 fois par semaine. Niveau prix - en achetant tout en direct des producteurs et avec nos 250 places assises - on arrive à recréer en plein cœur de Paris, la magie de Naples. Idem sur la bière brassée maison avec des pintes de blanche ou brune et nos glaces italiennes maison au lait de bufflonne. Si jamais vous voulez arroser ces bonnes nouvelles, on a le plus gros bar de Paris : 500 références d’alcool et des cocktails de dingue orchestrés par Ricardo Boulbito.</p>
   </div>
</section>

<section class="resa">
   <div class="row mx-5 my-5" style="text-align: justify">
      <div class="col-3">
         <p>Résa</p>
      </div>
      <div class="col-6">
         <p>La team Popolare prend les résas sur le service du midi et du soir, pour vos funky déjeuners et vos cool dîners. Vous pouvez aussi passer nous voir à l’improviste, notre hôtesse vous installera directement ou vous fera patienter le temps qu’une table se libère.</p>
      </div>
      <div class="col-3 d-grid gap-3">
         <button type="button" class="btn1 btn-primary">Réservez</button>
         <button type="button" class="btn2 btn-primary">Info tarif</button>
      </div>

      <div class="row mx-5 my-5">
<div class="col-3">
   <p>Adresse</p>
</div>
<div class="col-6">
   <p>15, Avenue des Champignons dorés - 995960 BIGNOU LE CROQUANT</p>
</div>
<div class="col-3 d-grid gap-3">
<button type="button" class="btn3 btn-primary">Plan et Itinéraire</button>
<button type="button" class="btn4 btn-primary">Info tarif</button>
</div>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <?php if (have_posts()) : ?>
         <!--insertion d'1 boucle-->
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