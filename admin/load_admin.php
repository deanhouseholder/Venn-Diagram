<?php

defined('PP_DIR_ADMIN')     OR define('PP_DIR_ADMIN', PP_DIR_BASE . 'admin/');
defined('PP_DIR_ADMIN_INC') OR define('PP_DIR_ADMIN_INC', PP_DIR_ADMIN . 'inc/');
defined('PP_DIR_ADMIN_URL') OR define('PP_DIR_ADMIN_URL', PP_DIR_URL . 'admin/inc/');

// Enqueue general admin js/css includes
//function pp_add_admin_includes() {
//    wp_enqueue_script('pp-admin-scripts', PP_DIR_ADMIN_URL . 'js/app.js');
//    wp_enqueue_style('pp-admin-style', PP_DIR_ADMIN_URL . 'css/app.css');
//    wp_enqueue_style('pp-font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
//}
//add_action('admin_enqueue_scripts', 'pp_add_admin_includes');
