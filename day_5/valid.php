<?php 
//print_r($_POST);
if(isset($_POST['submits']))
	{
		$name=$_POST['names']?$_POST['names']:"NULL";
		$pass=$_POST['passwords']?$_POST['passwords']:"NULL";
		$age=$_POST['ages']?$_POST['ages']:"NULL";
		$email=$_POST['emails']?$_POST['emails']:"NULL";
		$gender=isset($_POST['genders'])?$_POST['genders']:"NULL";
		$country=$_POST['countrys']?$_POST['countrys']:"NULL";
		//$file=isset($_POST['files'])?$_POST['files']:"NULL";
        $file;
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['pass']=$pass;
		$_SESSION['age']=$age;
		$_SESSION['email']=$email;
		$_SESSION['gender']=$gender;
		$_SESSION['country']=$country;

		include_once('./docvalid.php');
        if(!isset($file)){
            header("refresh:5;url=index.html");
        }
        else{
        $_SESSION['file']=$file;
        header("refresh:0;url=insert.php");
        }
	}
else
	echo "No inputs ";
?>