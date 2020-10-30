<?php

function remove_wpultimo_network_dashboard_widgets() {

	remove_meta_box( 'wp-ultimo-setup', 'dashboard-network', 'normal' );
	remove_meta_box( 'wp-ultimo-news', 'dashboard-network', 'side' );
	remove_meta_box( 'wp-ultimo-summary', 'dashboard-network', 'normal' );
	remove_meta_box( 'wp-ultimo-activity-stream', 'dashboard-network', 'normal' );
  
}
add_action( 'wp_network_dashboard_setup', 'remove_wpultimo_network_dashboard_widgets' );

?>
