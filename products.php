<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php        include 'includes/links.php'; ?> 
    <style>
            body{
                padding-top: 100px;
            }
            </style>
    </head>
    <body>
        
        <?php
        include 'includes/header.php';?>
        <?php
        include 'includes/check-if-added.php';
         //$user_id = $_GET['user_id'];
         //$email = $_GET['email'];
        ?>
        <div class="content">
           <div class="container">
               <div class="jumbotron home-spacer" id="products-jumbotron">
                   <h1>Welcome to our Lifestyle Store!</h1>
                   <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                       have all in one place.</p>
               </div>
            </div>
           <div class="row">
               <div class="text-center">
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/5.jpg">
                           <div class="caption">
                               <h3>Cannon EOS</h3>
                               <p>Price: Rs.36000.00</p>
                               <?php if (!isset($_SESSION['email']))
                               { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(1)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=1" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                           </div>           
                       </div>
                   </div>
                 <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/2.jpg">
                           <div class="caption">
                               <h3>Sony DSLR</h3>
                               <p>Price: Rs.40000.00</p>
                          <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(2)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=2" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>         
                               
                           </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/3.jpg">
                           <div class="caption">
                               <h3>Sony DSLR</h3>
                               <p>Price: Rs.50000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(3)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=3" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                              </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/4.jpg">
                           <div class="caption">
                               <h3>Olympus DSLR</h3>
                               <p>Price: Rs.80000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(4)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=4" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                               
                           </div>           
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="text-center">
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/9.jpg">
                           <div class="caption">
                               <h3>Titan Model#301</h3>
                               <p>Price: Rs.13000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(5)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=5" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                               
                           </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/10.jpg">
                           <div class="caption">
                               <h3>Titan Model#201</h3>
                               <p>Price: Rs.3000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(6)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=6" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                           </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/11.jpg">
                           <div class="caption">
                               <h3>HMT Milan</h3>
                               <p>Price: Rs.8000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(7)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=7" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                               
                           </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/12.jpg">
                           <div class="caption">
                               <h3>Faber Luba#111</h3>
                               <p>Price: Rs.18000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(8)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=8" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                               
                           </div>           
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="text-center">
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/re.jpg">
                           <div class="caption">
                               <h3>H&W</h3>
                               <p>Price: Rs.800.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(9)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=9" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                              
                           </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/6.jpg">
                           <div class="caption">
                               <h3>Luis Phil</h3>
                               <p>Price: Rs.1000.00</p>
                              <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(10)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=10" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>     
                           </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/13.jpg">
                           <div class="caption">
                               <h3>John Zok</h3>
                               <p>Price: Rs.1500.00</p>
                               <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(11)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=11" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                           </div>           
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">
                           <img src="bootstrap/image/14.jpg">
                           <div class="caption">
                               <h3>Jhalsani</h3>
                               <p>Price: Rs.1300.00</p>
                               <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>

                               <?php 
                               }else{
                                   if(check_if_added_to_cart(12)){
                             echo'<a href="#" 
                         class="btn btn-block btn-success" disabled>
                                   Added to cart</a>';
                               }else{?>
                                  <a href="cart-add.php?id=12" 
                                          name="add"value="add"
                                          class="btn btn-block btn-primary">
                                      Add to cart</a>
                               <?php
                               } }?>    
                           </div>           
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