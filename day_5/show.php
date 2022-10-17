<?php 
session_start();
				echo $_SESSION['id'];
                  echo $_SESSION['name'];
                 echo  $_SESSION['age'] ;
                 echo  $_SESSION['email'];
                 echo  $_SESSION['password'];
                 echo  $_SESSION['gender'] ;
                  echo $_SESSION['country'];
                  session_destroy();
?> 