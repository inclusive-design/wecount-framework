<?php
/**
 * Plugin Name:     We Count Framework
 * Plugin URI:      https://wecount.inclusive-design.ca
 * Description:     Framework for the We Count CMS backend.
 * Author:          OCAD University
 * Author URI:      https://wecount.inclusive-design.ca
 * Text Domain:     wecount-framework
 * Domain Path:     /languages
 * GitHub Plugin URI: inclusive-design/wecount-framework
 * Version:         0.1.0
 *
 * @package         WeCount_Framework
 */

require_once __DIR__ . '/vendor/autoload.php';
WP_Dependency_Installer::instance( __DIR__ )->run();
