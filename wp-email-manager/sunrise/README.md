# WP Email Manager - Sunrise

If your `sunrise.php` file (located at the wp-content folder) is not writable, WP Email Manager may not work as expected when integrated with WP Ultimo Version 2.0+. If that’s the case, please follow these steps:

- Ensure WP Ultimo’s sunrise.php is configured and you are using WP Ultimo version 2.0.4 +.
- Open the file and add the following after WP Ultimo’s content:

```
//WP Email Manager Sunrise Constant
define('WP_EMAIL_MANAGER_SUNRISE_VERSION', '0.0.1');
$wp_email_manager_sunrise = defined('WP_PLUGIN_DIR') 
? WP_PLUGIN_DIR . '/wp-email-manager/includes/class-sunrise.php'
: WP_CONTENT_DIR . '/plugins/wp-email-manager/includes/class-sunrise.php';

if (file_exists($wp_email_manager_sunrise)) {
	require_once $wp_email_manager_sunrise;
	WP_Email_Manager\Sunrise::init();
} 

```
