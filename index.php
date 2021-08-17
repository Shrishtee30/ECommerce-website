<?php
require 'includes/common.php';
  if(isset($_SESSION['email'])){
        header("location:index.php");
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
        <title>Lifestyle store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <?php 
       include 'includes/links.php';
       ?>
        </head>
    <body>
    <?php
            include 'includes/header.php';
            
            ?>
        <?php 
       include 'includes/home.php';
       ?>
       <?php
            if (isset($_SESSION['email'])) {
            header('location: products.php');
              }
             ?>
        <?php 
       include 'includes/footer.php';
       ?>
        </body>
</html>
