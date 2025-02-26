<?php
/**
 * Plugin Name: لود تنبل
 * Plugin URI: https://github.com/MohammadTG/WP-rocket-lazy-load-FA
 * Description: با لود کردن آرام و آهسته تصاویر و مدیا ها در وردپرس سرعت را افزایش دهید!
 * Version: 2.3.9
 * Requires at least: 4.9
 * Requires PHP: 7.3
 * Author: Mohammad Taher.GH
 * Author URI: https://www.karlancer.com/profile/269023
 * Text Domain: rocket-lazy-load
 * Domain Path: /languages
 *
 * @package RocketLazyloadPluginFA
 */

defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );

define( 'ROCKET_LL_VERSION', '2.3.9' );
define( 'ROCKET_LL_WP_VERSION', '4.9' );
define( 'ROCKET_LL_PHP_VERSION', '7.3' );
define( 'ROCKET_LL_BASENAME', plugin_basename( __FILE__ ) );
define( 'ROCKET_LL_PATH', realpath( plugin_dir_path( __FILE__ ) ) . '/' );
define( 'ROCKET_LL_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/' );
define( 'ROCKET_LL_FRONT_JS_URL', ROCKET_LL_ASSETS_URL . 'js/' );
define( 'ROCKET_LL_INT_MAX', PHP_INT_MAX - 15 );

use function RocketLazyLoadPlugin\Dependencies\LaunchpadCore\boot;

require ROCKET_LL_PATH . 'includes/RocketLazyloadRequirementsCheck.php';

$rocket_lazyload_requirement_checks = new Rocket_Lazyload_Requirements_Check(
	[
		'plugin_name'    => 'Lazy Load by WP Rocket',
		'plugin_version' => ROCKET_LL_VERSION,
		'wp_version'     => ROCKET_LL_WP_VERSION,
		'php_version'    => ROCKET_LL_PHP_VERSION,
	]
);

if ( $rocket_lazyload_requirement_checks->check() ) {
	require __DIR__ . '/src/Dependencies/LaunchpadCore/boot.php';

	boot( __FILE__ );
}


unset( $rocket_lazyload_requirement_checks );
