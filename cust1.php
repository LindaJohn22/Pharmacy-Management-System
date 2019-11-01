



<?php

if(isset($_POST['phoneno'])&&isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['gender']))
{
$phoneno=$_POST["phoneno"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$conn=mysqli_connect("localhost","root","GoodDatabase5","project");
$query=" INSERT INTO customer (phone_no,f_name,l_name,gender)VALUES('$phoneno','$fname','$lname','$gender')";
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
