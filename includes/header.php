<html>
    <head>
        <title>Lifestyle store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
       include 'includes/links.php';
       ?>
        </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" 
                           data-toggle="collapse" 
                           data-target="#myNavbar">
                       <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                   </button>
                   <a href="index.php" class="navbar-brand">Lifestyle Store</a>
               </div>
               <div class="collapse navbar-collapse" id="myNavbar">
 
                   <ul class="nav navbar-nav navbar-right">
                       <?php if(isset($_SESSION['email'])){ ?>
                      
                       <li><a href="cart.php" target="_blank"><span 
                                   class="glyphicon glyphicon-shopping-cart">
                               </span>Cart</a></li>
                       <li><a href="setting.php" target="_blank"><span 
                                   class="glyphicon glyphicon-user">
                               </span>Settings</a></li>
                        <li><a href="logout.php" target="_blank"><span 
                                   class="glyphicon glyphicon-log-in">
                               </span>Logout</a></li>
                           
                       <?php
                       }
                       else{
                           ?>
                       <li><a href="signup.php" target="_blank"><span 
                                   class="glyphicon glyphicon-user">
                               </span>Sign Up</a></li>
                        <li><a href="login.php" target="_blank"><span 
                                   class="glyphicon glyphicon-log-in">
                               </span>Login</a></li>
                               <?php
                       }
                       ?>
                   </ul>       
           </div>
           </div>
           </nav>
</body>
</html>