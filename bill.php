<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <title>receipt table</title>
 
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
  .button{
  background-color:grey;
  color:white;
  box-shadow: black;
  font-size: 18px;

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
<p class="change">contact: 022-2987654</br>www.goodpharmacy.com</p>
<h3>RECEIPT</h3>
<table style='width:90%' align="center">
 <tr>
  <th>med_id</th>
  <th>med_name</th>
  <th>quantity</th>
  <th>price(per unit in Rs.)</th>
 </tr>
<?php
$conn= mysqli_connect('localhost', 'root', 'GoodDatabase5', 'project');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT med_id,med_name,quantity,price,time_stamp,SUM(price*quantity) AS Total_cost FROM billing_hist WHERE time_stamp=(SELECT MAX(time_stamp) FROM billing_hist)";

$result =mysqli_query($conn,$sql);
if($result)
{
while($row= mysqli_fetch_assoc($result))
{
echo"<tr><td>".$row["med_id"]."</td><td>".$row["med_name"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td></tr>";
echo"<tr><td style='text-align: left;'>TOTAL (in Rs.)</td>
    <td colspan='3' style='text-align:right;'>".$row["Total_cost"]."</td></tr>";
}

echo"date:".date("Y-m-d") ."  ".date("l")."<br>";
echo "time: " . date("h:i:sa")."<br>";
}
?>
</table>
</div>
<div>
<form action="newpr.php">
    <input type="submit" value="Home" class="button"></form>
</div>
<button onclick="myFunction()">Print this page</button>
<script>
function myFunction() {
  window.print();
}
</script>
</body>
</html>







 