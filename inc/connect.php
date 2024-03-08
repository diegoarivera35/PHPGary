<?php
$connect = mysqli_connect("localhost","root","root","HTTP5225");
if(mysqli_connect_error()) {
        die('Connection error: '. mysqli_connect_error());
    }