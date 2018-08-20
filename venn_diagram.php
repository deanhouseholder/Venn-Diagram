<?php

/**
* Plugin Name: Venn Diagram
* Description: Display a Venn Diagram with custom hover-over modals
* Version: 1.0
* Author: Dean Householder
* Author URI: https://www.deanhouseholder.com
* Text Domain: venn-diagram
**/

// Exit if Accessed Directly
defined('ABSPATH') OR exit;

defined('PP_DIR_BASE')     OR define('PP_DIR_BASE', dirname(__FILE__) . '/');
defined('PP_DIR_BASE_INC') OR define('PP_DIR_BASE_INC', PP_DIR_BASE . 'inc/');
defined('PP_DIR_URL')      OR define('PP_DIR_URL', plugins_url('/', __FILE__));
defined('PP_PLUGIN_FILE')  OR define('PP_PLUGIN_FILE', __FILE__);
defined('PP_APP_NAME')     OR define('PP_APP_NAME', 'Venn Diagram');

// Include only files needed for front-end or back-end admin
if (!is_admin()) {
    require_once(PP_DIR_BASE . 'public/load_frontend.php');
} else {
    require_once(PP_DIR_BASE . 'admin/load_admin.php');
}
