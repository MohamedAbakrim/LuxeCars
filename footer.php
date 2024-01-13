    <footer>
        <p>Abakrim Mohamed Copyright 2024 </p>
    </footer>
    <script src="./js/script2.js"></script>
    <script>
        let cart = [];
        


        let cars = [];
        <?php
            $result = mysqli_query($conn, "SELECT * FROM cars");
            while($row = mysqli_fetch_array($result)){
                if(empty($_SESSION["id"])){
                    break;
                }else{
                    echo "cars.push(['".$row['id']."','".$row["name"]."','".$row["price"]."','".$_SESSION["id"]."']);";
                }
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