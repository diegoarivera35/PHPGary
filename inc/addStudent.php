<?php
// print_r($_POST);


if(isset($_POST["addGrade"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $marks = $_POST["marks"];
    $grade = $_POST["grade"];
    $imageURL = $_POST["imageURL"];
    
    include("connect.php");
    
    $query = "INSERT INTO students (fname, lname, marks, grade, imageURL) VALUES (
        '" . mysqli_real_escape_string( $connect, $fname) ."',
        '" . mysqli_real_escape_string( $connect, $lname) ."',
        '" . mysqli_real_escape_string( $connect, $marks) ."',
        '" . mysqli_real_escape_string( $connect, $grade) ."',
        '" . mysqli_real_escape_string( $connect, $imageURL) ."')";

 
    $student = mysqli_query($connect, $query);
    
    if($student){
        header("Location: ../database.php");
    }
    else{
        echo mysqli_error($connect);
    }

}else{
    echo "you shouldnt not be here";
}




?>