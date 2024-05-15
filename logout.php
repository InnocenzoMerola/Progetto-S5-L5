<?php

include __DIR__ . "/includes/is_logged.php";
include_once __DIR__ . "/User.php";


$user = new User();
$user->logout();
