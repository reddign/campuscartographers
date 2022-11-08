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
        <a href="\src\about\about.html">About</a>
        <a href="\src\contact\contact.html">Contact</a>
        <a href="\src\contributors\team.html">Our Team</a>
        <a href="\src\loginPage\login.html">Admin Login</a>
        <a class="hidden" href="">Edit Inventory</a>
        <a class="hidden"href="#">Reports</a>
            
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
        <div class="content">
            <?php
//    <!-- // (1) Open the database connection and use the winestore
   // database -->
   $connection = mysql_connect("156.67.74.51","u413142534_bluejay","Xdr341Food");

   mysql_select_db("u413142534_pantry", $connection);

//    <!-- // (2) Run the query on the winestore through the
   //  connection -->
   $result = mysql_query ("SELECT * FROM                
                          product", $connection);

//    <!-- // (3) While there are still rows in the result set,
   // fetch the current row into the array $row -->
   while ($row = mysql_fetch_row($result))
   {
    //  <!-- // (4) Print out each element in $row, that is,
     // print the values of the attributes -->
      for ($i=0; $i<mysql_num_fields($result); $i++){
        echo $row[$i] . " ";  
        console.log($row[$i]);
      }
         

    //   <!-- // Print a carriage return to neaten the output -->
      echo "\n";
   }
    // <!-- (5) Close the database connection -->
   mysql_close($connection);
?>
        </div>
    </div>
    
        
</body>
</html>