<?php
require 'includes/common.php';
 if(isset($_SESSION['email'])){
  header('location:index.php');
  }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <?php
        include 'includes/links.php';
       ?>
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
       <div class="content">
        <div class="row">
                <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            
            <div class="panel-heading">LOGIN
            </div>
            <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form method="post" action="login_submit.php">
                   <div class="form-group"> 
                       <input type="email" class="form-control" name="email" placeholder="Email"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required>
  </div>
  <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}"required>
  </div>
                     <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>
                    <input type="submit" value="Login" 
                           class="btn btn-primary">
            </form>
            </div>
            <div class="panel-footer">
                Don't have an account?<a href="signup.php"> Register</a>
            </div>
        </div>
                </div>
        </div>
               </div>
                 
        <?php
               include 'includes/footer.php';
        ?>

       
    </body>
</html>
