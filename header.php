<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monia</title>
    
    <?php wp_head(); ?>
    <style>
    .wrap .slide1 {
      background-image: url('<?php echo get_template_directory_uri() . '/assets/images/metalstraw.jpg'; ?>');
    }

    .wrap .slide2{
        background-image: url('<?php echo get_template_directory_uri() . '/assets/images/cocbowls.jpg'; ?>');

    }
    .wrap .slide3{
        background-image: url('<?php echo get_template_directory_uri() . '/assets/images/razorblade.jpg'; ?>');

    }
    .wrap .slide4{
        background-image: url('<?php echo get_template_directory_uri() . '/assets/images/toothbrush.jpg)'; ?>');

    }
    .map .map-content ::after{
        background-image: url('<?php echo get_template_directory_uri() . '/assets/images/wordmap.png)'; ?>');
    }
    </style>
</head>
<body>
<header>
    <nav class="navigation"id="navArea">
        <div class="container d-flex">
            <div class="logo">
                <?php
                if(function_exists('the_custom_logo')){
                    
                         $custom_logo_id = get_theme_mod('custom_logo');
                         $logo = wp_get_attachment_image_src($custom_logo_id);
                  }
                
                ?>
                <img  class="logo" src="<?php echo $logo[0] ?>" alt="">
            </div>
               <?php 
                   wp_nav_menu(
                    array(
                      'menu' => 'primary',
                      'container' =>'',
                      'theme_location' => 'primary',
                      'items_wrap' => '<ul id="" class="menu custom-menu d-flex ">%3$s</ul>'
                    )
                  );                  
               ?>
            <div class="bars">
                <i  class="fa-solid fa-bars">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </i>
            </div>
            <div class="cart d-flex">
                <i class="fa-sharp fa-solid fa-cart-shopping fa-xl"></i>
                <i class="fa-regular fa-heart fa-xl"></i>
                <i id="searchBtn" class="fa-solid fa-magnifying-glass fa-xl"></i>
            </div>
            <div class="search">
                <span class="icon">
                    <i id="searchClose"class="fa-solid fa-xmark fa-lg"></i>
                </span>
            </div>
            <div class="searchBox">
                <input type="text" placeholder="Search...">
            </div>

        </div>
        </nav>
</header>
<!--//header ends-->



</body>