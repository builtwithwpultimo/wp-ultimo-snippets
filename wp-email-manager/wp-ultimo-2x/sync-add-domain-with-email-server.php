<?php

/**
 * Adds a domain to the server when it is added via WP Ultimo
 *
 * @param string $domain The domain name being mapped.
 * @param int    $site_id ID of the site that is receiving that mapping.
 */
add_action('wu_add_domain', 'wpem_add_wp_ultimo_domain', 10, 2);
function wpem_add_wp_ultimo_domain($domain, $site_id)
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
	$api->add_domain($domain);
}

?>