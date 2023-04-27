<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head><title>Change Profile Picture</title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
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

<div align="center" class="container">
<form action="#" method="post" enctype="multipart/form-data">
  <fieldset align="center">
  <legend><b><h1>CHANGE PROFILE PICTURE</h1></b></legend>
<div align="center">
<fieldset>
<?php  
if(isset($_POST['submit']))
{
  $filename = $_FILES['filename'] ['name'];
  $filetype = $_FILES['filename'] ['type'];
  $tmp_loc = $_FILES['filename']['tmp_name'];
  $filesize = $_FILES['filename']['size'];

  $uploc = 'Uploads/';

  if(!empty($filename))
{
  if($filetype =='image/jpeg')
  {
    if($filesize<900000)
    {
        move_uploaded_file($tmp_loc,$uploc.$filename);
    echo('Upload Successfully !!!');
    }
    else
    {
        echo('File size less than 9000000 byte');
    }

  }
  else
  {
    echo('Select an image !!!!');
  }
  
}
  else
  {
    echo('************************');
    echo('Select a file please !!!');
    echo('************************');
  }
}
?>

<br>
<form action="Change Profile Picture Upload.php" method="post" enctype="multipart/form-data"> Select Image
  <input type="file" name="filename"> <br><br>
  <input type="submit" value="Upload" name="submit">
</form>

</fieldset>
</div>
  </fieldset>
</form>
</div>
  <hr>

  <?php
    include "Footer.php";
    ?> 
 </fieldset>
</form>
</div>
</fieldset>
</body>
</html>