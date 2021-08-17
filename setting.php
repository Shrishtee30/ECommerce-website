<?php
require 'includes/common.php';
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
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
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
        <div  class="content">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel">
                        <h1>Change Password</h1>
                        <form method="POST" action="settings_script.php">
                            <div class="form-group">
                                <label for="oldPassword">Old Password</label>
                                <input type="password" class="form-control" name="oldPassword" required>
                            </div>
                       <div class="form-group">
                           <label for="newPassword">New Password</label>
                           <input type="password" class="form-control" name="newPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="newPasswordRe">Re-type New Password</label>
                                <input type="password" 
                                       class="form-control" 
                                       name="newPasswordRe" 
                                       required>
                            </div>
                            <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                  
<input type="submit" value="Confirm" 
                           class="btn btn-primary">
                

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

