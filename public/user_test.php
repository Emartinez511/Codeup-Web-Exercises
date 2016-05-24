<?php

require_once "../User.php";


$user = new User();
$user->name = "Bob";
$user->email = "bob@boberson.com";
$user->password = 'password';
$user->save();

echo "This is the last inserted row in the db is" . $user->id . PHP_EOL;

echo "All users below" . PHP_EOL;
$allUsers = User::all();
var_dump($allUsers);

echo "first user below" . PHP_EOL;
$user = User::find(1);
$user->email = 'dale@bobberson.com';
$user->save();