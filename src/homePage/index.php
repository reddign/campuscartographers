<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (isset($_SESSION["LoginStatus"]) && $_SESSION["LoginStatus"]== "YES") {
  ?>
  <script>
    let adminTabs = document.getElementById("adminTabs");
    adminTabs.classList.remove("hidden");
  </script>
  <?php
} else {
  ?>
  <script>
    let adminTabs = document.getElementById("adminTabs");
    adminTabs.classList.add("hidden");
  </script>
  <?php
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueJay Pantry</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <!-- Side navigation -->
    <div class="sidenav">
        <a><img id="EtownLogo" src="\docs\images\ETOWN_Footer_Logo.png"></a>
        <a><span class="border"></span></a>
        <!-- <a href="#">Breakfast Foods</a>
        <a href="#">Canned Goods</a>
        <a href="#">Fresh Foods</a>
        <a href="#">Snacks</a>
        <a href="#">Wellness Products</a> -->
        
        <a href="https://bluejaypantry.etowndb.com/">Home</a>
        <a href="\src\about\about.html">About</a>
        <a href="\src\contact\contact.html">Contact</a>
        <a href="\src\contributors\team.html">Our Team</a>
        <a href="\src\loginPage\login.php">Admin Login</a>

        <div id="adminTabs" class="hidden">
          <a href="\src\editinventory\edit.php">Edit Inventory</a>
          <a href="AllFood.php">Reports</a>
        </div>
            
        <!-- <button id="loginBtn" type="button" 
        style="position: absolute;
        bottom: 70px;
        left: 20px;
        background-color: #004B98;
        color: #c8c8c8;
        padding: 5px;
        font-weight: bold;
        border-radius: 4px;
        border-color: #004B98;" 
        >Admin Login</button> -->
        <!-- <a href="\src\loginPage\login.html">Edit Inventory</a> -->
    </div>
    
    <!-- Page content -->
    <div class="main">
        <div class="header">
            <a><img id="PantryLogo" src="\docs\images\BlueJayPantryLogo(1).png" height="150"></a> 
            <a class="cartstyle"><img id="cart" src="\docs\images\shopping-cart.png" height="75"></a>
        </div> 
        <div class="inventoryTabs">
            <a class="tab" href="/src/homePage/index.php?catID=1">Breakfast Foods</a>
            <a class="tab" href="/src/homePage/index.php?catID=2">Canned Goods</a>
            <a class="tab" href="/src/homePage/index.php?catID=3">Fresh Foods</a>
            <a class="tab" href="/src/homePage/index.php?catID=4">Snacks</a>
            <a class="tab" href="/src/homePage/index.php?catID=5">Wellness Products</a>
        </div>
    </div>

        <div class="content">
        <?php 
	    
        require "../includes/config.php";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
          
        $categoryID = isset($_GET["catID"])?$_GET["catID"]:null;

	    if(isset($categoryID)) 
        {$sql = "SELECT * from product where catID = :f";}
        else
	    {$sql = "SELECT * from product";}
        
        $stmt = $conn->prepare($sql);
        if(isset($categoryID)) 
        $stmt->bindParam(':f', $categoryID, PDO::PARAM_INT);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        $products = $stmt->fetchAll();
        $i = 0;
        $imgPath = $products["img"];
          echo "<div class='tableDiv'><table class='table'>";
          foreach($products as $product){
            if($i%5 == 0){
              echo"<tr>";
            }
            echo"<td><img class='productImg' src='../../{$product['img']}' alt='productImg'><br><button class='addCart' type='button'>Add to Cart</button><p>{$product["productName"]}<br> Qty: {$product["quantity"]}</p></td>";
            if($i%5 == 4){
              echo"</tr>";
            }
            $i++;
            // echo "<td>
            // {$product["productName"]} {$product["quantity"]}
            // <img src='{$imgPath}'>
            // </td>";
          }
          echo "</tr></table></div>";
        
        // foreach($products as $product){
        //     echo "<div class= 'center'>  <a>{$product["productName"]}{$product["quantity"]}</a> </div>". "<BR>";
	    // }  
        ?> 
    </div>  

    <!-- Cart Form -->    
    <div id="cartDiv" class="hidden">
    <form id="cartForm" action="" method="post">
        <h2>Your Pantry Cart</h2>
        <BR>
        <hr>
        <div>
            <img src="../../docs/images/cannedgoodsTest.jpg" height="100px" width="100px">
            <label>Beans </label>
            <label for="qty">Qty: </label>
            <input id="qty" type="number" width="20px" min="0" max="10" placeholder="0">
            <label> In stock: 20</label>
        </div>
        <hr>
        <div>
        <button class="cancelBtn" type="submit">CANCEL</button>
        <button class="submitBtn" type="submit">CHECKOUT</button>
        </div>
    </form>
    </div>
    </div>
        
</body>
</html>