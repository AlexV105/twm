<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgba(240, 240, 240, 0.9); 
            margin: 0;
            padding: 20px;
            color: #003366;
        }
        h1 {
            color: #003366; 
            text-align: center; 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            font-size: 36px;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
            color: #003366; 
            font-size: 18px; 
        }
        input[type="text"],
        input[type="file"],
        textarea,
        input[type="number"] {
            width: 100%;
            padding: 10px; 
            margin-bottom: 20px; 
            border: 2px solid #003366; 
            border-radius: 6px; 
            box-sizing: border-box;
            font-size: 16px; 
            background-color: #fafafa; 
            color: #003366;
        }
        input[type="text"]:focus,
        input[type="file"]:focus,
        textarea:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #003366;
        }
        button {
            background-color: #003366; 
            color: #fff; 
            padding: 12px 24px; 
            border: none;
            border-radius: 6px; 
            cursor: pointer;
            display: block; 
            margin: 0 auto;
            font-size: 16px; 
            text-transform: uppercase; 
            letter-spacing: 1px; 
            transition: background-color 0.3s ease; 
            box-shadow: 0 4px 6px rgba(0, 51, 102, 0.1);
        }
        button:hover {
            background-color: #001f33; 
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 51, 102, 0.1);
        }
        center {
            display: flex;
            justify-content: center;
        }
        @media screen and (max-width: 600px) {
            input[type="text"],
            input[type="file"],
            textarea,
            input[type="number"] {
                font-size: 14px;
            }
            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <h1>Admin</h1>
    <!--Lisää-->
    <form action="process.php" method="post" enctype="multipart/form-data">
        <label for="product_id">Tuotteen ID:</label><br>
        <input type="number" id="product_id" name="product_id" required><br><br> 
        <label for="product_name">Tuotteen nimi:</label><br>
        <input type="text" id="product_name" name="product_name" required><br> 
        <label for="image">Kuva tuotteesta:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br>
        <label for="description">Tuotteen hinta:</label><br>
        <textarea id="description" name="description" rows="2" cols="50" required></textarea><br>
        

        <label for="price">Tuotteen kuvaus:</label><br>
        <textarea id="price" name="price" rows="4" cols="50" required></textarea><br>

        <label for="category">Kategoria (pikakamerat, digikamerat, puhelimet, kaapelit, kaiuttimet):</label><br>
        <input type="text" id="category" name="category" required><br><br>
        <button type="submit" name="add_product">Lisää</button>
    </form>

    <!-- Poista -->
    <br><br>
    <form action="process.php" method="post">
        <label for="remove_product">Poista tuote (ID):</label><br>
        <input type="number" id="remove_product" name="remove_product" required><br><br>
        <button type="submit" name="remove">Poista</button>
    </form>

    
    <!-- Muokkaa -->
    <br><br>
    <form action="process.php" method="post">
        <label for="edit_product_id">Muokkaa tuotetta (ID):</label><br>
        <input type="number" id="edit_product_id" name="edit_product_id" required><br><br>
        <label for="new_product_name">Muokkaa nimeä:</label><br>
        <input type="text" id="new_product_name" name="new_product_name" required><br><br>
        <label for="new_description">Muokkaa hintaa:</label><br>
        <textarea id="new_description" name="new_description" rows="2" cols="50" required></textarea><br><br>
        <label for="new_price">Muokkaa kuvausta:</label><br>
        <input type="text" id="new_price" name="new_price" rows="4" cols="50" required></input><br><br>
        <button type="submit" name="edit_product">Tallenna muutokset</button>
    </form>
</body>
</html>
 