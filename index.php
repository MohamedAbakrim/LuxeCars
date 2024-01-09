<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Luxe </title>
    <link rel="stylesheet" href="style.css">
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
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#cars">Vehicules</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <?php
            
            if(!empty($_SESSION["id"])){
                $id = $_SESSION["id"];
                $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
                $row = mysqli_fetch_assoc($result);
                echo "<div>".$row["username"]."</div>";
            }else{
                echo"hello";
                echo "<a href='login.php'><button class='login_btn'>LOGIN</button></a>";
            }
        ?>
    </header>
    <!-- section Acceuil -->
     
    <section id="home">
        <div class="left">
            <h1>Buy <span>Your Car</span> Cheaper From Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque earum, totam laudantium dolor voluptatum fugiat. Odio doloribus nostrum harum corporis. Natus omnis deleniti reiciendis illum maxime necessitatibus accusantium esse.</p>
            <a href="#">BUY NOW</a>
        </div>
        <div class="right">
            <img src="images/img1.png">
        </div>
    </section>




    <!-- section vehicule -->

    <section id="cars">
        <h1 class="section_title">Nos vehicules</h1>
        <div class="images">
            <ul>
                <li class="car">
                   <div>
                       <img src="images/car1.jpg" alt="">
                   </div>
                   <span>LAMBORGHINI</span>
                   <span class="prix">300.000$</span>
                   <a href="#">ACHETER MAINTENANT</a>
                </li>
                <li class="car">
                    <div>
                        <img src="images/car2.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car3.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car4.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car5.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car6.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
            </ul>
        </div>
    </section>

    <!-- section services -->

    <section id="services">
        <h1 class="section_title">Nos Services</h1>
        <div class="list_services">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis illum natus iste, dicta maiores ipsam.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis illum natus iste, dicta maiores ipsam.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis illum natus iste, dicta maiores ipsam.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
        </div>
    </section>
    

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Nos Services</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10499.966567606692!2d2.285747998068967!3d48.85836977022069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1644955637071!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text"placeholder="Nom">
                    <input type="email"placeholder="Adresse Mail">
                    <input type="text"placeholder="Objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
 

    <footer>
        <p>FaizDev YouTube Copyright 2022 </p>
    </footer>

    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
</body>
</html>