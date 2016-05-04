<?php
require_once '../input.php';
require_once '../auth.php';
$message = "denied";
$_SESSION['logged_in_user'] = "";
session_start();


$username= input::has('username') ? input::get('username'): '';
$password= input::has('password') ? input::get('password'): '';


    if (Auth::attempt($username, $password)){
        $_SESSION['logged_in_user'] = input::get('username');
        header('Location: authorized.php');
        die();
    } else {
        $message = "";
    }

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
    
        <h1><?php echo $message; ?></h1>

</form>
</body>
</html>