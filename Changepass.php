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
        
         
      </fieldset><br>

    
          <div>
          <br> <br>
          <fieldset align="center">
         
          <form  method="post" action="Controller/Pass.php"> <br>
            <fieldset>
          
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
      </form>


  
  </body>
</fieldset>
</html>