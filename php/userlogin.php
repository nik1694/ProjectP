


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



//$unm= $_POST['uname'];
$uem= $_POST['uemail'];
$upas= $_POST['upass'];

//$cpno= $_POST['cphone'];
//$cfeed= $_POST['cfeedback'];

$check=" select * from user where uemail=='$uem'  && upass=='$upas' ";
$res =mysqli_query($con,$check);


$num= mysql_num_rows($res);

if($num == 0)

{          

         $_SESSION['username']= $uem;
         header('location:../pages/index.html');

}else

{

echo 'Register First ....the Come Here....';

//header('location:index.php');
}

?>






