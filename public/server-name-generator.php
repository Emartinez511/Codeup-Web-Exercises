<?php

function pageController()
{
    // Initialize an empty data array.
    $data = array();
    $adjectives = ['Kind', 'Genuine', 'Energetic', 'Carefree', 'Optimisitic', 'Perky', 'Respectful', 'Quiet', 'Direct', 'Thorough'];
    $nouns = ['Claire', 'George', 'Bill', 'Sarah', 'Sophie', 'Jose', 'Moe', 'Jessie', 'Carl', 'Mary'];

    $random = array_rand($adjectives, 1);
    $random_noun = array_rand($nouns, 1);
    $name = "$adjectives[$random] $nouns[$random_noun]";

    // Add data to be used in the html view.
    $data['serverName'] = $name;

    // Return the completed data array.
    return $data;
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
<?= "$serverName\n"; ?>
</body>
</html>