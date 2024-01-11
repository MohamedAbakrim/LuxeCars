<?php
    require 'config.php';
    require 'header.php';
    if(!($_SESSION['id'] == "admin")){
        header('Location:index.php');
    }
?>
    <section id="table">
    <?php
        $result = mysqli_query($conn, "SELECT * FROM commandes");
        echo"
        <table>
            <caption>Commandes</caption>
            <thead>
                <tr>
                <th scope='col'>id de commande</th>
                <th scope='col'>username</th>
                <th scope='col'>email</th>
                <th scope='col'>car</th>
                <th scope='col'>price</th>
                <th scope='col'>date de acheter</th>
                </tr>
            </thead>
            <tbody>";
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $idUser = $row["idUser"];
            $result2 = mysqli_query($conn, "SELECT * FROM users WHERE id='$idUser'");
            $user = mysqli_fetch_assoc($result2);
            $username = $user["username"];
            $email = $user["email"]; 
            echo"
            <tr>
                <td data-label='id'>".$row["id"]."</td>
                <td data-label='firstName'>".$username."</td>
                <td data-label='lastName'>".$email."</td>
                <td data-label='username'>".$row["nameCar"]."</td>
                <td data-label='email'>".$row["price"]."</td>
                <td data-label='password'>".$row["current"]."</td>
            </tr>";
            
        }
        echo "</tbody></table>";
    ?>
    </section>
    <?php
        require 'footer.php';
    ?>