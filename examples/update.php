<?php

require __DIR__ . "/../vendor/autoload.php" ;

use Source\Models\User;

$user = (new User())->findById(5);
$user->first_name = "Lucas";
$user->save();

var_dump($user);