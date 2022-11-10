<!-- <?php
// require_once "includes/database_functions.php";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueJay Pantry</title>
    <link rel="stylesheet" href="styles.css">
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
        <a><img id="cart" src="campuscartographers\docs\images\moving-cart.png"></a> 
        <a href="\src\about\about.html">About</a>
        <a href="\src\contact\contact.html">Contact</a>
        <a href="\src\contributors\team.html">Our Team</a>
        <a href="\src\loginPage\login.php">Admin Login</a>
        <a class="hidden" href="">Edit Inventory</a>
        <a class="hidden" href="#">Reports</a>
            
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
        </div>
        <div class="inventoryTabs">
            <a class="tab" href="#">Breakfast Foods</a>
            <a class="tab" href="#">Canned Goods</a>
            <a class="tab" href="#">Fresh Foods</a>
            <a class="tab" href="#">Snacks</a>
            <a class="tab" href="#">Wellness Products</a>
        </div>
        <div class="content"></div>
    </div>
    
        
</body>
</html>