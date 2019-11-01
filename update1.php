<?php

if(isset($_POST['medid'])&&isset($_POST['quantity']))
{
$medid=$_POST["medid"];

$quantity=$_POST["quantity"];

$conn=mysqli_connect("localhost","root","GoodDatabase5","project");
$query=" update medicine set quantity=quantity+$quantity where med_id='$medid'";
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
