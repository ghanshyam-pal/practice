<?php 
if(isset($_POST["submit"])){
$name=$_POST["name"];
$phone=$_POST["phone"];
$gen=$_POST["gender"];
$cou=$_POST["country"];
include_once('./table.php');
//header("refresh:3;url=display.php")
}
else 
{
	echo "enter the detail first";
}
?>