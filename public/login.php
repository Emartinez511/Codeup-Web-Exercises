<?php
require 'functions.php';
$message = " ";
$_SESSION['logged_in_user'] = "";
session_start();

if (inputHas('logged_in_user')) {
        header('Location: authorized.php');
        die();
}

if (inputHas('username') && inputHas('password')) {
    if (inputGet('username') == 'guest' && inputGet('password') == 'password'){
        $_SESSION['logged_in_user'] = inputGet('username');
        header('Location: authorized.php');
        die();
    } else {
        $message = "Denied";
    }
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<form method="POST" >
    <label>Username</label>
    <input type="text" name="username"><br>
    <label>Password</label>
    <input type="text" name="password"><br>
    <input type="submit">
    
        <h1><?php echo escape($message); ?></h1>

</form>
</body>
</html>