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
		add_menu_page( 'Advent of Code Settings', 'Advent of Code', 'manage_options', 'advent_of_code_settings_page', array( 'this' => 'options' ), 'dashicons-code', 79 );
	}
}
