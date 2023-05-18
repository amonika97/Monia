<?php
get_header();
?>

<section>
  <div class="cards"> 
       <div class="box ">
          <div class="content">
              <?php if ( have_posts() ) {
                   while ( have_posts() ){

                          the_post(); 
                        get_template_part('template-parts/content', 'article');

                    }
               }
               ?>
            </div>
       </div>
  </div>
</section>

<?php

get_footer();

?>