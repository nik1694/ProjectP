


<?php

session_start();

//include 'php/thanks.php';


$con =mysqli_connect('localhost','root');

if($con)
{
	echo "Conection Success...";
}else
{
	header('location:error.html');
}

mysqli_select_db($con,'projectp');



$unm= $_POST['uname'];
$uem= $_POST['uemail'];
$upas= $_POST['upass'];

$cpno= $_POST['cphone'];
$cfeed= $_POST['cfeedback'];

$q= "insert into user (uname,uemail,upass) values ('$unm','$uem','$upas')";
mysqli_query($con,$q);
header('location:../LoginPage.php');

//header('location:index.php');

?>






