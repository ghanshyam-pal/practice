<?php 
        $name=$_POST['names']?$_POST['names']:"NULL";
        $pass=$_POST['passwords']?$_POST['passwords']:"NULL";
        $age=$_POST['ages']?$_POST['ages']:"NULL";
        $email=$_POST['emails']?$_POST['emails']:"NULL";
        $gender=isset($_POST['genders'])?$_POST['genders']:"NULL";
        $country=$_POST['countrys']?$_POST['countrys']:"NULL";
        $file=isset($_POST['files'])?$_POST['files']:"NULL";
include_once('./table.php');
?>