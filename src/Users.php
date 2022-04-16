<?php

namespace Users;

defined( 'ABSPATH' ) or die("You cannot pass");

class Users {

    public function __construct() {

    }

    public function init() {
        add_shortcode('users', [$this, 'users_shortcode']);
    }

    /*
     * @description Create users shortcode: [users max=10]
     */
    function users_shortcode($atts) {
        ob_start();

        include plugin_dir_path(__FILE__) . 'templates/users_template.php';

        return ob_get_clean();
    }

}