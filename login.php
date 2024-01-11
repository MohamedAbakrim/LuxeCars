<?php
    require 'config.php';
    require 'header.php';
    if(!empty($_SESSION["id"])){
        header('Location:index.php');
    }
    if(isset($_POST["submit"])){
        $useremail = $_POST["useremail"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$useremail' OR username = '$useremail'");
        $row = mysqli_fetch_assoc($result);
        if($useremail == "admin" && $password="1234"){
            $_SESSION["login"] = true;
            $_SESSION["id"] = "admin";
            header('Location:index.php');
        }
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header('Location:index.php');
            }else{
                echo "<script>let error = 'error';</script>";
            
            }
        }else{
            echo "<script>let error = 'error';</script>";
        }
    }
?>
    <section class="login">
        <div>
            <img src="images/img1.png">
        </div>
        <div  class="form_contact">
            <form action="" method="POST">
                <input type="text" id="useremail" name="useremail" placeholder="username or email" required/><br/>
                <input type="password" id="password" name="password" placeholder="your password" required/><br/>
                <button type="submit" name="submit">Login</button>
            </form><br>
            <p id="error" style="color:red; font-weight:bolder;font-size:1.5rem;"></p>
            <a href="Registration.php">Don't u have an account ? Register</a>
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
    <?php
        require 'footer.php';
    ?>