<?php
    /**
     * Advanced Custom Fields drop-in functionality for Sage 9
     * Version: 1.0
     * Author: Michael W. Delaney
     */
namespace App;

// Hide ACF menu item in Production
if (defined('WP_ENV') && WP_ENV == 'production') {
    add_filter('acf/settings/show_admin', '__return_false');
}

add_action('acf/init', 'beagleBoard_add_local_field_groups');
