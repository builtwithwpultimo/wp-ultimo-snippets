<?php

/**
 * We need to hook as soon as we can, to make sure we
 * modify the steps before they get used
 */
 
add_action('init', function() {
	/**
	 * First, we add a new step. The ID of this step is customer-info
	 * We also pass a order value of 33, that means that our custom step will sit between
	 * the third (order 30) and forth (order 40) steps.
	 */
	wu_add_signup_step('customer-info', 33, array(
		'name' => 'User Information',
	));
});
