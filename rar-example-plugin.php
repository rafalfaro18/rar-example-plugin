<?php
/*
Plugin Name: RAR Example Plugin
Plugin URI: https://github.com/rafalfaro18/rar-example-plugin
Description: Wordpress example Plugin for testing purposesg
Version: 1.0
Author: Rafael Alfaro
Author URI: http://rafalfaro.com
Licnse: MIT
License URI: https://github.com/rafalfaro18/rar-example-plugin/blob/master/LICENSE
*/

function sample_admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'RAR Example Plugin Installed!', 'sample-text-domain' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );
