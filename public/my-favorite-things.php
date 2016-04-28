<?php

function pageController()
{
    // Initialize an empty data array.
    $myFav['favorite'] = ['games', 'books', 'movies', 'food', 'tech'];
    // Return the completed data array.
    return $myFav;
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite things</title>
     <link rel="stylesheet" href="/css/myFav.css">
</head>
<body>
    <h1>My Favorite Things</h1>
    <table>
        <tr>
        <?php foreach ($favorite as $thing) { ?>
        <tr>
        <td><?= $thing; ?></td>
        </tr> 
        <?php } ?>
         
    </table>
</body>
</html>