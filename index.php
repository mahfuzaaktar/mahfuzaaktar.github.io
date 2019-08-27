<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title> Mobile Express</title>
<style type="text/css">
	body {

		background-image: url(homebackpic.jpg);
		size: 1080 px 720px;

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

 


.modal {
  display: none;
  position: absolute;
  z-index: 1; 
  padding-top: 300px;
  padding-bottom: 300px;
  left: 180px;
  top: 0;
  bottom: 0;

  width: 70%; 
  height: 50%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.1); 
}


.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}


@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}


.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 10px;
  background-color: #565656 ;
  color: white;
}

.modal-body {padding: 2px 10px;}

.modal-footer {
  padding: 10px 16px;
  background-color: #565656;
  color: white;
}

input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}
input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}
input[type=text]:focus {
  background-color: #C5C5C5;
}
input[type=password]:focus {
  background-color: #C5C5C5;
}

.divloginbutton{
-webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  width: 100px;
  height: 50px;

}
.divloginbutton:hover {
	background-color: #565656;
  color: white;
  font-family: arial;
  font-weight: bold;
}



	
</style>
</head>
<body>



  <img class="div1" src="mobilelogo.png">
	<div align="center"><h1 class="Mblx"> Mobile Express</h1>  </div>



<form method="POST" action="login.php">
  <div align="center">
  <h2>Enter Username : <h2> <input type="text"  name="uname"><br><br>
  Enter Password : <br> <br>
  <input type="password"  name="password"><br><br>
  <div align="center">
  <input type="submit" class="divloginbutton" value="Login">
  </div>
</div>
</form>
<?php
session_destroy();
?>












</body>
</html>

