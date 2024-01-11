<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Luxe </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Luxe</span>Cars</p>
        </div>
            <?php
            if(!empty($_SESSION["id"])){
                $id = $_SESSION["id"];
                if($id == "admin"){
                    echo"<ul class='menu'>
                    <li><a href='users.php'>Users</a></li>
                    <li><a href='commandes.php'>Commandes</a></li>
                    </ul>";
                }
                else{
                    echo"<ul class='menu'><li><a href='index.php'>Acceuil</a></li>
                    <li><a href='cars.php'>Vehicules</a></li>
                    <li><a href='#services'>Services</a></li>
                    <li><a href='#contact'>Contact</a></li></ul>";
                }
            }else{
                echo"<ul class='menu'><li><a href='index.php'>Acceuil</a></li>
                    <li><a href='cars.php'>Vehicules</a></li>
                    <li><a href='#services'>Services</a></li>
                    <li><a href='#contact'>Contact</a></li></ul>";
            }
            ?>
        <?php
            
            if(!empty($_SESSION["id"])){
                $id = $_SESSION["id"];
                if($id != "admin"){
                    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
                    $row = mysqli_fetch_assoc($result);
                }else{
                    $row = ["username" => "admin"];
                }
                echo "<div style='display:flex;justify-content:space-between;width:150px;align-items:center;'>";
                echo "<div style='display:flex;justify-content:center;align-items:center'><img src='./images/cart-shopping-svgrepo-com.svg' width='20px'/> <p id='hello'>0</p></div>";
                echo "<div style='display:flex;justify-content:center;align-items:center'>".$row["username"]."<img src='./images/profile-svgrepo-com.svg' width='20px'/></div>";
                echo "<a href='logout.php'><img src='./images/logout-svgrepo-com.svg' width='20px'/></a>";
                echo "</div>";
            }else{
                echo "<a href='login.php'><button class='login_btn'>LOGIN</button></a>";
            }
        ?>
    </header>