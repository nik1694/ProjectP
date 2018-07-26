 <?php 

session_start();





$adminemail=$_POST['aemail'];
$adminpass= $_POST['apass'];

function getdata(){

$adminemail=$_POST['aemail'];
$adminpass= $_POST['apass'];
if($adminpass == "admin" && $adminpass=="admin")
{

	header('location:View/Dashboard.php');
}
else
{
header('location:errorpage.html');
}
}
getdata();


 ?>
