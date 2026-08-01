<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$database = "feedback_db";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $database, $port);

if ($conn) {
    echo "Connection successfull";
}
else{
   echo "Connection failed";
}

?>