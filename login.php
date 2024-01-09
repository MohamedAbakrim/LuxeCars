<?php
    require 'config.php';
    if(isset($_POST["submit"])){
        $useremail = $_POST["useremail"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$useremail' OR username = '$useremail'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header('Location:index.php');
            }else{
                echo "<script> alert('passowrd is incorrect')</script>";
            }
        }else{
            echo "<script> alert('user is not registered')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="useremail">Email Or Username: </label>
        <input type="email" id="useremail" name="useremail" required/><br/>
        <label for="password">password : </label>
        <input type="password" id="password" name="password" required/><br/>
        <button type="submit" name="submit">Login</button>
    </form>
    <a href="Registration.php">Register</a>
</body>
</html>