<?php get_header(); ?>

<!--insertion d'1 boucle-->
<?php if(have_posts()):
    while(have_posts()):
          the_post();
          the_title(); echo '<br> <br> <br> <br>' ;
    endwhile;
else:
    echo "y a pas de résultat";
endif;

  
  
?>
<section>
   <div class="container">
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


</section>

<?php get_footer(); ?>