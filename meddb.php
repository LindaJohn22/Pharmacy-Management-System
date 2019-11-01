<!DOCTYPE html>
<html>
<head>
<title>Medicine Details</title>
<h1>MEDICINE DETAILS<br><br>
<style>
body
{
background-image:url("https://previews.123rf.com/images/leaf/leaf1508/leaf150800532/44323995-medicines-arranged-in-shelves-at-pharmacy.jpg");
padding-left: 380px;
padding-top: 150px;
font-size: 15px;
}
</style>
</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','GoodDatabase5','project');
$med_id=$_POST['med_id'];
 if(isset($_POST['med_id']))
{ 		
    if($med_id=="")
	{	echo "<table border='1' cellpadding='3'>";
		echo "<tr><th>Medicine-id</th><th>Medicine-name</th><th>Stock</th><th>Price</th></tr>";
		
		$sql="SELECT * FROM medicine;";   
		$result = mysqli_query($conn,$sql);       
		while($row=mysqli_fetch_assoc($result))
		{
			$med_id=$row['med_id'];
			$med_name=$row['med_name'];
			$stock=$row['quantity'];
			$price=$row['price'];
			echo "<tr>";
			echo '<td>' . $row['med_id'] . '</td>';               
			echo '<td>' . $row['med_name'] . '</td>';
			echo '<td>' . $row['quantity'] . '</td>';
			echo '<td>' . $row['price'] .'</td>';
		
		}
		echo "</table>";
		mysqli_free_result($result);
		}
		else
		{
			echo "<table border='1' cellpadding='3'>";
		echo "<tr><th>Medicine-name</th><th>Stock</th><th>Price</th></tr>";
		$med_id=$_POST['med_id'];
				$sql="SELECT med_name, quantity, price FROM medicine where med_id=$med_id;";   
		$result = mysqli_query($conn,$sql);       
		while($row=mysqli_fetch_assoc($result))
		{
			$med_name=$row['med_name'];
			$stock=$row['quantity'];
			$price=$row['price'];
			echo "<tr>";
			echo '<td>' . $row['med_name'] . '</td>';
			echo '<td>' . $row['quantity'] . '</td>';
			echo '<td>' . $row['price'] .'</td>';
		
		echo "</table>";}
		mysqli_free_result($result);
	}    
}
?> 
</body>
</html>