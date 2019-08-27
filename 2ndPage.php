<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Mobile Express </title>
<style type="text/css">
	
.buttoni-Bill {
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
  width: 100px;
  height: 50px;
}

.buttoni-Bill:hover {
  background-color: #565656;
  color: white;
}

.divibillposition{

	position: absolute;
	top: 200px;
  left: 570px;
  width: 100px;
  height: 50px;
  border-radius: 8px;
}

.divstoreitemposition{

	position: absolute;
	top: 300px;
  left: 570px;
  width: 100px;
  height: 50px;
  border-radius: 8px;
}
.Mblx {
		font-family: Arial;
		font-size: 50px;
		color: white;
		font-weight: bold;
		text-shadow: 4px 4px 4px #000000    ;
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
  height: 900px;
  background-color: #565656;
  background-image: linear-gradient(#565656, white); 

</style>
</head>
<body>
<img class="div1" src="mobilelogo.png">
	<div align="center"><h1 class="Mblx"> Mobile Express</h1>  </div>
<div class="divibillposition">
	<a href="i-Bill.php"><button class="buttoni-Bill" >  i-Bill</button></a>
</div>

<div class="divstoreitemposition">
<a href="ProductStore.php"><button class="buttoni-Bill"> Store Product </button></a>
</div>

</body>
</html>