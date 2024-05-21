<!--price ja description on mennyt väärinpäin-->
<!--Tällä hetkellä napit eivät toimi millään tavalla!!-->
<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>TechWave</title>
    
    <style>
        .topnav-right {
    float: right;
    width: 15%;
}
.topnav-right a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

.topnav-right a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

.topnav-right a:hover {
  color: #66ccff;
  background-color: transparent;
  text-decoration: underline;
}

.topnav-right a:active {
  color: #66ccff;
  background-color: transparent;
  text-decoration: underline;
}

.topnav-right {
    padding: 14px;
}

        body {
            background-color: rgba(240, 240, 240, 0.9);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        /* Top Navbar */
        .top-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #003366;
            z-index: 2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            padding: 10px 20px;
            margin: 0;
        }
        .top-navbar-logo {
            font-size: 29px;
            color: #fcfaff;
            text-decoration: none;
            margin-right: auto;
            margin-left: 10px;
        }
        .top-navbar-toggle {
            font-size: 30px;
            color: #fcfaff;
            cursor: pointer;
        }
        /* Left Navbar */
        .left-navbar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 3;
            top: 65px;
            left: 0;
            background-color: #16508b;
            overflow-x: hidden;
            transition: 0.5s;
        }
        .left-navbar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 25px;
            color: #fcfaff;
            display: block;
            transition: 0.3s;
        }
        .left-navbar a:hover {
            color: #66ccff;
        }
        .left-navbar .submenu {
            display: none;
            padding-left: 20px;
        }
        .left-navbar .has-submenu.active + .submenu {
            display: block;
        }
        .content {
            margin-top: 60px;
        }
        .content1 {
            margin-top: 24px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
        }
        .product-item {
            width: 200px;
            margin: 10px;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 335px; 
            overflow: hidden;
            position: relative;
        }
        .product-item:hover {
            transform: translateY(-5px);
        }
        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .product-item-content {
            padding: 15px;
        }
        .product-item h4 {
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 10px;
            position: absolute; 
            bottom: 0;
        }
        .product-item p {
            font-size: 16px; 
            color: #666;
            margin-top: 10px; 
            text-align: left;
        }
       
        .enlarged {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 3;
            display: none;
            justify-content: center;
            align-items: center;
        }
        .enlarged img {
            max-width: 90%;
            max-height: 90%;
        }
        .enlarged-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .enlarged-img-container {
            flex: 1;
            text-align: center;
            padding: 20px;
        }
        .enlarged-img-container img {
            max-width: 100%;
            max-height: 100%;
        }
        .enlarged-info {
            flex: 1;
            padding: 20px;
            text-align: left;
            color: #fff;
        }
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }
        .product-item-content .product-price {
            display: none; 
        }
       .tilaa-button{
            margin-left: 120px;
            margin-bottom: 10px;
            position: absolute; 
            bottom: 0;
            background-color: #003366;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            transition: background-color 0.3s;
         }
         .tilaa-button:hover{
            background-color: #001f4d;
         }
         .footer {
    background-color: #003366;
    color: white;
    padding: 40px 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-content,
.footer-info {
    flex: 1 1 100%;
    max-width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-start; 
    margin-left: 155px;
}

.footer h2 {
    margin-bottom: 10px;
}

.footer p {
    margin-bottom: 20px;
}

.footer form {
    display: flex;
}

.footer input[type="email"] {
    width: 70%;
    padding: 10px;
    border: none;
    border-radius: 5px 0 0 5px;
}

.footer button {
    background-color: #ff6600;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}
.footer button:hover{
    background-color: #f36400;
}

@media (max-width: 390px) {
    .left-navbar {
            height: 100%;
            width: 300px;
            position: fixed;
            z-index: 3;
            top: 65px;
            left: 0;
            background-color: #16508b;
            overflow-x: hidden;
            transition: 0.5s;
        }
        .topnav-right {
    float: right;
    width: 30%;
}
        .left-navbar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 25px;
            color: #fcfaff;
            display: block;
            transition: 0.3s;
        }
        .left-navbar a:hover {
            color: #66ccff;
        }
        .left-navbar .submenu {
            display: none;
            padding-left: 20px;
        }
        .left-navbar .has-submenu.active + .submenu {
            display: block;
        }
        .topnav-right {
    padding: 14px;
}

        body {
            background-color: rgba(240, 240, 240, 0.9);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            /* mobile viewport bug fix */
            min-height: -webkit-fill-available;
        }
        /* Top Navbar */
        .top-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #003366;
            z-index: 2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            padding: 10px 20px;
            margin: 0;
        }
        .top-navbar-logo {
            font-size: 29px;
            color: #fcfaff;
            text-decoration: none;
            margin-right: auto;
            margin-left: 10px;
        }
        .top-navbar-toggle {
            font-size: 30px;
            color: #fcfaff;
            cursor: pointer;
        }
}

.contact-icons {
    flex: 1 1 100%;
    text-align: center;
    margin-top: 20px;
}

.contact-icons a {
    color: white;
    margin: 0 10px;
    font-size: 24px;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-icons a:hover {
    color: #ff6600;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

html {
    height: -webkit-fill-available;
}


    </style>
</head>
<body>



<!-- Ylempi Navbar -->

<div class="top-navbar">
    <span class="top-navbar-toggle" onclick="toggleLeftNavbar()">&#9776;</span>
    <a href="#" class="top-navbar-logo">TechWave</a>
   
    <?php if (isset($user)): ?>
        <div class="topnav-right">
        <a href="profile.php">Profile</a>
  <a href="logout.php">Log out</a>

</div>
</div>

</div>
<?php else: ?>


<div class="topnav-right">
  <a href="login.php">Log in</a>
<a href="signup.html">Sign up</a>
</html>



</div>
</div>
<?php endif; ?>

<!-- Vasen Navbar -->
<div id="leftNavbar" class="left-navbar">
    <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">Puhelimet</a>
    <div class="submenu">
        <a href="puhelimet.php">Puhelimet</a>
        <a href="kaapelit.php">Laturit&Kaapelit</a>
    </div>
    <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">Kamerat</a>
    <div class="submenu">
        <a href="kamerat.php">Pikakamerat</a>
        <a href="kamerat2.php">Digikamerat</a>
    </div>
    <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">Ääni</a>
    <div class="submenu">
        <a href="kaiuttimet.php">Kaiuttimet</a>
    </div>
    <a href="#" class="has-submenu" onclick="toggleSubmenu(this)">Ota yhteyttä</a>
    <div class="submenu">
        <a href="Yhteystiedot.php">Yhteystiedot</a>
    </div>
</div>

<div class="content">

</div>

<div class="product-container">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "product";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product-item'>";
            echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "'>";
            echo "<div class='product-item-content'>";
            echo "<p>" . $row["name"] . "</p>";
            echo "<h4>" . $row["description"] . "</h4>";
            echo "<p class='product-price'>" . $row["price"] . "</p>"; 
            echo "<button class='tilaa-button'>Lisää</button>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No products available";
    }
    $conn->close();
    ?>
</div>

<div id="enlargedView" class="enlarged">
    <span class="close-button" onclick="closeEnlargedView()">×</span> 
    <div class="enlarged-content">
        <div class="enlarged-img-container">
            <img id="enlargedImg" src="" alt="Enlarged Image">
        </div>
        <div class="enlarged-info">
            <h2 id="productName"></h2>
            <h2 id="productDescription"></h2>
            <p id="productPrice"></p> 
        </div>
    </div>
</div>

<div class="content1">
<?php include "karuselli.html" ?>
</div>
<br><br><br>

<!-- Cool footer -->
<div class="footer">
    <div class="footer-content">
        <h2>Tilaa TechWave lehti</h2>
        <p>Saat lehden joka kuukausi, kunnes lopetat tilauksen.</p>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Sähköposti">
            <button type="submit">Tilaa</button>
        </form>
    </div>
    <div class="footer-info">
        <h2>Ota yhteyttä</h2>
        <p><strong>Sähköposti:</strong> info@techwave.fi</p>
        <p><strong>Puhelin:</strong> 010 123 4567</p>
        <p><strong>Osoite:</strong> Katu 123, 00100 Kokkola</p>
    </div>
    <div class="contact-icons">
        <a href="https://www.facebook.com/?locale=fi_FI"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/?lang=fi"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>


<script>
    function toggleSubmenu(el) {
        el.classList.toggle("active");
    }

    function toggleLeftNavbar() {
        var leftNavbar = document.getElementById("leftNavbar");
        leftNavbar.style.width = leftNavbar.style.width === "0px" ? "250px" : "0";
    }

    const productItems = document.querySelectorAll('.product-item');

    productItems.forEach(item => {
        item.addEventListener('click', function() {
            const imgSrc = item.querySelector('img').src;
            const name = item.querySelector('p').textContent;
            const description = item.querySelector('h4').textContent;
            const price = item.querySelector('.product-price').textContent; 

            const enlargedImg = document.getElementById('enlargedImg');
            enlargedImg.src = imgSrc;
            enlargedImg.alt = name;

            document.getElementById('productName').textContent = name;
            document.getElementById('productDescription').textContent = description;
            document.getElementById('productPrice').textContent = price; 

            const enlargedView = document.getElementById('enlargedView');
            enlargedView.style.display = 'flex';
        });
    });

    document.getElementById('enlargedView').addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });

    function closeEnlargedView() {
        const enlargedView = document.getElementById('enlargedView');
        enlargedView.style.display = 'none';
    }
</script>

</body>
</html>


