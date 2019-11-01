<?php
require "billing_hist_front.php";
$cst_id=$_POST['c_id'];
// require "billing_hist_front.php";
// if(isset($_POST["cust_id"]))
// {
	echo "<table border=1>";
	echo "<thead>
	<tr>
		<th>Phone no.</th>
		<th>Medicine id.</th>
		<th>Medicine Name</th>
		<th>Cost</th>
		<th>Time</th>
	</tr>
	</thead>";
	
	$conn=mysqli_connect('localhost','root','GoodDatabase5','project');
	$sql= "SELECT * FROM billing_hist WHERE cust_id='$cst_id';";
	$res= mysqli_query($conn,$sql);
	if($res){
		if($cst_id=="")
	{	
		
		$sql="SELECT * FROM billing_hist;";   
		$result = mysqli_query($conn,$sql);       
		while($row=mysqli_fetch_assoc($result))
		{
		
			echo "<tr>";
			echo '<td>' . $row['cust_id'] . '</td>';               
			echo '<td>' . $row['med_id'] . '</td>';
			echo '<td>' . $row['med_name'] . '</td>';
			echo '<td>' . $row['price'] .'</td>';
			echo '<td>' . $row['time_stamp'] .'</td>';
			echo"</tr>";
		}
		echo "</table>";
		mysqli_free_result($result);
		}
		else{
	while($row=mysqli_fetch_assoc($res))
	{
		echo"<tr><td>".$row["cust_id"]."</td><td>".$row["med_id"]."</td><td>".$row["med_name"]."</td><td>".$row["price"]."</td></tr>";
		// $cust_id=$row["cust_id"];
		// $med_id=$row["med_id"];
		// $med_name=$row["med_name"];
		// $price=$row["price"];

		// echo"<tbody>";
		// echo"<tr>";

		// echo"<td>";
		// echo $cust_id;
		// echo"</td>";

		// echo"<td>";
	 //    echo $med_id;
	 //    echo"</td>";

	 //    echo"<td>";
	 //    echo $med_name;
	 //    echo"</td>";

	 //    echo"<td>";
	 //    echo "$",$price;
	 //    echo"</td>";
	}
}}
	 //mysqli_free_result($res);

// }
?>