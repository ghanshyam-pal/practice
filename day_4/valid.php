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
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['pass']=$pass;
		$_SESSION['age']=$age;
		$_SESSION['email']=$email;
		$_SESSION['gender']=$gender;
		$_SESSION['country']=$country;

		if($_FILES){
        $target_dir= "uploads/";
        $main_file_name = $_FILES["files"]["name"];
        $main_file_name_size = $_FILES["files"]["size"];
        $target_file = $target_dir . basename($main_file_name);
        $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $temp_file_name = $_FILES["files"]["tmp_name"];
        $target_temp_file = $target_dir . basename($temp_file_name);
      
        $finalpath = $target_dir.$main_file_name;
        if(file_exists($finalpath)){
            $file1_name = $name."_".time().".".$ext;
            $finalpath = $target_dir.$file1_name;
        }
        (move_uploaded_file($temp_file_name,$finalpath)) ? "file successfully uploaded" : "unable to upload file";
        $_SESSION["filep"]=$finalpath;
        $_SESSION["filen"]=$main_file_name;
        }
        //echo "correct";
        header("refresh:0;url=sql.php");
	}
else
	echo "No inputs ";
?>