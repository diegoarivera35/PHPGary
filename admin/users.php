<?php
    include("../inc/functions.php");
    include("../inc/connect.php");
    if(isset($_POST["addUser"])){
        $query = ' INSERT INTO  users ( name, email, password) VALUES (
        "' . mysqli_real_escape_string( $connect, $_POST['name']) .'",
        "' . mysqli_real_escape_string( $connect, $_POST['email']) .'",
        "' . md5($_POST['password']) .'"
        )';
        mysqli_query( $connect, $query );
        set_message('User has been created');
    }
?>
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
    <h1>Create User</h1>
    <?php include("../inc/nav.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo get_message(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="Email">
                    </div>    
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="Password">
                    </div>   





                    <button type="submit" name="addUser" class="btn btn-primary">Submit</button>
                    

                </form>
            </div>
        </div>

    </div>
</body>

</html>