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

// Lisää tuote
if (isset($_POST['add_product'])) { 
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['description'];
    $product_category = $_POST['category']; 
    $product_price = $_POST['price']; 
    
    // Kuvan käsittely
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Tarkistetaan onko kuva
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Tiedosto ei ole kuva";
            $uploadOk = 0;
        }
    }

    // Tarkistetaan tiedoston koko
    if ($_FILES["image"]["size"] > 500000) {
        echo "Liian iso tiedosto";
        $uploadOk = 0;
    }

    // Salli vain tietyt tiedostomuodot
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "avif" && $imageFileType != "webp") {
        echo "Vain JPG, JPEG, PNG, AVIF, WEBP & GIF";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Tiedoston lisääminen epäonnistui";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "Tiedosto " . htmlspecialchars(basename($_FILES["image"]["name"])) . " on lisätty";
            // Lisää tuote tietokantaan
            $sql = "INSERT INTO products (id, name, image_url, description, category, price) VALUES ('$product_id', '$product_name', '$targetFile', '$product_description', '$product_category', '$product_price')";

            if ($conn->query($sql) === TRUE) {
                echo "Tuote lisätty onnistuneesti";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Tiedoston lisäys epäonnistui";
        }
    }
}


//muokkaa tuotetta
if (isset($_POST['edit_product'])) {
    $productID = $_POST['edit_product_id'];
    $newProductName = $_POST['new_product_name'];
    $newProductDescription = $_POST['new_description'];
    $newProductPrice = $_POST['new_price'];


    // Päivitä tuotteen tiedot tietokantaan
    $sql = "UPDATE products SET name='$newProductName', description='$newProductDescription', price='$newProductPrice' WHERE id=$productID";

    if ($conn->query($sql) === TRUE) {
        echo "Tuotteen tiedot päivitetty onnistuneesti";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Poista tuote
if (isset($_POST['remove'])) {
    $productID = $_POST['remove_product'];

    // Poista tuote tietokannasta
    $sql = "DELETE FROM products WHERE id=$productID";

    if ($conn->query($sql) === TRUE) {
        echo "Tuote poistettu onnistuneesti";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




// Sulje yhteys
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<!-- Link to return to the admin page -->
    <br><br>
    <a href="admin.php">Palaa admin-sivulle</a>
    
</body>
</html>


