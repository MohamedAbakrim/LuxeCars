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
        if($useremail == "admin" && $password == "1234"){
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
                <p>Votre tranquillité d'esprit est notre priorité absolue chez LuxeCars. nous sommes fiers d'offrir un service de dépannage fiable, disponible 24 heures sur 24, 7 jours sur 7. Notre équipe de professionnels qualifiés pour vous assurer une assistance rapide et efficace en cas de panne.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Service aéroport GRATUIT</h3>
                <p>Nous mettons à votre disposition, le service aéroport qui vous permet de disposer du véhicule à votre arrivé sur l'aéroport de Casablanca et d'autres villes marocaines.
Pour bénéficier de ce service de location de voiture il suffit de le mentionner lors de votre demande de réservation.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Service siège bébé.</h3>
                <p>LuxeCars met à votre disposition différents services, vous Nous mettons à votre disposition, des sièges bébé adaptés et Conformes aux normes européennes, tout ce qu'il faut faire est juste de le mentionner lors de votre demande de réservation de location de voiture. </p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13765.523085506244!2d-9.547618160384001!3d30.39693689596298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c825f48b65f7%3A0xc1a03d5109d60a9e!2sCit%C3%A9%20El%20Houda%2C%20Agadir%2080000!5e0!3m2!1sfr!2sma!4v1697235130015!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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