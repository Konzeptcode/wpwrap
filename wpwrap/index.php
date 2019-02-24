<?php
/**
 * Plugin Name:  WP Wrap
 * Plugin URI:   https://wpwrap.konzeptcode.com/
 * Description:  Adds an outer and an inner wrap to your blocks
 * Version:      0.1.0
 * Author:       Talha Sariyürek
 * Author URI:   https://talhasariyuerek.com
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  wpwrap
 */

function wpwrap_assets() {
	wp_enqueue_script(
		'wpwrap',
		plugins_url( 'wpwrap.js', __FILE__ ),
		array( 'wp-blocks', 'wp-editor', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) )
	);

}
add_action( 'enqueue_block_editor_assets', 'wpwrap_assets' );
