<?php

/**
 * Deletes the domain and associated email accounts from the server when custom domain is removed from WP Ultimo
 *
 * @param $deleted bool
 * @param $domain \WP_Ultimo\Models\Domain
 */
add_action('wu_domain_post_delete', 'wpem_delete_wp_ultimo_domain', 10, 2);
function wpem_delete_wp_ultimo_domain($deleted, $domain)
{
	// Get the current email server api integration
	$api = wp_email_manager_get_api();

	// Check if WP Ultimo integration is active
	$wp_ultimo_is_active = \WP_Email_Manager\Integrations\WP_Ultimo\Ultimo::get_instance()->is_active;

	if(false == $wp_ultimo_is_active || null == $api)
	{
		return;
	}

	if(true == $deleted)
	{
		// Delete associated email accounts
		wp_email_manager_delete_accounts_by_domain($domain->get_domain());
		
		// Delete the domain from the server 
		wp_email_manager_delete_domain_from_server($domain->get_domain());
	}
}

?>