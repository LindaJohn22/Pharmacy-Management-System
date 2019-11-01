<?php
if(isset($_POST['phoneno'])&&isset($_POST['medid'])&&isset($_POST['medname'])&&isset($_POST['quantity']))
{
$phoneno=$_POST["phoneno"];
$medid=$_POST["medid"];
$medname=$_POST["medname"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$conn=mysqli_connect("localhost","root","GoodDatabase5","project");
$query=" INSERT INTO billing_hist (cust_id,med_id,med_name,quantity,price)VALUES('$phoneno','$medid','$medname','$quantity','$price')";
$result=mysqli_query($conn,$query)or die("failed to query database".mysqli_error($conn));
if ($result)
{
	header('Location: bill.php');
	echo "Saved into database";
}
else{
	header('Location: bill1.php?error');
}
}