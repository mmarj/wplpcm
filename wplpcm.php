<?php

defined( 'ABSPATH' ) or die( 'Block Direct access' );

/**
 *
 *
 * @link              https://wpregular.com/author/aurangajeb
 * @since             1.0.0
 
 *
 * @wordpress-plugin
 * Plugin Name:       WP Login Page Custom Message
 * Plugin URI:        https://wpregular.com
 * Description:       This plugin is an intial release. It will show the demo site credentials on the login page.
 * Version:           1.0.0
 * Author:            MM Aurangajeb
 * Author URI:        https://wpregular.com/author/aurangajeb
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wplpcm
 * Domain Path:       /languages
 */


//*Method1: * Add custom message to WordPress login page*/

function wplpm_custom_login_message( $message ) {
    if ( empty($message) ){
        return '<div class="message is-dismissible">
             <p><strong>Username: reset <br> Password: reset</strong></p>
         </div>';
    } else {
        return $message;
    }
}

add_filter( 'login_message', 'wplpm_custom_login_message' );


/* Method2: Add message above login form */
/*function custom_login_message() {
    return '<p class="message">Username: admin <br> Password: admin </p>';
}
add_filter('login_message', 'custom_login_message');



