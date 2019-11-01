<?php
$username=$_POST["userid"];
$password=$_POST["password"];

$conn=mysqli_connect("localhost","root","GoodDatabase5","project");
$query="SELECT * FROM users WHERE userid='$username' AND password='$password'";
$result=mysqli_query($conn,$query)or die("failed to query database".mysqli_error($conn));
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
if($row['userid']==$username && $row['password']==$password)
{
header("Location: newpr.php");
}
else
{
header("Location:index.php?error");
}
?>
