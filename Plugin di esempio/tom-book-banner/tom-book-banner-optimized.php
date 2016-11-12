<?php
/**
 * Plugin Name: Tom Book Banner
 * Plugin URI: http://wptorino.it/
 * Description: Show a fixed banner to promote your brand new e-book.
 * Version: 1.1
 * Author: Thomas Vitale
 * Author URI: https://thomasvitale.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wptorino
 * Domain Path: /languages
 *
 * @package TomBookBanner
 */

/**
 * Print an html banner with the promotional message.
 *
 * @since 1.0
 */
function tom_book_banner_html() {
?>
	 <div class="book-banner">
	 	<p>
			<?php _e( 'Sei appassionato di libri?', 'wptorino' ); ?>
			<?php _e( '<a href="#">Scarica</a> gratuitamente il mio nuovo e-book!', 'wptorino' ); ?>
		</p>
	 </div>
<?php }

add_action( 'wp_footer', 'tom_book_banner_html', 1 );

/**
 * Load the css to style the html banner.
 *
 * @since 1.0
 */
function tom_load_css() {
	wp_enqueue_style( 'tom-book-banner', plugins_url( 'css/style.css', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'tom_load_css' );
