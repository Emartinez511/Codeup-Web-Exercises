<?php
    session_start();

    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
    header('Location: login.php');
    die();


    ?>
