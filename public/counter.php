<?php

function pageController() {
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];

return ['count' => $count];
}

extract(pageController());
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <p><?= $count ?></p>
    <a href="?count=<?= $count + 1 ?>">Up</a>
    <a href="?count=<?= $count - 1 ?>">Down</a>
</body>
</html>