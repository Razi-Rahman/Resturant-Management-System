<!DOCTYPE html>

<html>
<fieldset>
     
     <head>
         <title> Add Item </title>
         <link rel="stylesheet" href="style.css">
       
     </head>
         
     <body>
    <fieldset>
     <div>  
        <p><h1 align="center">
           <span style="color:indianred"> Resturant Management System </span>
           </h1>
        </p>
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



<div align="center">
<?php
include_once("db.php");

// Retrieve all products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Check if any products were found
if ($result->num_rows > 0) {
  // Display a table of all products
  echo "<table>";
  echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Actions</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "<td><a href='edit_product.php?id=" . $row["id"] . "'>Edit</a></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No products found.";
}

$conn->close();
?>
</div>