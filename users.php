<?php
    require 'config.php';
    require 'header.php';
    if(!($_SESSION['id'] == "admin")){
        header('Location:index.php');
    }
?>
    <section id="table">
    <?php
        $result = mysqli_query($conn, "SELECT * FROM users");
        echo"
        <table>
            <caption>Users</caption>
            <thead>
                <tr>
                <th scope='col'>id</th>
                <th scope='col'>first name</th>
                <th scope='col'>last name</th>
                <th scope='col'>username</th>
                <th scope='col'>email</th>
                <th scope='col'>password</th>
                </tr>
            </thead>
            <tbody>";
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo"
            <tr>
                <td data-label='id'>".$row["id"]."</td>
                <td data-label='firstName'>".$row["firstName"]."</td>
                <td data-label='lastName'>".$row["lastName"]."</td>
                <td data-label='username'>".$row["username"]."</td>
                <td data-label='email'>".$row["email"]."</td>
                <td data-label='password'>".$row["password"]."</td>
            </tr>";
            
        }
        echo "</tbody></table>";
    ?>
    </section>
    <?php
        require 'footer.php';
    ?>