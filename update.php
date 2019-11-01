<!DOCTYPE html>
<html>
<head>
 <title>receipt table</title>
 <h1 style="text-align: center;">GOOD PHARMACY 
</head>
<script>
function myFunction() {
  alert("STOCK UPDATED");
}
</script>	
<style>
	body{
		background-image: url("https://previews.123rf.com/images/leaf/leaf1508/leaf150800532/44323995-medicines-arranged-in-shelves-at-pharmacy.jpg");
	}
</style>
<body>
<div style="width:500pSx;height:450px;margin:auto;border:solid;border-width:5px;text-align: center;font-size: 16px;">
<form action="update1.php" method="POST">

<h2>Medicine id<br><input type="text" name="medid"><br>
<h2>Quantity<br><input type="text" name="quantity"><br>
<button onclick="myFunction()">SAVE</button>
</form>
</div>
</body>
</html>