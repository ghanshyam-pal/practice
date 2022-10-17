<html>
    <head>
        <!-- CSS only -->
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
   <body>
   <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
                <td>Password</td>
                <td>Gender</td>
                <td>Country</td>
                
                </tr>
            </thead>
            <tbody class="table-group-divider">



    
    	

<?php 

session_start();
$name=$_SESSION['name'];
$pass=$_SESSION['pass'];
$age=$_SESSION['age'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$country=$_SESSION['country'];
$filepath=$_SESSION['filep'];
$filename=$_SESSION['filen'];
session_destroy();











$cons= new mysqli("localhost","root","","pheuture") or die("error in db".mysql_connect_error());
$cons->query("insert into form (name,password,age,email,gender,country) values ('$name','$pass','$age','$email','$gender','$country')");
$result = $cons -> query("select * from form");
               if(mysqli_num_rows($result) > 0){
               while($rows = $result -> fetch_object()){
                  $id = $rows -> id;
                  $name = $rows -> name;
                  $age = $rows -> age;
                  $email = $rows -> email;
                  $password = $rows -> password;
                  $gender = $rows -> gender;
                  $country = $rows -> country;
                  echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$age</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$gender</td>
                        <td>$country</td>
                  </tr>"; 
               }
               }else{
               echo "No result";
               }
?>

</tbody>
</body>
</html>