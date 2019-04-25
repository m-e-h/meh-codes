<?php
/**
 * Theme functions file.
 *
 * @package   mehcodes
 * @author    Marty Helmick <info@martyhelmick.com>
 * @copyright 2018 Marty Helmick
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://github.com/m-e-h/meh.codes
 */

add_action( 'wp_enqueue_scripts', 'meh_scripts' );

/**
 * Enqueue scripts and styles.
 */
function meh_scripts() {
	wp_enqueue_style(
		'meh-style',
		get_theme_file_uri( 'style.css' ),
		[
			'forsite-style',
		],
		wp_get_theme()->get( 'Version' )
	);
}
