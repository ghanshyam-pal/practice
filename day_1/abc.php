<?php
//print_r($_POST);
if(isset($_POST["submit"])){
    $name=$_POST["Uname"]?$_POST["Uname"]:"Not define";
    $phone=$_POST["phone"]?$_POST["phone"]:"Not define";
    $email=$_POST["Email"]?$_POST["Email"]:"Not define";
    $password=$_POST["password"]?$_POST["password"]:"Not define";
    $gender=isset($_POST["gender"])?$_POST["gender"]:"Not define";
    $nationality=(isset($_POST["nationality"]))?$_POST["nationality"]:"Not define";
    echo "Your name is ".$name."<br>";
    echo "Your phone number is ".$phone."<br>";
    echo "Your email_id is ".$email."<br>";
    echo "Your password is ".$password."<br>";
    echo "Your gender is ".$gender."<br>";
    echo "Your nationality is ".$nationality."<br>";
}
else{
    echo "Please enter the details.";
}
//echo $name;
?> 