    <footer>
        <p>Sarah Berrouzi Copyright 2024 </p>
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
    <script>
        let cart = [];
        


        let cars = [];
        <?php
            $result = mysqli_query($conn, "SELECT * FROM cars");
            while($row = mysqli_fetch_array($result)){
                echo"cars.push(['".$row['id']."','".$row["name"]."','".$row["price"]."','".$_SESSION["id"]."']);";
            }
        ?>
        
        let total = 0;
        function addToCart(e){
            console.log(total);
            <?php
                if(!empty($_SESSION["id"])){
                    echo "
                    let mycar;
                    for(let i = 0;i<cars.length;i++){
                        if(cars[i][0] == e){
                            cart.push(cars[i]);
                            mycar = cars[i];
                            total += parseInt(cars[i][2]);
                        }
                    }
                    console.log(cars);
                    console.log(cart);
                    console.log(total);
                    document.getElementById('hello').innerHTML = cart.length;
                    document.getElementById('hidden').setAttribute('value', cart);
                    mycart(mycar);";
                }else{
                    echo"alert('please log in first');";
                }
            ?>
            
        }
        function mycart(cart){
            if(cart.length == 0){
                document.getElementById("title").textContent = "Your Card is empty";
                document.getElementById('hidden').setAttribute('value', 'empty');
            }else{
                document.getElementById("title").innerHTML = "Your Products";
                let mycars = document.getElementById("mycars");
                let mycar = document.createElement('div');
                mycar.setAttribute('class', 'mycar');
                let test = "car" + cart[0];
                mycar.setAttribute('id', test);
                mycar.innerHTML = `
                            <img src='./images/car${cart[0]}.jpg' width='60px' alt=''/>
                                <span>${cart[1]}</span>
                                <span class='price'>${cart[2]}$</span>
                            <button onClick={dd(${test})}>delete</button>
                        `;
                mycars.appendChild(mycar);
            }
            document.getElementById('price').textContent = total + "$";
            document.getElementById('price').style.color = "red";
            document.getElementById('price').style.fontWeight = "bolder";
        }
        try{
            if(error == 'error'){
                document.getElementById('error').innerHTML = 'invalid informations';
                document.getElementById('useremail').style.border = '1px solid red';
                document.getElementById('password').style.border = '1px solid red';
            }else if(error == 'already'){
                document.getElementById('error').innerHTML = 'the email or username are already taken';
                document.getElementById('firstName').style.border = '1px solid red';
                document.getElementById('lastName').style.border = '1px solid red';
                document.getElementById('password').style.border = '1px solid red';
                document.getElementById('email').style.border = '1px solid red';
                document.getElementById('username').style.border = '1px solid red';
                document.getElementById('confirmPassword').style.border = '1px solid red';
            }else if(error =='dontmatch'){
                document.getElementById('error').innerHTML = 'the passwords dont match';
                document.getElementById('username').style.border = '1px solid red';
                document.getElementById('firstName').style.border = '1px solid red';
                document.getElementById('lastName').style.border = '1px solid red';
                document.getElementById('password').style.border = '1px solid red';
                document.getElementById('email').style.border = '1px solid red';
                document.getElementById('confirmPassword').style.border = '1px solid red';
            }
            else if(error == "error2"){
                document.getElementById('error').innerHTML = 'please fill all the fields';
                document.getElementById('username').style.border = '1px solid red';
                document.getElementById('firstName').style.border = '1px solid red';
                document.getElementById('lastName').style.border = '1px solid red';
                document.getElementById('password').style.border = '1px solid red';
                document.getElementById('email').style.border = '1px solid red';
                document.getElementById('confirmPassword').style.border = '1px solid red';
            }
        }catch(err){
            console.log(err);
        }
        mycart(cart);
        function dd(id){
            console.log(id.id);
            id.remove();
            for(let i=0;i<cart.length;i++){
                let test = "car" + cart[i][0];
                if(id.id == test){
                    total -= parseInt(cart[i][2]);
                    document.getElementById('price').textContent = total + "$";
                    cart.splice(i, 1);
                    if(cart.length == 0){
                        document.getElementById('hidden').setAttribute('value', "empty");
                    }else{
                        document.getElementById('hidden').setAttribute('value', cart);
                    }
                }
            }
            document.getElementById('hello').innerHTML = parseInt(document.getElementById('hello').innerHTML) - 1;
        }
    </script>
</body>
</html>