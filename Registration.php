

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  


<?php
     include "NavBar.php";
     ?>
      
     
  
 <hr>
 
</div> 


           <div class="container" style="width:500px;">  
                <h3 align="center"> <b>Registration</b></h3><br />                 
                <form action="Controller/Adduser.php" method="post" enctype="multipart/form-data"> 
                   
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" required /><br />  
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" required /><br />
                     <label>User Name</label>
                     <input type="text" name = "un" class="form-control" required /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" required /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" required /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>

                     
                    </fieldset> 
                     
                    <fieldset>
        <legend> <h2> PROFILE PICTURE </h2> </legend>
             <img  src="1.png" height="500px" width="500px"  title="profile pic"> </img> <br>
        
            <span style="color: rgb(255, 255, 255);">  </span>  
            <input type="file" name="image"><br><br>
  
        <div>
         <hr>
         <input type="submit" name="submit" value="Append" class="btn btn-info" /><br /> 
       </div>
       </fieldset>   
  
                     
                     
     
                      
                </form> 
                 
                  
           <br />  
      </body>  
 </html>  