<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	wp_die( sprintf(
		__( '%s should only be called when uninstalling the plugin.', 'pdev' ),
		__FILE__
	) );
	exit;
}

$role = get_role( 'administrator' );

if ( ! empty( $role ) ) {
	$role->remove_cap( 'advent_of_code_manage' );
}
