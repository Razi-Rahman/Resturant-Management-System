<?php  

require_once '../Model/Operation.php';
 $message = '';  
 $error = '';
  $isok=false;
  $istrue=false;
 if(isset($_POST["submit"]))  
 {  

    $ok=false;
               if (isset($_POST['submit'])) {
                    $data['name'] = $_POST['name'];
                    $data['email'] = $_POST['email'];
                    $data['un'] = $_POST['un'];
                    $data['pass'] = $_POST['pass'];
                    $data['gender'] = $_POST['gender'];
                    $data['dob'] = $_POST['dob'];
                    
                  
                    
                    $data['image'] = basename($_FILES["image"]["name"]);
               
                    $target_dir = "../Uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
               
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $ok=true;
                    
               
                 } else {
                   echo "Sorry, there was an error uploading your file.";
                 }
               
                 if (adduser($data) && $ok) {
                     $isok=true;
                    
                     
                 }
               } 

               else {
                   $isok=false;
               }
      } 
     
   
 ?>  

 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AddUser</title>
 </head>
 <body>
      <?php
      if($isok)
      echo "Registration Sucsessfull </br>";
      else
      echo $error;
      ?>
 </body>
 </html>