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
		   <span><a style="color:purple;" href="Login.php"> | Logout </a></span>
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
		<div>
			<fieldset><fieldset>
		    
			<legend align="center"><h1> MY PROFILE </h1></legend>
			<h3 align="center">
		    
			<img  src="1.png" height="200px" width="250px"  > </img> <br>
			<a align="right" href=" "> Change </a> <br><br>

		      Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $_SESSION["Name"]?><hr>
	          Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $_SESSION["Email"]?> <hr>
		      Gender<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["Gender"]?> <hr>
		      

		    <a tyle ="color:SlateBlu;"  href="EditProfile.php "> Edit Profile </a>
			
			</h3>
			</fieldset>
		    </fieldset>
			</div>
	<?php
    include "Footer.php";
    ?> 
	</fieldset>   
</body>
</html>