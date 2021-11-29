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
	public function __construct() {
		error_log( 'Initializing admin menus' );
		Menus::init();
	}
}
