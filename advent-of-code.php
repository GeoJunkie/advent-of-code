<?php
/**
 * Plugin Name:       Advent of Code
 * Plugin URI:        https://github.com/GeoJunkie/advent-of-code
 * Description:       A plugin framework for the Advent of Code challenges.
 * Version:           1.0.0
 * Requires at least: 5.3
 * Requires PHP:      7.4.0
 * Author:            Mike Straw
 * Author URI:        https://github.com/GeoJunkie/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       advent-of-code
 * Domain Path:       /assets/lang
 */

namespace AdventOfCode;

/*
	Copyright (C) 2021 Mike Straw

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License along
	with this program; if not, write to the Free Software Foundation, Inc.,
	51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ADVENT_OF_CODE_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook(
	ADVENT_OF_CODE_DIR,
	function () {
		include_once ADVENT_OF_CODE_DIR . 'src/class-activator.php';
		Activator::activate();
	}
);

register_deactivation_hook(
	__FILE__,
	function () {
		include_once ADVENT_OF_CODE_DIR . 'src/class-deactivator.php';
	}
);

/**
 * Load the autoloader to bring in class files automattically
 */

require_once ADVENT_OF_CODE_DIR . 'src/loader.php';

/**
 * Load the plugin class.
 */

Main::start();
