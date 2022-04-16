<?php

defined( 'ABSPATH' ) or die("You cannot pass");

$client = new GuzzleHttp\Client();

$usersArray = json_decode($client->get('https://jsonplaceholder.typicode.com/users', ["verify" => false])->getBody()->getContents());
$users = $usersArray;

if (array_key_exists('max', $atts)) {
    $users = array_slice($usersArray, 0, $atts['max']);
}

//echo "<pre>";
//var_dump($users);
//echo "</pre>";

?>

<section id="users">
    <?php
    foreach ($users as $user) { ?>
    <div class="user">

        <p><?= $user->name ?> - <?= $user->email ?></p>

    </div>
    <?php
    }

    ?>
</section>
