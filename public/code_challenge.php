<?php

require_once '../input.php';

$a= input::has('aInput') ? input::get('aInput'): '';

$b= input::has('answer') ? input::get('answer'): '';


}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="POST" >
    <label>A:</label>
    <input type="text" name="aInput"><br>
    <label>B:</label>
    <input type="text" name="answer"><br>
    <input type="submit">
</body>
</html>