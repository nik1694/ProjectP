<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json;charset=UTF-8');

$servername = "localhost";
$db = "projectp";
$username = "root";
$password =  "";

$conn = new mysqli($servername,$username,$password,$db);
if(!$conn)
{
	echo "connection unsucessfull";
	exit;
}
//echo "connection successfull";

$sql = "select cname,cemail,cphone,cfeedback from feedback";
$result = $conn->query($sql);
$output = array();
$output = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($output);




?>
