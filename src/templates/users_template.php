<?php

defined( 'ABSPATH' ) or die("You cannot pass");

if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

$client = new GuzzleHttp\Client();

$usersArray = json_decode($client->get('https://jsonplaceholder.typicode.com/users', ["verify" => false])->getBody()->getContents());
$users = $usersArray;

if (array_key_exists('max', $atts)) {
    $users = array_slice($usersArray, 0, $atts['max']);
}

?>

<section id="users">
    <?php
    foreach ($users as $user) { ?>
    <div class="user">

        <p class="name">
            <?= $user->name ?>
        </p>
        <p class="email">
            <?= $user->email ?>
        </p>

    </div>
    <?php
    }
    ?>
</section>
<?php
    if (is_plugin_active('users-newsletter/users-newsletter.php')):
        ?>
        <div class="send-email-container">
            <button class="send-email-button" data-send-email>Send email</button>
        </div>
    <?php
    endif;
?>