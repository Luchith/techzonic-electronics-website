<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="cartmy.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav>
        <img src="A tech logo,circuit logo.png" class="tech">
        <a href="webpage1.php" class="logo">Techzonic Electronics</a>
    </nav>
    <div class="cart"><i class="fa-solid fa-cart-shopping"></i>
        <p id="count">0</p>
    </div>
    </nav>
    <div class="container">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head">
                <p>My Cart</p>
            </div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">RS 0.00</h2>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <p>Copyright &copy; 2023 All rights reserved by Luchith Dilpahan Inc. </p>
    </footer>
    <script>
    const product = [
        <?php
        include_once "./conection.php";

        // SQL query
        $sql = "SELECT * FROM `products`";

        // Execute the query against the database
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Assuming the column names are 'id', 'image', 'title', and 'price'
                $id = $row["pid"];
                $image = $row["imagePath"]; // Replace 'image' with the actual column name for the image URL
                $title = $row["pname"]; // Replace 'title' with the actual column name for the product title
                $price = $row["price"]; // Replace 'price' with the actual column name for the product price
                ?>
                {
                    id: <?php echo $id; ?>,
                    image: '<?php echo $image; ?>',
                    title: '<?php echo $title; ?>',
                    price: <?php echo $price; ?>
                },
                <?php
            }
        }

        mysqli_close($con); // close the connection
        ?>
    ];


        const categories = [...new Set(product.map((item) => { return item }))]
        let i = 0;
        document.getElementById('root').innerHTML = categories.map((item) => {
            var { image, title, price } = item;
            return (
                `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>RS ${price}.00</h2>` +
                "<button onclick='addtocart(" + (i++) + ")'>Add to cart</button>" +
                `</div>
        </div>`
            )
        }).join('')

        var cart = [];

        function addtocart(a) {
            cart.push({ ...categories[a] });
            displaycart();
        }
        function delElement(a) {
            cart.splice(a, 1);
            displaycart();
        }

        function displaycart() {
            let j = 0, total = 0;
            document.getElementById("count").innerHTML = cart.length;
            if (cart.length == 0) {
                document.getElementById('cartItem').innerHTML = "Your cart is empty";
                document.getElementById("total").innerHTML = "RS " + 0 + ".00";
            }
            else {
                document.getElementById("cartItem").innerHTML = cart.map((items) => {
                    var { image, title, price } = items;
                    total = total + price;
                    document.getElementById("total").innerHTML = "RS " + total + ".00";
                    return (
                        `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>RS ${price}.00</h2>` +
                        "<i class='fa-solid fa-trash' onclick='delElement(" + (j++) + ")'></i></div>"
                    );
                }).join('');
            }


        }

    </script>
</body>

</html>