<?php

namespace Users;

defined( 'ABSPATH' ) or die("You cannot pass");

class Users {

    public function __construct() {

    }

    public function users_init() {
        add_shortcode('users', [$this, 'users_shortcode']);
        add_action('wp_enqueue_scripts', [$this, 'users_load_scripts']);
    }

    /**
     * @description Create users shortcode: [users max=10]
     * @param $atts
     * @return false|string
     */
    function users_shortcode($atts) {
        ob_start();

        include plugin_dir_path(__FILE__) . 'templates/users_template.php';

        return ob_get_clean();
    }

    /**
     * @description Load all scripts and styles
     * @return void
     */
    function users_load_scripts() {
        wp_enqueue_style('users_style', plugin_dir_url(__FILE__) . 'css/styles.css');
    }

}