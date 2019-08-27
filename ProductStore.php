<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Mobile Express </title>

	<style type="text/css">
    

		.Mblx {
		font-family: Arial;
		font-size: 50px;
		color: white;
		font-weight: bold;
		text-shadow: 4px 4px 4px #000000    ;
}

.storeproduct {
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
  height: auto;
  background-color: #565656; 
  background-image: linear-gradient(#565656, white);

}
input[type=text2] {
  width: 350px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  background-color: white;
  background-position: 10px 10px;
  padding: 8px 15px 8px 30px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
input[type=text2]:focus {
  width: 350px;
}

.divpositionProductname{

	position: absolute;
    top: 200px;
  left: 200px;
  }
.divquantity{

	position: absolute;
    top: 185px;
  left: 600px;
}

.divpositonquantity{

	position: absolute;
    top: 200px;
  left: 740px;
}


.divaddbutton{
-webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  width: 80px;
  height: 40px;

}
.divaddbutton:hover {
	background-color: #565656;
  color: white;
  font-family: arial;
  font-weight: bold;
}

table {
  border-collapse: collapse;
  width: 100%;
  height: auto;
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
	</style>



</head>
<body>







	<img class="div1" src="mobilelogo.png">
	<div align="center"><h1 class="Mblx"> Mobile Express</h1>  </div>

	<div align="center">
<h3 class="storeproduct"> Store Product </h3>

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
$name = $quantity  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $quantity = test_input($_POST["quantity"]);
  
}



if (isset ($_POST['submit'])) {
$sql = "INSERT INTO Product_Store (ProductName, Quantity)
VALUES ('$name', '$quantity')";


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

<div class="divpositionProductname">
  <input type="text2" name="name">
  </div>
  <br><br>

  <div class="divquantity">
  <h2> Quantity: </h2> </div>
<div class="divpositonquantity">

  <input type="text2"  name="quantity">
  </div>
  <br><br>
<div align="center">
  <input type="submit" name="submit" value="Submit" class="divaddbutton">
  </div>  
</form>
<br>
<br>
<table>
	<tr>
	<th> Product Name</th> <th> Quantity</th>

	</tr>
	


  <?php
$conn = mysqli_connect("localhost", "root", "", "iBilling");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT ProductName, Quantity FROM Product_Store";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["ProductName"]. "</td> <td>" . $row["Quantity"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 Item"; }
$conn->close();
?>
</table>

</body>
</html>
