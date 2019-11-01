<!DOCTYPE html>
<html>
<head>
 <title>MEDICINE LIST</title>
<style>
h1,p{
text-align:center;
}

h1{
margin-bottom:0px;
}
.change{
margin-top: 0px;
}
table,th,td{
border: 1px solid black;
border-collapse:collapse;
}
table{
margin-bottom:10px;
margin-top:10px;
}
th,td{
padding:5px;
text-align:left;
}
body{
		background-image: url("https://previews.123rf.com/images/leaf/leaf1508/leaf150800532/44323995-medicines-arranged-in-shelves-at-pharmacy.jpg");
	}
</style>
</style>
</head>
<body>
<div align="center" style="border: 5px solid black;width: 550px;height: 400px; background-color:lavender;margin:auto">
<h1>GOOD PHARMACY STORE</h1>


<table style='width:90%' align="center">
<?php

$conn=mysqli_connect("localhost","root","GoodDatabase5","project");

$result = mysqli_query($conn,"SELECT * FROM medicine");
		
echo "<table border='1' cellpadding='3'>";
echo "<tr><th>MED ID</th><th>Med-name</th><th>Stock</th></tr>";
if($result)
{       
while($row = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>" . $row["med_id"] . "</td>";               
echo "<td>" . $row["med_name"] . "</td>";
echo "<td>" . $row["quantity"] . "</td>";
}				
} 
        
echo "</table>";
?> 