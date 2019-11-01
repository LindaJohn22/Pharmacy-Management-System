<!DOCTYPE html>
<html>
<head>
<title>CUSTOMER DETAILS</title>
<h1>CUSTOMER DETAILS<br><br>
<style>
body
{
background-image:url("https://previews.123rf.com/images/leaf/leaf1508/leaf150800532/44323995-medicines-arranged-in-shelves-at-pharmacy.jpg");
padding-left: 380px;
padding-top: 150px;
font-size: 15px;
}
	.button{
  background-color:grey;
  color:white;
  box-shadow: black;
  font-size: 18px;

}
<form action="newpr.php">
    <input type="submit" value="Home" class="button"></form>
</style>
</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','GoodDatabase5','project');
$phone_no=$_POST['phone_no'];
 if(isset($_POST['phone_no']))
{ 		
    if($phone_no=="")
	{	echo "<table border='1' cellpadding='3'>";
		echo "<tr><th>Phone-no</th><th>First name</th><th>Last name</th><th>Gender</th></tr>";
		
		$sql="SELECT * FROM customer;";   
		$result = mysqli_query($conn,$sql);       
		while($row=mysqli_fetch_assoc($result))
		{
			$phone_no=$row['phone_no'];
			$f_name=$row['f_name'];
			$l_name=$row['l_name'];
			$gender=$row['gender'];
			echo "<tr>";
			echo '<td>' . $row['phone_no'] . '</td>';               
			echo '<td>' . $row['f_name'] . '</td>';
			echo '<td>' . $row['l_name'] . '</td>';
			echo '<td>' . $row['gender'] .'</td>';
			echo"</tr>";
		}
		echo "</table>";
		mysqli_free_result($result);
		}
		else
		{
			echo "<table border='1' cellpadding='3'>";
		echo "<tr><th>Phone no</th><th>First name</th><th>Last name</th><th>gender</th></tr>";
		$phone_no=$_POST['phone_no'];
				$sql="SELECT * FROM customer where phone_no=$phone_no;";   
		$result = mysqli_query($conn,$sql);       
		while($row=mysqli_fetch_assoc($result))
		{
			$phone_no=$row['phone_no'];
			$f_name=$row['f_name'];
			$l_name=$row['l_name'];
			$gender=$row['gender'];
			echo "<tr>";
			echo '<td>' . $row['phone_no'] . '</td>';                
			echo '<td>' . $row['f_name'] . '</td>';
			echo '<td>' . $row['l_name'] . '</td>';
			echo '<td>' . $row['gender'] .'</td>';
		
		}
		echo "</table>";
		mysqli_free_result($result);
		}
	} 

 	  

?> 
</body>
</html>