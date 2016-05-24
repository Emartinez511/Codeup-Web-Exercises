<?php
require 'parks_cred.php';
require 'db_connect.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$drop_table = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($drop_table);
$table =    'CREATE TABLE national_parks (
            id INT UNSIGNED AUTO_INCREMENT,
            name  VARCHAR(50),
            location VARCHAR(50),
            date_established DATE,
            area_in_acres double,
            description VARCHAR(200),
            PRIMARY KEY (id)
                )';

$dbc->exec($table);