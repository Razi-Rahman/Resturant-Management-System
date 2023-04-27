<?php
session_start();

?>

<!DOCTYPE html>

<html>
<fieldset>
     
     <head>
         <title> DASHBOARD </title>
         <link rel="stylesheet" href="style.css">
       
     </head>
         
     <body>
    <fieldset>
     <div>  
        <p><h1 align="center">
           <span style="color:indianred"> Resturant Management System </span>
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
            <hr>
            <h1 align="center">
            <legend align="center" style="font-size:4vw;">DASHBOARD </h1></legend>
            <div class="content">
                <a href="CreateStore.php">Create Resturant</a>
                <a href="add_product.php">Add Item</a>
                <a href="view_product.php">See Item</a>
                <a href="See_Payment_History.php">See Payment History</a>
                <a href="search_product.php">Search Item</a>
            </div>
            <br>
            <br>
    <?php
    include "Footer.php";
    ?>
    </fieldset>
    </fieldset>
    </div>
</h1>
</body> 
     </fieldset>
</html>  