<?php 
 
  $errors=[];

   $file_name=$_FILES['files']['name'];
   $file_tmp=$_FILES['files']['tmp_name'];
   $file_size=$_FILES['files']['size'];
   $arr=explode('.',$file_name);
   $file_extn=strtolower(end($arr));
   

 // Extension s that sre allowed to be inserted
   $allowed_extn=["jpg","jpeg","png"];

   //if file has other extns than allowed ones
   if(!in_array($file_extn,$allowed_extn)){
      $errors="OOPS! Invalid file extensions.Only jpg,jpeg,png are allowed!";
   }

 // if file is greater than 2MB
   if($file_size>2097152){
      $errors[]="OOPs! File size shouldn't br greater than 2MB";
   }

   // if there is no error (file has allowed extns and less than 2MB size)
   if(empty($errors)){
      $destination="uploads/".$file_name;   // destination where it should be uploaded
   
      //if file is alreday at destination location
      if(file_exists($destination)){
      $new_file_name="new"."_".time().$file_name;   //change file name
      $destination ="uploads/".$new_file_name;  //destination
       }

      //if File Uploaded successfully
       if(move_uploaded_file($file_tmp,$destination)){
        echo "success! File Uploaded successfully.";
        $file=$destination;
      }  
      else{
        echo "OOPS! File could not be Uploaded.";
      }
   }

   // in there are errors print them
   else{
      echo "<pre>";
      print_r($errors);
      //header("refresh:3;url=index.html");
    }
    
 
?>