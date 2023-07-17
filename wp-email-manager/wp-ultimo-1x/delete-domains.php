/**
 * Delete a domain from the server when it removed added via WP Ultimo V1.0
 *
 * @param \Mercator\Mapping $mapping
 *
 */
add_action('mercator.mapping.deleted', 'wpem_delete_wp_ultimo_v1_domain_custom_integration', 10, 1);
function wpem_delete_wp_ultimo_v1_domain_custom_integration($mapping)
{
	/*
	 * Integration Name
     *
	 * Allowed integration name values:  aapanel, apiscp, cloudron, cwp, cpanel, cyberpanel, directadmin, enhance, fastpanel, froxlor, interworx, ispconfig, ispmanager, keyhelp, mailbox, mailcheap, mailcow, mailinabox, mailu, modoboa, plesk, poste, spanel, tinycp, twentyi, vestacp, virtualmin or webuzo
	 */
	$integration = '';

	/*
	 * Set up our integration's credentials
	 *
	 * Fill in the appropriate values based on the integration
	 *
	 * @see https://wpemailmanager.com/documentation/installation/wp-config-setup/ for what should be filled in for a given integration
	 */
	$credentials             = new StdClass();
	$credentials->provider   = $integration;
	$credentials->hostname   = '';
	$credentials->port       = '';
	$credentials->username   = '';
	$credentials->password   = '';
	$credentials->api_key    = '';
	$credentials->api_secret = '';

	// Get the integration's API
	$api = wp_email_manager_get_custom_api( $integration, $credentials );

	// Check if WP Ultimo integration is active
	$wp_ultimo_is_active = \WP_Email_Manager\Integrations\WP_Ultimo\Ultimo::get_instance()->is_active;

	if(false == $wp_ultimo_is_active || null == $api)
	{
		return;
	}

	// Delete the domain from the server
	$api->delete_domain($mapping->get_domain());
}