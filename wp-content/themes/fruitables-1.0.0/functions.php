<?php
function load_assets() {
    // Enqueue Google Web Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap', [], null);

    // Enqueue Icon Font Stylesheets
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', [], null);
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', [], null);

    // Enqueue Library Stylesheets
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', [], null);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', [], null);

    // Enqueue Bootstrap Stylesheet
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], null);

    // Enqueue Custom Stylesheet
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', [], null);

    // Enqueue JavaScript Libraries
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', [], null, true);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', ['jquery'], null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', [], null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', [], null, true);
    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', [], null, true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', [], null, true);

    // Enqueue Custom JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'load_assets');
