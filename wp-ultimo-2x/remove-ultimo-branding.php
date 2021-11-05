<?php

/**
 * Filter for hiding WP Ultimo's header and footer in the administration panel.
 */

add_filter('wp_ultimo_remove_branding', '__return_true');

?>
