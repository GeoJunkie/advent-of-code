<?php

namespace AdventOfCode;

class Activator {

	public static function activate() {

		$role = get_role( 'administrator' );

		if ( ! empty( $role ) ) {
			$role->add_cap( 'adventwp_manage' );
		}
	}
}
