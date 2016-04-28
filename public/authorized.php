<?php
require 'functions.php';
session_start();
if ($_SESSION['logged_in_user']) {
} else {
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