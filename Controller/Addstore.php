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
                    $data['storename'] = $_POST['storename'];
                    $data['storeid'] = $_POST['storeid'];
                    $data['branchname'] = $_POST['branchname'];
                    $data['storelocation'] = $_POST['storelocation'];
                    $data['storetype'] = $_POST['storetype'];
                    $data['predate'] = $_POST['predate'];
                    
               
                 if (addstore($data) && $ok) {
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
      <title>AddStore</title>
 </head>
 <body>
      <?php
      if($isok)
      echo "Store Added Successfully !!! </br>";
      else
      echo $error;
      ?>
 </body>
 </html>