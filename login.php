<?php
    require 'connection.php';
   
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
  
      <link rel="shortcut icon" href="img/lifestyleStore.png" />
      
  <title>Projectworlds Store</title>
       
 <meta charset="UTF-8">
       
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- latest compiled and minified CSS -->
       
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
     
   <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
   
     <!-- Latest compiled and minified javascript -->
       
 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  
      <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
   
 </head>
    <body>
      
<form action="cart_add.php" method="post">
  <div>
        
    <?php
     
           require 'header.php';
            ?>
    
        <br><br><br>
           <div class="container">
        
        <div class="row">
           
         <div class="col-xs-6 col-xs-offset-3">
   
                     <div class="panel panel-primary">
            
                <div class="panel-heading">
  
<h2>Enter the Employee Details</h2>
<div class="row">
<form>
<div class="panel-heading">
 
<label>Enter the employee ID</label>
<input type='number' class="form-control"> 
<label>Enter the Employee Name</label>
<input type='text' class="form-control">
<label>Gender</label><br>
<input type='radio' value="male">
<label>Male</label><br>
<input type='radio' value="female">
<label>Female</label><br>
<label>Enter the Hire date</label>
<input type='date' class="form-control">
<label>Enter the Address</label>
<input type='text' class="form-control">
<label>Enter the Position</label>
<input type='text' class="form-control">
<lable>Enter the Phone number</label>
<input type='Phone' class="form-control">
</form>                           
  </div>
        
 
 <div class="panel-body">
  
<div class="form-group">
                               
<input type="submit" value="Login" class="btn btn-primary">
                   
 </div>
                               
 </form>
                           
 </div>
                         
                
        </div>
     
               </div>
              
  </div>
           </div>
    
       <br><br><br><br><br>
   
            
              <center>
                        
                 
   </center>
               </div>
           
</footer>
        </div>
    </body>
</html>
