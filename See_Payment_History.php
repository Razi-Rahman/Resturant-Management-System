<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<title> See Payment History </title>
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
            <fieldset>
            <br>
            <br>
           <div align="center">
           <table border="3">
  <thead>
    <tr>
      <th>Item</th>
      <th>Date</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Grilled Chicken Sandwich</td>
      <td>2022-01-15</td>
      <td>$10.99</td>
      <td>2</td>
      <td>$21.98</td>
    </tr>
    <tr>
      <td>Caesar Salad</td>
      <td>2022-02-07</td>
      <td>$8.99</td>
      <td>1</td>
      <td>$8.99</td>
    </tr>
    <tr>
      <td>Beef Burger</td>
      <td>2022-03-22</td>
      <td>$11.99</td>
      <td>3</td>
      <td>$35.97</td>
    </tr>
    <tr>
      <td>Fish and Chips</td>
      <td>2022-04-01</td>
      <td>$14.99</td>
      <td>1</td>
      <td>$14.99</td>
    </tr>
    <tr>
      <td>Ribeye Steak</td>
      <td>2022-01-22</td>
      <td>$25.99</td>
      <td>3</td>
      <td>$35.97</td>
    </tr>
  </tbody>
</table>

</div>


            </fieldset>

            </div>
    <?php
    include "Footer.php";
    ?> 
    </fieldset>   
</body>
</html>