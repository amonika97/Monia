<?php

function process_contact_form() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        // Process the form data (e.g., send email, save to database, etc.)
        // You can customize this part based on your requirements
    
        // Example: Send an email
        $to = 'info@wordpress.com';
        $subject = 'New Contact Form Submission';
        $message = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";
        $headers = "From: $name <$email>";
    
        if (wp_mail($to, $subject, $message, $headers)) {
            // Form submission successful
            wp_redirect(get_permalink()); // Redirect back to the contact page
            exit;
        } else {
            // Form submission failed
            wp_die('Form submission failed. Please try again.'); // Display an error message
        }
    }
}
add_action('template_redirect', 'process_contact_form');



?>





<?php
function monia_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme' , 'monia_theme_support');


function monia_menus(){
    $locations = array(
        'primary' => "Home page menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'monia_menus');




function Monia_styles() {

     wp_enqueue_style( 'monia-style', get_template_directory_uri() . '/css/style.css');
     wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
     wp_enqueue_style( 'bootstrap',  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' );
     wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );
}

add_action( 'wp_enqueue_scripts', 'Monia_styles' );


function Monia_scripts() {
     wp_enqueue_script( 'jquery-library', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), null, 'all', true );
     wp_enqueue_script( 'bootstrap-library', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js', array(), null, 'all', true );
     wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', array('jquery-library'), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'Monia_scripts' );



?>