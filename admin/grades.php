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
    <?php include("../inc/nav.php"); ?>
    <div class="container">

        <div class="row">
            <div class="col">
                <form method="POST" action="../inc/addStudent.php">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="first name">
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="last name">
                    </div>    
                    
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks" aria-describedby="Marks">
                    </div>   

                    <div class="mb-3">
                        <label for="grade" class="form-label">Grade</label>
                        <input type="text" class="form-control" id="grade" name="grade" aria-describedby="grade">
                    </div>   

                    <div class="mb-3">
                        <label for="imageURL" class="form-label">imageURL</label>
                        <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL">
                    </div>   


                    <button type="submit" name="addGrade" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>