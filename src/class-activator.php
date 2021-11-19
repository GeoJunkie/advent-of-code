<?php

namespace AdventOfCode;

class Activator {

	public static function activate() {

		$role = get_role( 'administrator' );

		if ( ! empty( $role ) ) {
			$role->add_cap( 'advent_of_code_manage' );
		}
	}
}
