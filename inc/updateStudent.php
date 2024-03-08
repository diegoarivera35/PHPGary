<?php
// print_r($_POST);


if(isset($_POST["updateStudent"])) {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $marks = $_POST["marks"];
    $grade = $_POST["grade"];
    $imageURL = $_POST["imageURL"];
    
    include("connect.php");
    
    $query = "UPDATE students SET fname = '$fname', lname = '$lname', marks = '$marks', grade = '$grade', imageURL = '$imageURL' WHERE id = '$id'";


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




