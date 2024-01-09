<?php
    require 'config.php';
    if(isset($_POST["submit"])){
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('username or email already taken'); </script>";
        }else{
            if($password == $confirmPassword){
                $query = "INSERT INTO users VALUES('', '$firstName', '$lastName', '$email', '$username','$password')";
                mysqli_query($conn, $query);
                echo "<script> alert('you have been registred successfuly')</script>";
            }else{
                echo "<script> alert('Passwords dont match')</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form action="" method="POST">
        <label for="firstName">First Name: </label>
        <input type="text" id="firstName" name="firstName" required/><br/>
        <label for="lastName">Last Name: </label>
        <input type="text" id="lastName" name="lastName" required/><br/>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required/><br/>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email" required/><br/>
        <label for="password">password : </label>
        <input type="password" id="password" name="password" required/><br/>
        <label for="confirmPassword">Confirm password : </label>
        <input type="password" id="confrimPassword" name="confirmPassword" required/><br/>
        <button type="submit" name="submit">Register</button>
    </form>
    <a href="login.php">Login</a>
</body>
</html>