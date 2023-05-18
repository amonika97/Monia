<?php 
/*Template Name: Homepage */

get_header();
?>

<!--//carousel starts-->
<section>
   <div class="wrap">
        <div class="slide slide1">
            <div class="slide-content">
                <div class="container">
                    <div class="text">
                        <h1 class="">Stainless Steel Straws</h1>
                        <p >Stainless steel straws are one of the safest and most convenient options for straws. Available in multiple cup types & colors.</p>
                        <a href="http://localhost/wordpress/products/"><button class="btn text-white ">Buy Straws</button></a>
                    </div>
                </div>
             </div>
        </div>
        <div class="slide slide2">
            <div class="slide-content">
                <div class="container">
                    <div class="text">
                        <h1 class="">Coconut Bowls</h1>
                        <p >100% natural handcrafted coconut shell bowl. Designed to be used over and over again for hot or cold food</p>
                        <a href="http://localhost/wordpress/products/"><button class="btn text-white ">Buy Bowls</button></a>
                    </div>
                </div>
             </div>
        </div>
        <div class="slide slide3">
            <div class="slide-content">
                <div class="container">
                    <div class="text">
                        <h1 class="">Razor Blade</h1>
                        <p>You must try plastic free shaving - it is great! It is literally one of my favourite swaps and I would never go back to plastic razors now.</p>
                        <a href="http://localhost/wordpress/products/"><button class="btn text-white ">Buy Blade</button></a>
                    </div>
                </div>
             </div>
        </div>
        <div class="slide slide4">
            <div class="slide-content">
                <div class="container">
                    <div class="text">
                        <h1 class="animation"> Toothbrush</h1>
                        <p >Bamboo toothbrushes are a good option for people who want to reduce their impact on the environment. It's a sustainable material, and it's biodegradable.</p>
                        <a href="http://localhost/wordpress/products/"><button class="btn text-white ">Buy Toothbrush</button></a>
                    </div>
                </div>
             </div>
        </div>
                    
            <i id="arrow-right" class="fa-solid fa-chevron-right"></i>
            <i id="arrow-left" class="fa-solid fa-chevron-left"></i>
    </div>
</section>
<!--//carousel-->
<!--//cards-->
<section>
  <div class="cards">

    <?php
      // Get the latest 4 posts
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
    ?>

    <div class="card">
      <div class="box">
        <div class="content">
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <a href="http://localhost/wordpress/post/">Read More</a>
          <p>Posted on <?php the_date(); ?></p>
        </div>
      </div>
    </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</section>
<!--//cards-->
<section>
    <div class="map">
        <div class="conteiner d-flex justify-content-center align-items-center">
            <div class="map-content d-flex justify-content-center">
                <div class="map-text d-flex align-items-center justify-content-center">
                    <div class="map-text-content">
                        <h1 class="world">We Can have better<span> Word</span></h1>
                        <h3>Join the Green Revolution</h3>
                        <p class="deals"> <strong>Sign Up for Our Eco-Product Deals and Receive a Free Welcome Gift!</strong></p>
                        <div class="buttons-map d-flex gap-4">
                             <div class="button-two">
                                 <a href="http://localhost/wordpress/login-2/"><button class="btn join-us text-white ">JOIN US NOW</button></a>
                             </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</Section>
<!--//aboutus starts-->
<section>
    <div class="aboutus">
        <div class="container d-flex">
            <div class="people">
                <img src="<?= get_template_directory_uri() . "/assets/images/people.png" ?>" alt="">
                <h3>Our Values</h3>
                <p>Part of our philosophy as an ethical business is to empower and support developing communities by working together to create environmentally friendly, unique plastic-alternatives.</p>
            </div>
            <div class="products">
                <img src="<?= get_template_directory_uri() . "/assets/images/product.png" ?>" alt="">
                <h3>Our Products</h3>
                <p> Monia is a socially responsible company and everything we make is reusable, high-quality and absolutely affordable. Our values in eco sustainability motivates us to create earth friendly products.</p>
            </div>
            <div class="projects">
                <img src="<?= get_template_directory_uri() . "/assets/images/idea.png" ?>" alt="">
                <h3>Our Projects</h3>
                <p> Our philosophy centres around the conservation and protection of the Earth. We are a member of the 1% for the Planet foundation and pledge 1% of our yearly turnover to the preservation & restoration. </p>
            </div>
        </div>
    </div>
</section>
<!--//aboutus ends-->



<?php 

get_footer();

?>