<?php
session_start();
include 'db.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Username
        <input type="text" name="username" required>
        Password
        <input type="password" name="password" required>

        <input type="submit" name="submit" value="Login">

    </form>
</body>

</html>