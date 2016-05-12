<?php
require_once 'server.php';

function pageController(){

return ['serverName'=> ServerFunction::generateName()];

}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
    <h1>Server Name Generator</h1>
<?= $serverName; ?>
</body>
</html>