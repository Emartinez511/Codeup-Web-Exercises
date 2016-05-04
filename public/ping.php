<?php
require '../input.php';
function pageController() {
    $count = !Input::has('count') ? 0 : Input::get('count');
    return ['count' => $count];
}

extract(pageController());
?>


<!DOCTYPE html>
<html>
<head>
    <title>Ping Pong</title>
    <link rel="stylesheet" href="/css/ping_pong.css">
</head>
<body>
<h1>PING PONG</h1>
    <p>Score:<?= $count ?></p>
    <a href="pong.php?count=<?= $count + 1 ?>">hit</a>
    <a href="ping.php?count=<?= $count = 0 ?>">miss</a>
<div><img src="img/Forrest-Gump.jpg"></div>
</body>
</html>