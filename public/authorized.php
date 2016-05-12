<?php
require_once '../input.php';
require_once '../auth.php';
session_start();

if (!Auth::check()) {
    header('Location: login.php');
    die();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
<h1>Authorized</h1>
 <a href="logout.php">LOGOUT</a>

</body>
</html>