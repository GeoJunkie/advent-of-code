<?php
namespace AdventOfCode;

use Admin\Menus;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Loads all admin functions
 */
class Admin {
	public static function init() {
		error_log( 'Initializing admin menus' );
		Admin\Menus::init();
	}
}
