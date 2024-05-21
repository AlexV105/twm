<?php
// Tietokantayhteys
$servername = "localhost";
$username = "root";
$password = "root";
$database = "products";

// Luo yhteys
$conn = new mysqli($servername, $username, $password, $database);

// Tarkista yhteys
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE category = 'kaiuttimet'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TechWave.css">
    <title>Kaiuttimet</title>
</head>
<body>

<?php include 'navbar.html'; ?> 

<div class="content">
    <center><h2>Saatavilla olevat kaiuttimet</h2></center>
    <div class="product-container">
        <?php
        if ($result->num_rows > 0) {
            $count = 0;
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-item'>";
                echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "'>";
                echo "<p>" . $row["name"] . "</p>";
                echo "<h4>" . $row["description"] . "</h4>";
                echo "<p class='product-price'>" . $row["price"] . "</p>"; 
                echo "<button class='tilaa-button'>Lisää</button>";
                echo "</div>";
                $count++;
               
                if ($count % 4 == 0) {
                    echo "<br>";
                }
            }
        } else {
            echo "Ei tuotteita";
        }

        $conn->close();
        ?>

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
  

<script>function openLeftNavbar() {
        document.getElementById("leftNavbar").style.width = "250px";
    }

    function closeLeftNavbar() {
        document.getElementById("leftNavbar").style.width = "0";
    }

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
        const price = item.querySelector('.product-price').textContent; // Get price here

        const enlargedImg = document.getElementById('enlargedImg');
        enlargedImg.src = imgSrc;
        enlargedImg.alt = name;

        document.getElementById('productName').textContent = name;
        document.getElementById('productDescription').textContent = description;
        document.getElementById('productPrice').textContent = price; // Display price

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
}</script>

</body>
</html>
