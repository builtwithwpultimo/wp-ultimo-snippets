<?php 

//WP Email Manager Sunrise Constant
define('WP_EMAIL_MANAGER_SUNRISE_VERSION', '0.0.1');
$wp_email_manager_sunrise = defined('WP_PLUGIN_DIR') 
? WP_PLUGIN_DIR . '/wp-email-manager/includes/class-sunrise.php'
: WP_CONTENT_DIR . '/plugins/wp-email-manager/includes/class-sunrise.php';

if (file_exists($wp_email_manager_sunrise)) {
	require_once $wp_email_manager_sunrise;
	WP_Email_Manager\Sunrise::init();
} 

?>