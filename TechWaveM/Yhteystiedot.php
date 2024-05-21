<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechWave - Yhteystiedot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/tausta.avif');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 800px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            color: #333; 
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #003366;
            font-size: 32px;
        }
        .contact-info {
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f5f5f5; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info p {
            margin-bottom: 15px;
            font-size: 18px;
            color: #333;
        }
        .contact-info p strong {
            color: #003366;
        }
        .contact-icons {
            text-align: center;
            margin-top: 20px;
        }
        .contact-icons a {
            color: #003366;
            text-decoration: none;
            margin: 0 10px;
            font-size: 24px;
            transition: color 0.3s;
        }
        .contact-icons a:hover {
            color: #ff6600;
        }
    </style>
</head>
<body>
<?php include 'navbar.html'; ?>

<div class="container">
    <h1>Yhteystiedot</h1>
    
    <div class="contact-info">
        <p><strong>Osoite:</strong> Katu 123, 00100 Kokkola</p>
        <p><strong>Puhelin:</strong> 010 123 4567</p>
        <p><strong>Sähköposti:</strong> info@techwave.fi</p>
    </div>

    <div class="contact-icons">
        <a href="https://www.facebook.com/?locale=fi_FI"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/?lang=fi"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>

</body>
</html>
