<?php

/**
 * Adds a domain to the server when it is added via WP Ultimo V1.0
 *
 * @param \Mercator\Mapping $mapping
 *
 */
add_action('mercator.mapping.created', 'wpem_add_wp_ultimo_v1_domain', 10, 1);
function wpem_add_wp_ultimo_v1_domain($mapping)
{
	// Get the current email server api integration
	$api = wp_email_manager_get_api();
	
	// Check if WP Ultimo integration is active
	$wp_ultimo_is_active = \WP_Email_Manager\Integrations\WP_Ultimo\Ultimo::get_instance()->is_active;
	
	if(false == $wp_ultimo_is_active || null == $api)
	{
		return;
	}

	// Add domain to the server
	$api->add_domain($mapping->get_domain());
}
?>