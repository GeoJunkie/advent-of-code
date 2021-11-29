<?php
namespace AdventOfCode\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Loads admin menus
 */
class Menus {
	public static function init() {
		error_log( 'Loading admin menus' );
		add_action( 'admin_menu', 'AdventOfCode\Admin\Menus::load_menus' );
	}

	public static function load_menus() {
		add_menu_page( 'Advent of Code Settings', 'Advent of Code', 'manage_options', 'advent_of_code_settings_page', array( 'this' => 'options' ), 'dashicons-code', 79 );
	}
}
