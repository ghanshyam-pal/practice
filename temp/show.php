<?php 
session_start();
$rows=$_SESSION['rows'];
echo $rows -> name;
echo $rows -> age;
echo $rows -> email;
echo $rows -> password;
echo $rows -> gender;
echo $rows -> country;
session_destroy();
?> 