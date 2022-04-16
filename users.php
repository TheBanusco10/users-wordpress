<?php

/*
Plugin Name: Users
Description: Fetching and showing Users from JSONPlacheholder
Version: 1.0
Author: David Jiménez
Author URI: https://djvdev.com
License: GPL3
*/

defined( 'ABSPATH' ) or die("You cannot pass");

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

use Users\Users;

$usersPlugin = new Users();

$usersPlugin->init();
