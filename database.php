<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    



<?php
    include("inc/connect.php");
    include("inc/nav.php");
    $query = 'SELECT id, fname, lname, marks, grade, imageURL FROM students';
    $students = mysqli_query($connect, $query);



?>

<h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
<div class="container">
<div class="row">
<div class="col-md-12 d-flex flex-wrap justify-content-between">


<?php


// echo '<pre>';
// echo print_r($users);
// echo '</pre>';
foreach($students as $student) {

    if($student['marks'] < '70') {
        $bgClass = 'bg-danger';
    } else {
        $bgClass = 'bg-success';
    }



       echo '
    <div class="card mb-5 '. $bgClass .'" style="width: 18rem;">
      <img src="' . $student['imageURL'] . '" class="card-img-top" alt="'. $student['fname'] .'"/>
      <div class="card-body">
      <h5 class="card-title">'. $student['lname'].' '.$student['fname'] .'</h5>
        <p class="card-text">' . $student['fname'] . '</p>
        <a href="' . $student['fname'] . '" class="btn btn-primary">Click me</a>
      </div>

<div class="card-footer">
<div class="col">
<form method="GET" action="update.php">
<input type="hidden" name="id" value="'.$student['id'].'">
<button type="submit" name="updateStudent" class="btn btn-sm btn-warning">
    Update
</button>
</form>
</div><hr>
<div class="col">
    <form method="GET" action="inc/deleteStudent.php">
        <input type="hidden" name="id" value="'.$student['id'].'">
        <button type="submit" name="deleteStudent" class="btn btn-sm btn-warning">
            Delete
        </button>
    </form>
</div>
</div>
    </div>

   
    ';
}

?>


</div>
    </div>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

