<?php
/* --------------------------------
Plugin name: Form double optin
Plugin URI: https://adava.es/plugins/form-double-optin
Description: Secure form with double optins
Version: 0.0.1
Author: Dayana Roca
License:
-------------------------------  */

/* ----------------- exit --------------------*/
if (!defined('ABSPATH')) {
    exit;
}

define('DRDEV_FORM_DBOPT_URL', plugin_dir_url(__FILE__));
define('DRDEV_FORM_DBOPT_PATH', realpath(plugin_dir_path(__FILE__)));

register_activation_hook(__FILE__, 'drdev_form_dbopt_activate');
register_deactivation_hook(__FILE__, 'drdev_form_dbopt_deactivate');

function drdev_form_dbopt_activate() {

}

function drdev_form_dbopt_deactivate() {
    flush_rewrite_rules();
}

function drdev_form_dbopt_load() {
  if ( did_action( 'elementor/loaded' ) ) {
      require_once( DRDEV_FORM_DBOPT_PATH . 'admin/main.php' );
  }
}
add_action( 'plugins_loaded', 'drdev_form_dbopt_load' );