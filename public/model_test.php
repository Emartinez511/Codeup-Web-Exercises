<?php
require '../model.php';
require_once '../user.php';



$test = new Model();
$test->name = "edric" ;
$test->value = "code";
$test->age = '29';

echo $test->age . PHP_EOL;
echo $test->name . PHP_EOL;

echo User::getTableName();