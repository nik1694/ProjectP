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



$cnm= $_POST['cname'];
$cem= $_POST['cemail'];
$cpno= $_POST['cphone'];
$cfeed= $_POST['cfeedback'];

$q= "insert into feedback (cname,cemail,cphone,cfeedback) values ('$cnm','$cem','$cpno','$cfeed')";
mysqli_query($con,$q);
header('location:../View/thanks.php');

//header('location:index.php');




$sql = "select cname,cemail,cphone,cfeedback from feedback";
$result = $conn->query($sql);
$output = array();
$output = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($output);






?>