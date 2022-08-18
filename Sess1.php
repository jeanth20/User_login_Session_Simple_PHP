<?php
session_start();
//Set PHP session with value, time
$currentTime = time();
$_SESSION['color'] = array(
    "value" => "blue",
    "time" => $currentTime,
    "life_time" => 5
);

print_r($_SESSION['color']);

?>