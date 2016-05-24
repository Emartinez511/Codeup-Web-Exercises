<?php
require 'user_creds.php';
require 'db_connect.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$drop_table = 'DROP TABLE IF EXISTS users';
$dbc->exec($drop_table);
$table =    'CREATE TABLE users (
            id INT UNSIGNED NOT NULL AUTO_INCREMENT,
            name  VARCHAR(20) NOT NULL,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(16) NOT NULL,
            PRIMARY KEY (id)
                )';

$dbc->exec($table);