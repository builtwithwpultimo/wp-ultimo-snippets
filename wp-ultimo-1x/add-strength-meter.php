<?php

/**
 * Adds a strength meter to the password field
 */
add_filter('wp_ultimo_registration_steps', 'add_strength_meter');

function add_strength_meter($steps) {

// Add the flag to the user_pass field
$steps['account']['fields']['user_pass']['display_force'] = true;

return $steps;

}
