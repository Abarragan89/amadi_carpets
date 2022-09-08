<?php 
    function amadi_files() {
        wp_enqueue_style(
            'amadi_main_styles',
            get_stylesheet_uri()
        );
        wp_enqueue_style(
            'home_page_styles',
            get_theme_file_uri('/homePageStyles/homePage.css')
        );
    }
    add_action('wp_enqueue_scripts', 'amadi_files');
?>