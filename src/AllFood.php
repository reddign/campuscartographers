

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

 ['Total Amount','CategoryID'],
 <?php 
			$query = "select P.productName, COUNT(BI.basketID) total
      from product P,
      BasketItem BI
      where P.productID = BI.productID 
      GROUP BY P.productName;";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['productName']."',".$row['total']."],";
			 }
			 ?> 
 
 ]);

 
 var chart = new google.visualization.PieChart(document.getElementById("Bar"));
 chart.draw(data, {width: 1000, height: 540, is3D: true, title: 'Total Food Grabbed'});
 
 }
	
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="Bar" style="width: 100%; height: 500px;"></div>
 </div>

</body>
</html>