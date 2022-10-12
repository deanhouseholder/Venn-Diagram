<?php
define('PP_DIR_PUBLIC', PP_DIR_BASE . 'public/');
define('PP_DIR_PUBLIC_URL', PP_DIR_URL . 'public/');

function pp_enqueue() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('pp-main-script', PP_DIR_PUBLIC_URL . 'js/app.js');
    wp_enqueue_script('pp-image-map-script', PP_DIR_PUBLIC_URL . 'js/node_modules/image-map/dist/image-map.jquery.js');
    wp_enqueue_style('pp-main-style', PP_DIR_PUBLIC_URL . 'css/app.css');
}
add_action('wp_head', 'pp_enqueue');
