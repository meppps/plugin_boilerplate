<?php
    // Add scripts
    function mp_add_scripts(){
        // Add Main CSS
        wp_enqueue_style('yts-main-style', plugins_url(). '/mikeys-plugin/css/style.css');
        // Add Main JS
        wp_enqueue_script('yts-main-script', plugins_url(). '/mikeys-plugin/js/main.js');
        // add google script
        wp_register_script('google','https://apis.google.com/js/platform.js');
        wp_enqueue_script('google');
    }

    // Load scripts
    add_action('wp_enqueue_scripts', 'mp_add_scripts');

