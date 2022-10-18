<?php 
if(isset($_POST['submits'])){
 $cons= new mysqli("localhost","root","","pheuture") or die("error in db".mysql_connect_error());
 $un=$_POST['email'];
 $pw=$_POST['passwords'];
 $result = $cons -> query("SELECT * FROM form WHERE email='$un' AND password='$pw'");
               if(mysqli_num_rows($result) > 0){
               	session_start();
               while($rows = $result -> fetch_object()){
                $_SESSION['rows'] = $rows;
                 echo "<centre><h1>LOGIN SUCCESSFULLY<h1><centre/>";
                 header("refresh:3;url=show.php");
               }
               }else{
               echo "Wrong details";
               header("refresh:3;url=index.html");
               }
           }
?>