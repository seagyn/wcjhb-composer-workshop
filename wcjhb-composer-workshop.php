<?php
/**
 * Plugin Name:  WordCamp Joburg Composer Workshop
 * Plugin URI:   https://www.seagyndavis.com/wcjhb2017/
 * Description:  Just a basic plugin to get us going.
 * Version:      1.0
 * Author:       Seagyn Davis
 * Author URI:   https://www.seagyndavis.com/
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  wcjhb-composer-workshop
 */

// require __DIR__ . '/vendor/autoload.php';

function wcjhb_options_page() {
	add_menu_page(
		'WCJHB Composer Workshop',
		'Composer Workshop',
		'manage_options',
		'wcjhb_workshop',
		'wcjhb_options_page_html',
		'',
		20
	);
}
add_action( 'admin_menu', 'wcjhb_options_page' );

function wcjhb_options_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
	</div>
	<?php
}
