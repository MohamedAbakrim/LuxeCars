<?php
    require 'config.php';
    require 'header.php';
?>
    <!-- section vehicule -->
    <div class="parent">
    <?php
        if(isset($_POST["submit"])){
            $test = $_POST["test"];
            if($test == "empty"){
                echo "<script>alert('Your cart is empty')</script>";
            }else{
                $array = explode(',', $test);
                $len = count($array);
                $i = 0;
                while($i<$len){
                    $newArray = [];
                    for($j=$i;$j<$i+4;$j++){
                        array_push($newArray, $array[$j]);
                    }
                    $query = "INSERT INTO commandes VALUES('', '$newArray[0]', '$newArray[1]', '$newArray[2]', '$newArray[3]',NOW())";
                    mysqli_query($conn, $query);
                    $i += 4;   
                    echo "<script>alert('ur commande succeded')</script>";             
                }
            } 
        }
        $result = mysqli_query($conn, "SELECT * FROM cars");
        echo"
            <section id='cars'>
                <h1 class='section_title'>Nos vehicules</h1>
                    <div class='images'>
                        <div class='cart'>
                            <h3>My Cart</h3>
                            <div id='mycars'>
                                <h4 id='title'><h4/>
                            </div>
                            <hr>
                            <div id='total'><span>Total : </span><span id='price'></span></div>
                            <form class='valider' action='' method='POST'>
                                <input id='hidden' name='test' type='hidden' value='fdfkqd'/>
                                <button style='background-color:#ea1f33;color:white;width:100%;margin:5px;cursor:pointer;padding:3px;' name='submit'>Confirmer</button>
                            </form>
                        </div>
                        <ul>";
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $id = $row["id"];
            $price = $row["price"];
            $name = $row["name"];
            $url = "car".$id;
            echo"<li class='car' id='car'>
                    <div>
                        <img id='".$id."' src='"."./images/".$url.".jpg' alt=''>
                    </div>
                    <span>".$name."</span>
                    <span class='prix'>".$price."$</span>
                    <a href='#".$id."' onClick={addToCart('".$id."')}>ADD TO CART</a>
                </li>";
            
        }
        echo "</ul></div></section>";
    ?>
        
    </div>
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