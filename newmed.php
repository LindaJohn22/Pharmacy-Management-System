



<?php

if(isset($_POST['medid'])&&isset($_POST['medname'])&&isset($_POST['quantity'])&&isset($_POST['price']))
{
$medid=$_POST["medid"];
$medname=$_POST["medname"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];

$conn=mysqli_connect("localhost","root","GoodDatabase5","project");
$query=" INSERT INTO medicine (med_id,med_name,quantity,price)VALUES('$medid','$medname','$quantity','$price')";
$result=mysqli_query($conn,$query)or die("failed to query database".mysqli_error($conn));

if ($result)
{
    
	echo "Saved into database";
	header('Location: newpr.php');
}
else{
	echo "error";
	header('Location: cust1.php?error');
}
}
?>
