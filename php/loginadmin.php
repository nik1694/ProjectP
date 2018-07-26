 <?php 

session_start();

$adminemail=$_GET['aemail'];
$adminpass= $_GET['apass'];


if($adminpass== "admin" && $adminpass=="admin")
{

	header('location:index.php');
}
else
{
header('location:errorpage.php');

}



 ?>
