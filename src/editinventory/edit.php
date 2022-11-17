<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="home">
        <a href="https://bluejaypantry.etowndb.com/" >
            <img src="\docs\images\home-big.png" alt="home icon" height="75px">
        </a>
    </div>

<!-- <div id="main">
  <form action="formprocessor" method="POST">
    <h1>Edit Inventory</h1>
    <label id="productNameLabel">Product Name:</label><br>
        <input name ="productName" type ="text" placeholder="Type the product's name">
        <br>
        <br>
        <label id="quantityLabel">Quantity:</label><br>
        <input name ="quantity" type = "text" placeholder="Type the quantity">
        <br>
        <input name="mySubmit" type="submit" value="Submit!">
  </form>
</div> -->
<div id="form">
  <select>
     <option value="">Select Category</option>
     <option value="1">Breakfast</option>
     <option value="2">Canned Goods</option>
     <option value="3">Fresh Foods</option>
     <option value="4">Snacks</option>
     <option value="5">Wellness</option>
  </select>
  <!-- <select>
     <option value="">Select Category</option>
     <option value="1">Breakfast</option>
     <option value="2">Canned Goods</option>
     <option value="3">Fresh Foods</option>
     <option value="4">Snacks</option>
     <option value="5">Wellness</option>
  </select> -->
  <input type="number">
  <input type="submit" value="submit">
</div>
</body>
</html>



<?php

require_once "../includes/config.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  

  
  if(isset($categoryID))
  {$sql = "update product set quantity = $quantity where productName = $pName";}

?>