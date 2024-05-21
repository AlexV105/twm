<?php 
$conn=mysqli_connect("localhost","root","root","test");

$query="select * from registration";
$connect=mysqli_query($conn,$query);
$num=mysqli_num_rows($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        body {
            background-color: white;
        }
        .topnav {
  overflow: hidden;
  background-color: #16508b;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: #16508b;
}

.topnav a.active {
 
  color: white;
}

.topnav-right {
    float: right;
}
body {background-color: white;}
@media screen and (max-width: 900px)


        </style>
</head>

<body>
</html><div class="topnav">
  <a class="active" href="index.php">Home</a>
<div class="topnav-right">
  <a href="profile.php">Profile</a>
  <a href="logout.php">Log out</a>
  
</div>
</div>
<h1>Profile</h1>
<form actions="" method="POST">
<?php
  if ($num>0) {
      while($data=mysqli_fetch_assoc($connect)){
        echo "
        <tr>
        Address: <td>".$data["firstName"]."</td> </br>
        Phone number: <td>".$data["lastName"]."</td> </br>
        </tr>
        ";
      }
  }
?>
    </br><input type="button" class="button_active" onclick="location.href='info/index.html';" value="Edit profile" />
</form>

</body>
