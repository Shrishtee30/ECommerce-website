<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet"href="bootstrap/css/bootstrap.min.css"
              type="text/css">
<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js">
     </script>
 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
            </script>
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
        $user_id = $_SESSION["user_id"];
        $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
        $item_id = $row["item_id"];
        $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";            
        $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
        ?>
        <div class="content">
            <div class="col-md-12">
                <div class="jumbotron">
        <h3 align="center"> Your order is confirmed. Thank you for shopping
            with us.</h3><hr><p align="center"><a href="products.php">
    Click here</a> to purchase any other item.</p>
        </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
