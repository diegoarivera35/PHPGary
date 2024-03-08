<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <h2>Update Student Profile</h2>
    <?php include("inc/nav.php"); 
        $id = $_GET["id"];
        include("inc/connect.php");
        $query = "SELECT * FROM students WHERE `id` = '$id'";
        $student = mysqli_query($connect, $query);

    // print_r($student);

    $result = $student -> fetch_assoc();
    
    
    
    ?>
    <div class="container">

        <div class="row">
            <div class="col">
                <form method="POST" action="inc/updateStudent.php">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="first name" value="<?php echo $result['fname']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="last name" value="<?php echo $result['lname']; ?>">
                    </div>    
                    
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks" aria-describedby="Marks" value="<?php echo $result['marks']; ?>">
                    </div>   

                    <div class="mb-3">
                        <label for="grade" class="form-label">Grade</label>
                        <input type="text" class="form-control" id="grade" name="grade" aria-describedby="grade" value="<?php echo $result['grade']; ?>">
                    </div>   

                    <div class="mb-3">
                        <label for="imageURL" class="form-label">imageURL</label>
                        <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL" value="<?php echo $result['imageURL']; ?>">
                    </div>   


                    <button type="submit" name="updateStudent" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>