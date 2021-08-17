<?php
require 'includes/common.php';
 if(isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet"href="bootstrap/css/bootstrap.min.css"
              type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js">
     </script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
            </script>
        <link rel="stylesheet" type="text/css" href="index.css">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                padding-top: 100px;
            }
            </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
           <div class="row">
               
       <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
        <div class="panel">
            <h1>SIGN UP</h1>
    <form action="signup_script.php" method="POST">
                    <div class="form-group"> 
  <input type="name" class="form-control" name="name" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
  </div>
                   <div class="form-group"> 
<input type="email" class="form-control" name="email" placeholder="Email"
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                               <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?>
                   </div>
                
  <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}" required>
  </div>
                     <div class="form-group">
 <input type="text" class="form-control" name="contact" 
        placeholder="Contact" maxlength="10" size="10" required>
    <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>
                     </div>
                     <div class="form-group">
    <input type="text" class="form-control" name="city" placeholder="City"required>
  </div>
                     <div class="form-group">
    <input type="text" class="form-control" name="address" placeholder="Address"required>
  </div>
                  
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          
                </form>
        
           
                </div>
            </div>
        </div>
       </div>
        <?php
               include 'includes/footer.php';
                                ?>
    </body>
</html>