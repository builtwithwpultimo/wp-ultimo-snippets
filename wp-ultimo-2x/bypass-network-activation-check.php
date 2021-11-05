<?php

/**
 * Filter for bypassing the network activation check.
 * Useful for custom installs where WP Ultimo and its add-ons might be located on the mu-plugins folder. 
 * Sunrise.php file was also updated since BETA 14 to add the mu-plugins folder as a possible place to locate and import the class-sunrise.php file from.
 */

add_filter('wp_ultimo_skip_network_active_check', '__return_true');

?>
