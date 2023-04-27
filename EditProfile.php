<?php
session_start();
?>

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
       <h3 align= "right">
        <span> Welcome </span>
           <span style="color:purple"> <?php echo $_SESSION["Name"]?> </span>
       <span><a style="color:purple;" href="Homepage.php"> | Logout </a></span>
           </h3>
    <hr>  
  </div>  
      <div>
    <fieldset>
      
            <h2 align="right">
            
                <a style ="color:teal;" href="Dashboard.php"> | Dashboard </a>
                <a style ="color:teal;" href= "My Profile.php"> | My Profile</a>
                <a style ="color:teal;" href="EditProfile.php"> | Edit Profile</a>
                <a style ="color:teal;" href="Change Profile Picture Form.php"> | Change Profile Picture</a>
                <a style ="color:teal;" href="Changepass.php"> | Change Password</a>
         
        </h2>
        
  </fieldset>
  </div>
         
        
         
       

    
      
      
          <fieldset>
          <form method="post" action="Controller/Edit.php"> 
          <fieldset>
          
               <legend align="center"><h1> EDIT PROFILE </h1></legend>
               <p align="center">
          
               <b> <p align="center" <label for="name"> Name : </label> </b> 
               <input type="text" name="name" value=""> 
               
               <hr>
              
                <b> <p align="center" <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="">
                
                <hr>

                <b> <p align="center" <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="other"> Other  
               
                <hr>
          
                
    
 
                 <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>
                  <hr>

                 </p>
                 
                  <?php
                  include "Footer.php";
                  ?> 
                </fieldset>
                </form> <br>

               

    </body>
</fieldset>
</html>