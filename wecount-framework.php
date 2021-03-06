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
 * Version:         0.2.1
 *
 * @package         WeCount_Framework
 */

if ( defined('LOGGED_IN_ONLY') && LOGGED_IN_ONLY === true ) {
    function logged_in_only_frontend() {
        if ( ! is_user_logged_in() ) {
            auth_redirect();
        }
    }
    add_action( 'template_redirect', 'logged_in_only_frontend' );
}

require_once __DIR__ . '/vendor/autoload.php';

WP_Dependency_Installer::instance( __DIR__ )->run();
