<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    
    <h1>PHP and For Loops</h1> 
    
    <p>Use PHP echo, if statements, and loops to output all three links.</p>
        
        
    <?php

    // **************************************************
    // Do not edit this code

    // Define a multi dimensional array to store all of the links
    $links = array (
        0 => array (
          'name' => 'Codecademy',
          'url' =>'https://www.codecademy.com/',
          'image' => '',
          'description' => 'Learn to code interactively, for free.' ),
        1 => array ( 
          'name' => '',
          'url' => 'https://www.w3schools.com/',
          'image' => 'w3schools.png',
          'description' => 'W3Schools is optimized for learning, testing, and training.' ),
        2 => array (
          'name' => 'Mozilla Developer Network',
          'url' => 'https://www.codecademy.com/',
          'image' => 'mozilla.png',
          'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
        );
        
    // **************************************************

    // Loop through the array and display the link information
    for ($i = 0; $i < count ($links); $i ++)
    {
        // echo '<h1>'.$links[$i]['Name'].'</h1>';
        // echo '<h1>'.$links[$i]['url'].'</h1>';
        // echo '<h1>'.$links[$i]['image'].'</h1>';
        // echo '<h1>'.$links[$i]['description'].'</h1>';

$name = $links[$i]['name'];
$url = $links[$i]['url'];
$image = $links[$i]['image'];
$description = $links[$i]['description'];

    // link Name
    if ($name == "") {
        echo '<h2>EMPTY name</h2>';
    } else {
        echo '<h2>' . $name . '</h2>';
    }
    ;

    // link URL
    if ($url == "") {
        echo '<h2>EMPTY URL</h2>';
    } else {
        echo '<a href="' . $url . '">' . $name. '</a>';
    }
    ;

    // link Image
    if ($image == "") {
        echo '<h2>EMPTY image</h2>';
    } else {
        echo '<img src="' . $image . '"/>';
    }
    ;

    // link description
    if ($description == "") {
        echo '<h2>EMPTY description</h2>';
    } else {
        echo '<p>' . $description . '</p>';
    }
    ;

    // echo '
    // <div class="card" style="width: 18rem;">
    //   <img src="' . $image . '" class="card-img-top" alt="'. $name .'"/>
    //   <div class="card-body">
    //     <h5 class="card-title">'. $name .'</h5>
    //     <p class="card-text">' . $description . '</p>
    //     <a href="' . $url . '" class="btn btn-primary">Click me</a>
    //   </div>
    // </div>';

    echo '<p>----------------------------------------------------------------</p>';
    echo '<p>----------------------------------------------------------------</p>';

    }

    // Use the print_r function to view the contents of the array
    echo '<pre>';
    print_r ($links);
    echo '</pre>';
    
    ?>

<div class="container">
<div class="row">
<div class="col-md-12 d-flex flex-wrap justify-content-between">

<?php
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}
$users = getUsers();

// echo '<pre>';
// echo print_r($users);
// echo '</pre>';

for($i = 0; $i < count ($users); $i++){

$image = 'https://cdn-icons-png.flaticon.com/512/149/149071.png';
$name = $users[$i]['name'];
$username = $users[$i]['username'];
$email = $users[$i]['email'];



       echo '
    <div class="card mb-5" style="width: 18rem;">
      <img src="' . $image . '" class="card-img-top" alt="'. $name .'"/>
      <div class="card-body">
        <h5 class="card-title">'. $name .'</h5>
        <p class="card-text">' . $username . '</p>
        <p class="card-text">' . $email . '</p>
        <a href="' . $email . '" class="btn btn-primary">Click me</a>
      </div>
    </div>

    
    ';
}



?>

</div>
    </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>