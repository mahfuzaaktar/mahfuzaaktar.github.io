<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title> Mobile Express </title>
</head>

<style type="text/css">
	

	.Mblx {
		font-family: Arial;
		font-size: 50px;
		color: white;
		font-weight: bold;
		text-shadow: 4px 4px 4px #000000    ;
}

		.ibill {
		font-family: Arial;
		font-size: 35px;
		color: white;
		font-weight: bold;
		text-shadow: 4px 4px 4px #000000    ;
		background-color: #4D4D4D;
}

 .div1{

 	position: absolute;
    top: 35px;
  left: 335px;
  width: 100px;
  height: 50px;
  border-radius: 8px;
  box-shadow: 4px 4px 4px;

 }
 body {
  height: 1400px;
  background-color: #565656; 
  background-image: linear-gradient(#565656, white);
}
 input[type=text] {
  width: 500px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  background-color: white;
  background-image: url("Searchicon.png");
  background-position: 10px 10px;
  padding: 8px 15px 8px 30px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
  width: 500px;
}
.divsearchbutton{
-webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  width: 80px;
  height: 40px;

}
.divsearchbutton:hover {
	background-color: #565656;
  color: white;
  font-family: arial;
  font-weight: bold;
}

.divpositionsearchbutton{

	position: absolute;
    top: 202px;
  left: 530px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}

.divpositioncustomername{

	position: absolute;
    top: 250px;
  left: 250px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}

.divpositioncustomerContact{

	position: absolute;
    top: 300px;
  left: 250px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}

.divpositionSellername{

	position: absolute;
    top: 350px;
  left: 250px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}
.divcontact
{

	position: absolute;

	top: 280px;
  left: 8px;
 
}

.divseller
{

	position: absolute;

	top: 330px;
  left: 8px;
 
}

.divquantity
{

	position: absolute;

	top: 380px;
  left: 8px;
 
}
.divpositionQuantity{

	position: absolute;
    top: 405px;
  left: 250px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}
.divunitprice
{

	position: absolute;

	top: 430px;
  left: 8px;
 
}


.divpositionUnitPrice{

	position: absolute;
    top: 450px;
  left: 250px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}

.divdate
{

	position: absolute;

	top: 480px;
  left: 8px;
 
}


[type="date"] {
  background:#fff url("calendericon.png") 1px 1px 1px 1px no-repeat  ;
 
}

[type="date"]::-webkit-inner-spin-button {
  display: none;
 
  opacity: 1;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
  width: 100px;
  height: 28px;
}

/* custom styles */

label {
  display: block;
}
input {
  border: 3px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: padding: 8px 15px 8px 30px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;

}
.divpositoncalender {

	position: absolute;
    top: 490px;
  left: 250px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}

.divsavebutton{
-webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  width: 90px;
  height: 45px;

}
.divsavebutton:hover {
	background-color: #565656;
  color: white;
  font-family: arial;
  font-weight: bold;
}
.divpositionsavebutton{

	position: absolute;
    top: 570px;
  left: 580px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

  
}
input[type=text2] {
  width: 350px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  background-color: white;
  background-image: url("Searchicon.png");
  background-position: 10px 10px;
  padding: 8px 15px 8px 30px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
input[type=text2]:focus {
  width: 350px;
}
.divpositioncustomernameinvoice {
position: absolute;
    top: 760px;
  left: 200px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

}

.divpositioncustomercontactinvoice {
position: absolute;
    top: 745px;
  left: 600px;
  


}

.divpositioncustomerContactinvoicefield {
position: absolute;
    top: 760px;
  left: 810px;
 
}

.divpositionsellernameinvoicefield {
position: absolute;
    top: 810px;
  left: 200px;
 
}

.divpositiondateinvoice {
position: absolute;
    top: 800px;
  left: 600px;
  


}

.divpositiondateinvoicefield {
position: absolute;
    top: 810px;
  left: 810px;
 
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 10px;
}

tr:nth-child(even){background-color:  }

th {
  background-color: #4D4D4D;
  color: white;
}

.btn {
  background-color:#4D4D4D ;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #171717;
}
.divpositionproductname{

	position: absolute;
    top: 200px;
  left: 250px;
  width: 100px;
  height: 50px;
  border-radius: 8px;

</style>

<script>
        function printPage() {
            window.print();

        }
    </script>
</head>
<body>
<img class="div1" src="mobilelogo.png">
	<div align="center"><h1 class="Mblx"> Mobile Express</h1>  </div>

	<div align="center">
<h3 class="ibill"> i- Bill </h3>
</div>




<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iBilling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// define variables and set to empty values
$productname = $customername= $customercontact= $sellername=$quantity=$unitprice=$date  = $totalprice= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $productname = test_input($_POST["productname"]);
  $customername = test_input($_POST["customer"]);
  $customercontact= test_input($_POST["contact"]);
  $sellername= test_input($_POST["seller"]);
    $quantity= test_input($_POST["quantity"]);
     $unitprice= test_input($_POST["unitPrice"]);
      $date= test_input($_POST["dateofbirth"]);
      $totalprice= $quantity  * $unitprice;
  
}

if (isset ($_POST['btn'])) {
$sql = "INSERT INTO bill (ProductName, CustomerName, CustomerContact, SellerName, Quantity, UnitPrice, TotalPrice, Dated )
VALUES ('$productname', '$customername', '$customercontact', '$sellername', '$quantity','$unitprice' , '$totalprice' , '$date')";


if ($conn->query($sql) === TRUE) {
    echo "  ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<h2> Product Name: </h2>
<div class="divpositionproductname">
 <input type="text" name="productname">
</div>

<h2> Customer Name: </h2> <div class="divpositioncustomername"><input type="text" id="demo1" name="customer" placeholder="Customer Name"></div>
<div class="divcontact">
<h2> Customer Contact: </h2>
</div>
<div class="divpositioncustomerContact"> 
<input type="text" id="demo2" name="contact" placeholder="Customer Contact">
</div>
<div class="divseller">
<h2> Seller Name: </h2> 
</div>
<div class="divpositionSellername"><input type="text" id="demo3" name="seller" placeholder="Seller Name"></div>
<div class="divquantity">
<h2> Quantity: </h2>
</div>
<div class="divpositionQuantity">
<input type="number" name="quantity" placeholder="Quantity">
</div>
<div class="divunitprice">
<h2> Unit Price: </h2>
</div>

<div class="divpositionUnitPrice">
<input type="number" name="unitPrice" placeholder="Unit Price">
</div>
<div class="divdate">
<h2> Date: </h2> 
</div>

<label for="dateofbirth"></label>
<div class="divpositoncalender">
<input type="date" id="demo4" name="dateofbirth" id="dateofbirth">
</div>
<div class="divpositionsavebutton">
<button class="divsearchbutton" name="btn" > Save </button>
</div>
</form>


</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div align="center">


<h1 class="ibill"> InVoice</h1>

</div>
</div>

<table border="0">
  <tr>
    <th>Customer Name</th>
    <th>Customer Contact</th>
    <th>Seller Name</th>
    <th> Date</th>
  </tr>
  <tr>
    <td><?php echo $customername; ?> </td>
    <td><?php echo $customercontact; ?></td>
    <td><?php echo $sellername; ?></td>
    <td><?php echo $date; ?></td>
  </tr>
</table>
</br>

</br>
</br>
</br>
<table>
  <tr>
    <th>Product Name</th>
    <th>Quantity</th>
    <th> Unit Price</th>
  </tr>
  <tr>
    
    <td> <?php echo $productname; ?>  </td>
    <td> <?php echo $quantity; ?> </td>
    <td> <?php echo $unitprice; ?> </td>
  </tr>
  <tr>
   
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
 
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
   
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
<div align="center">
<h1> Total Price :

 <?php echo $totalprice ?>

  </h1> </br> </br>
<button class="btn" onclick="printPage()"><i class="fa fa-download"></i> Print</button>
</div>

</body>
</html>








