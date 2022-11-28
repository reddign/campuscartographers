<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory</title>
    <link rel="stylesheet" href="edit-styles.css">
    <script src="edit.js"></script>
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
<!-- <div id="form">
  <select>
     <option value="">Select Category</option>
     <option value="1">Breakfast</option>
     <option value="2">Canned Goods</option>
     <option value="3">Fresh Foods</option>
     <option value="4">Snacks</option>
     <option value="5">Wellness</option>
  </select> -->
  <!-- <select>
     <option value="">Select Category</option>
     <option value="1">Breakfast</option>
     <option value="2">Canned Goods</option>
     <option value="3">Fresh Foods</option>
     <option value="4">Snacks</option>
     <option value="5">Wellness</option>
  </select> -->
  <!-- <input type="number">
  <input type="submit" value="submit"> -->
  <div id="edit-add">
    <button id="add">Add Products</button>
    <button id="edit">Edit Products</button>
  </div>

  <main>
    <div class="form">
    <form id="input-form" class="hidden" method="POST">
      <div>
        <label for="cat-input">Select Category: </label>
        <select id="cat-input" required>
          <option value="">Select Category</option>
          <option value="1">Breakfast</option>
          <option value="2">Canned Goods</option>
          <option value="3">Fresh Foods</option>
          <option value="4">Snacks</option>
          <option value="5">Wellness</option>
        </select>
        <!-- <input id="name-input" name="name" type="text" pattern="[A-Z][a-z]+ [A-Z][a-z]+"
          title="Please provide a name in &lt;First Last&gt format" required /> -->
      </div>
      <div>
        <label for="product-input">Product Name: </label>
        <input id="product-input" name="product-name" type="text" title="Please provide a product name"required />
      </div>
      <div>
        <label for="qty-input">Qty: </label>
        <input id="qty-input" name="qty" type="number" min=0 required />
      </div>
      <div>
        <label for="img-name">File Name: </label>
        <input id="img-name" type="text" name="minutes" title="Please provide the name of your image file in &lt;example.jpg&gt; format"/>
        <input id="img-file" type="file" name="img-file">
      </div>
      <!-- <textarea name="question" minlength=20 rows=5 required placeholder="Enter your question..."></textarea> -->
      <button id="submit-btn" type="submit">Add Product</button>
    </form>
    <!-- <p id="results"></p>
    <div id="queue">
    </div> -->
    </div>
  </main>


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