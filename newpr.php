<!DOCTYPE html>
<html>
<head>
<title>GOOD PHARMACY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
h1{ padding:20px;
	width:1800px;
background-color:gray;
border-style:solid;
border-color:white;
}
body
{
background-image:url("https://i.pinimg.com/originals/02/2e/96/022e9691c5ba65d23cbf27a53f83163e.jpg");
}

div{

background-color:powderblue;
color:gray;
border:solid grey;
}

.center{
background-color:powderblue;
text-align:center;
width:340px;
height:250px;
padding:40px;
color:black;
}

.end{
	border-style:solid;
	text-align: center;
	width:50px;
	height:15px;
}

.button{
	background-color:grey;
	color:white;
	box-shadow: black;
	font-size: 14px;

}

</style>


</head>
<!-- <script>
function myFunction() {
  alert("Logging Out");
<a href="logout.php">
}
</script>
 -->
<body>


<h1 style="text-align:center;color:white">GOOD PHARMACY</h1>

<!-- <p class="end" style="text-align: right"> -->

<form action="index.php">
<input type="submit" value="Logout" class="button"  >
</form>
<!-- <button onclick="myFunction()">LOGOUT</button> -->
 

<div class="center" style="position:absolute;top:145px">
<h3>
BILL<br><br>
<img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/bill-generator-1411704-1194193.png" width="42" height="42"><br class="button">Generate Bill<br>
</h3>
<form action="old_billgen.php">
<!-- <input type="submit" value="BILL" class="button"> -->
<button style='font-size:16px'> Bill <i class='far fa-edit'></i></button>
</form>
<!-- <a href="bill2.php" class="button">Generate</a> -->
<br><br>
</div>

<div class="center" style="position:absolute;top:145px;left:1400px" >
<h3>
MEDICINE DETAILS<br><br>
Medicine-id:<br><br>
<form  action="meddb.php" method="POST">
<input  type="text" name="med_id" placeholder="Medicine id"><br>
</h3>
<!-- <input class="button" type="submit" value="SHOW"> -->
<button style='font-size:16px'>Show <i class='far fa-address-card'></i></button>
</form><br><br>
<form action="new_med.php" method="get">
<!-- <input class="button" type="submit" value="Add New"> -->
<button style='font-size:16px'>Add New <i class='far fa-file-alt'></i></button><br><br>
</form>
<form action="update.php" method="get">
<!-- <input class="button"type="submit" value="UPDATE"> -->
<button style='font-size:16px'>Update <i class='far fa-arrow-alt-circle-down'></i></button><br><br>

<br>
</form>
</div>

<div class="center" style="position:absolute;left:930px" >
<h3>
BILLING HISTORY<br><br>
<form action="billing_hist_back.php" method="POST">
Customer-id:<br><br>
<input type="text" name="c_id" placeholder="Customer Phone Number">
<br></h3>
<button style='font-size:16px'>Submit <i class='far fa-address-card'></i></button>
<!-- <input class="button" type="submit" value="SUBMIT"> -->
</form>
</div>

<div class="center" style="margin:auto">
<h3>
CUSTOMER DETAILS<br><br>
<form action="customer_view.php" method="POST">
Customer-id:<br><br>
<input type="text" name="phone_no" placeholder="Customer Phone Number">
<br></h3>
<button style='font-size:16px'>Submit <i class='far fa-address-card'></i></button>
<!-- <input class="button"type="submit" value="SUBMIT"> --><br>
</form>
<form action="customer.php">
<br><!-- <input class="button"type="submit" value="Add New Customer"> -->
<button style='font-size:16px'>Add New Customers <i class='far fa-check-circle'></i></button>
</form>
</div>
<br><br><br>
<marquee width="100%" direction="right" height="300px">
<b style="color:white;font:100px">Website:www.goodpharmacy.com <br><b>Contact Details: 022-2987654<b><br>Address:Good Pharmacy Stores, Shop No.6, Sector: 10, Vashi
</marquee>

</body>


</html>