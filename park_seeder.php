<?php

require_once 'parks_cred.php';
require_once 'db_connect.php';

$truncate = 'TRUNCATE national_parks';

$dbc->exec($truncate);

$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47389.67', 'description' => 'This is were the description for each park goes'],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => '9000.00', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => '76518.98', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-05-28', 'area_in_acres' => '172924.07', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-08-21', 'area_in_acres' => '32950.03', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => '35835.08', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => '337597.83', 'description' => 'This is were the description for each park goes'],
    ['name' => 'Capital Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => '241904.26', 'description' => 'This is were the description for each park goes']
];


$stmt = $dbc->prepare("INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)");

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established',  $park['date_established'],  PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_STR);
    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);

    $stmt->execute();
};


echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";