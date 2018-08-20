<?php
define('PP_DIR_PUBLIC', PP_DIR_BASE . 'public/');
define('PP_DIR_PUBLIC_URL', PP_DIR_URL . 'public/');

function pp_check_url() {
    if (strpos($_SERVER['REQUEST_URI'], '/') !== false) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('pp-main-script', PP_DIR_PUBLIC_URL . 'js/app.js');
        wp_enqueue_script('pp-image-map-script', PP_DIR_PUBLIC_URL . 'js/image-map-1.0.8/image-map.min.js');
        wp_enqueue_style('pp-main-style', PP_DIR_PUBLIC_URL . 'css/app.css');
        add_filter('the_post', 'pp_venn_diagram');
    }
}
add_action('init', 'pp_check_url');

function pp_venn_diagram($posts) {
    //do all the stuff here

    $posts = null;
    $post = new stdClass();
    $post->post_content = "Confirm Content";
    $post->post_title = "Confirm";
    $post->post_type = "page";
    $post->comment_status = "closed";
    $posts[] = $post;
    return $posts . "hi";
}
