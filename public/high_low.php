<?php
session_start();
if (!isset($_SESSION['random'])){
    $_SESSION['random'] = mt_rand(1, 100);
}

if (isset($_REQUEST['user'])){
    if ($_REQUEST['user'] == $_SESSION['random']) {
        echo "Correctomundo!\n";
        session_unset();
        session_regenerate_id(true);
    } elseif ($_REQUEST['user'] < $_SESSION['random']) {
        echo "nope. higher\n";
    } else {
        echo "guess again. lower\n";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>High Low</title>
</head>
<body>
<h1>High-Low Game</h1>
<p>I'm thinking of a number between 1 through 100. Can you guess my number?</p>
<form method="POST" >
    <input type="text" name="user"><br>
    <input type="submit">
</body>
</html>