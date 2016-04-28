<?php
require 'functions.php';
function pageController() {
    $count = !inputHas('count') ? 0 : inputGet('count');

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
    <p>Score:<?= escape($count) ?></p>
    <a href="ping.php?count=<?= $count + 1 ?>">hit</a>
    <a href="ping.php?count=<?= $count = 0 ?>">miss</a>
    <div><img src="img/willferrelltt.jpeg"></div>
</body>
</html>