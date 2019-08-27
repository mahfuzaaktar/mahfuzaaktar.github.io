<?php
$uname=$_POST['uname'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","iBilling");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `uname`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo " Admin Login success";
	$_SESSION['log']=1;
	header("refresh:2;url=2ndPage.php");

}
else
{
	echo "Invalid Login";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}


?>