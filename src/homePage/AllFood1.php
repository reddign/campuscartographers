<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
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
        
        <a href="https://bluejaypantry.etowndb.com/src/homePage/index.php">Home</a>
        <a href="\src\about\about.html">About</a>
        <a href="\src\contact\contact.html">Contact</a>
        <a href="\src\contributors\team.html">Our Team</a>
        <a href="\src\loginPage\login.php">Admin Login</a>
        <!-- Hidden Admin Tabs -->
        <div id="adminTabs" class="hidden">
          <a href="\src\editinventory\edit.php">Edit Inventory</a>
          <a href="AllFood.php">Reports</a>
          <a href="\src\loginPage\logout.php" id="logout">Logout</a>
        </div>

        <?php
        if (isset($_SESSION["LoginStatus"]) && $_SESSION["LoginStatus"]== "YES") {
        ?>
          <script type="text/javascript">
            let adminTabs = document.getElementById("adminTabs");
            adminTabs.classList.remove("hidden");
          </script>
        <?php
        } else {
        ?>
          <script type="text/javascript">
            let adminTabs = document.getElementById("adminTabs");
            adminTabs.classList.add("hidden");
          </script>
        <?php
        }
        ?> 

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

        


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
  padding-left: 230px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: rgb(127, 140, 219);}

.show {display: block;}
</style>
</head>
<body>

<h2 style="padding-left: 230px">Total Food Grabbed From Category</h2>
<p style="padding-left: 230px">Choose a Graph option</p>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Options</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="AllFood.php">Total Foods per type</a>
    <a href="AllFood1.php">Total Foods in Category per Type</a>
    <a href="AllFood2.php">Total Orders per day with date range</a>
  </div>
</div>


<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="padding-left: 230px">
 Enter a Category ID(1-5): <input type="number" name="category" min="1" max="5">
 
  <input type="submit" >
</form>
<p style="padding-left: 230px">1- Breakfast Foods | 2- Canned Goods | 3- Fresh Foods | 4- Snacks | 5- Wellness Products</p>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $catID = $_POST['category'];
    if (empty($catID)) {
        echo "ID is empty";
    } else {
        echo "Category ID = $catID";
    }
}
?>

</body>
</html>


<?php 
 $con = mysqli_connect('156.67.74.51','u413142534_bluejay','Xdr341Food','u413142534_pantry');
?>



<html>
<head>
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart); 
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

    

 ['Total Amount For Each Product','Product Types'],

 <?php 
            
			$query = "select P.productName, COUNT(BI.basketID) total
            from product P,
            BasketItem BI
            where P.productID = BI.productID and catID = $catID
            GROUP BY P.productName";
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['productName']."',".$row['total']."],";
			 }
			 ?> 
 
 ]);

 
 var chart = new google.visualization.BarChart(document.getElementById("Bar"));
 chart.draw(data, {width: 1000, height: 540, is3D: true, title: 'Products Grabbed Within A Category'});
 
 }
	
   </script>

</head>
<body>
 <div class="container-fluid">
 <div id="Bar" style="width: 100%; height: 500px; padding-left: 230px;"></div>
 </div>

</body>
</html>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>


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


