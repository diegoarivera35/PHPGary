<?php
    include("../inc/functions.php");
    include("../inc/connect.php");

    if(isset($_POST["login"])){
        $query = ' SELECT * 
                   FROM users 
                   WHERE email = "' . $_POST['email'] . '"
                   AND password = "' . md5($_POST['password']) . '"
                   LIMIT 1';

        $result = mysqli_query($connect, $query);
                   
        if(mysqli_num_rows($result)){
            $record = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $record['id'];
            header('Location: admin/index.php');
            die();
    }else{
        set_message('Incorrect username/password');
        header('Location: index.php');
        die();
    }
    }
?>

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
    <title>Document</title>
</head>
<body>
    <?php
    echo get_message();
    ?>
<div class="container">
<h1>hola</h1>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" value="Login" class="btn btn-primary">Submit</button>
</form>
</div>



        

</body>

</html>