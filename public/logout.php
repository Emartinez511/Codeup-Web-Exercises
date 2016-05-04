<?php
require_once '../auth.php';
session_start();
Auth::logout();
header('Location: login.php');
die();
?>