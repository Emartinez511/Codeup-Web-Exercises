<?php

require '../input.php';
require_once '../parks_cred.php';
require_once '../db_connect.php';

function pageController($dbc)
{
    $data = [];

    $data['page'] = Input::has('page') ? Input::get('page') : 1;
    $offset = ($data['page'] - 1) * 4; 
    

    $stmt = $dbc->prepare('SELECT *  FROM national_parks LIMIT 4 OFFSET ' . $offset);
    $stmt->execute();
    $data['parks'] = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if ($_POST){
        $errors = [];
        
        try {
            $name = Input::getString('name');
        } catch (InvalidNameException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (LengthException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (OutOfRangeException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (DomainException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (InvalidArgumentException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        }
        
        try {
            $location = Input::getString('location');
        } catch (InvalidNameException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (OutOfRangeException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (DomainException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (InvalidArgumentException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (LengthException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } 
        
        try {
            $date_established = Input::GET('date_established');
        } catch (Exception $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
        }
        
        try {
            $area_in_acres = Input::getNumber('area_in_acres');
        } catch (DomainException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
        } catch (InvalidArgumentException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
        } catch (RangeException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
        }
        
        try {
            $description = Input::getString('description');
        } catch (InvalidNameException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (OutOfRangeException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (DomainException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (InvalidArgumentException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        } catch (LengthException $e) {
            array_push($errors, $e->getMessage());
            echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;        
        }

        $query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';
        $stmt = $dbc->prepare($query);

        if (empty($errors)){
        $stmt->execute(array(':name' => Input::getString('name'),':location' => Input::getString('location'),':date_established' => Input::GET('date_established'),':area_in_acres' => Input::getNumber('area_in_acres'),':description' => Input::getString('description')));
        $_POST = [];
        }

    };

    return $data;

};
extract(pageController($dbc));

?>

<!DOCTYPE html>
<html>
<head>
    <title>PARKS</title>
    <link rel="stylesheet" href="/css/parks.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

</head>
<body class="#01579b light-blue darken-4">
<H1 class="#ff7043 deep-orange lighten-1">LIST OF NATIONAL PARKS</H1>
    <div>
        <?php foreach($parks as $park) { ?>
            <div class="rows">
                <h3 class="header"><?php echo $park['name'] ?></h2>
                <p class="location"><strong>LOCATION:</strong><?= $park['location'] ?></p> 
                <p class="date"><strong>DATE ESTABLISHED:</strong><?= $park['date_established'] ?></p>
                <p class="area"><strong>AREA IN ACRES:</strong><?= $park['area_in_acres'] ?></p>
                <p class="area"><strong>DESCRIPTION:</strong><?= $park['description'] ?></p>
            </div>
        <?php } ?>
        <?php if($page>=2): ?> 
        <a href="?page=<?= $page - 1?>" class="buttonL">PREVIOUS PAGE</a>
        <?php endif; ?>
        <?php if($page< count($parks)): ?>
        <a href="?page=<?= $page + 1?>" class="buttonR">NEXT PAGE</a>
        <?php endif; ?>
    </div>
    <div id="form_table">
        <form class="form" method="POST">
            <H3 class="header">Insert New Park</H2>
            <input type="text" name="name" placeholder="Name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];}?>">
            <input type="text" name="location" placeholder="location" value="<?php if(isset($_POST['location'])){ echo $_POST['location'];}?>">  
            <input type="text" name="date_established" placeholder="date established" value="<?php if(isset($_POST['date_established'])){ echo $_POST['date_established'];}?>">
            <input type="text" name="area_in_acres" placeholder="area in acres" value="<?php if(isset($_POST['area_in_acres'])){ echo $_POST['area_in_acres'];}?>"> 
            <input type="text" name="description" placeholder="description" value="<?php if(isset($_POST['description'])){ echo $_POST['description'];}?>">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>