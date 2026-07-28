<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_db";
$port = 3308;

$conn = mysqli_connect($servername , $username , $password , $database , $port);

if($conn)
    {
        echo "Connection succcessful";
    }
    else
        {
            echo "Connection failed";
        }
?>