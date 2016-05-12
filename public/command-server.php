<?php
require_once 'server.php';

function pageController(){
    return ['serverName'=> ServerFunction::generateName()];
}
extract(pageController());
echo ("$serverName\n");
?>