<!DOCTYPE html>

<html>
<head>
  <title> My Profile </title>
</head>
<body>
  <fieldset>
    <div>  
    <p><h1 align="center">
           <span style="color:indianred"> ECMS </span>
           <span style="color:indigo;"><sup> BD</sup></span>
           </h1>
        </p>

<div>
          <br> <br>
          <fieldset align="center">
         
          <form  method="post" action="Controller/Pass.php"> <br>
            <fieldset>
          
          <h2 align="right">
            
                <a style ="color:teal;" href="Login.php"> Back </a>
          </h2>

          <legend><h2 align="center"> CHANGE PASSWORD  </h2></legend>
          
          <p align="center">
          
      
          <label>Current Password:</label> 
          <input type="password" name="currentPassword" value="">
          
          <br/><br/>
          
          
          <label style="color:green">New Password:</label>
          <input type="password" name="newpassword" value="">
         
          <br/><br/>
          
          
          <label style="color:Red">Retype New Password:</label>
          <input type="password" name="rnewpassword" value="">
          
          
          
          <hr> 
         
         <h4 align = "center"> <input type="submit" name="submit" value="Submit"> </h4>
         
          <br/>
            
          </p>
          </fieldset>
          </div>
          
          <?php
          include "Footer.php";
          ?>
                
                 <br>
               </fieldset>