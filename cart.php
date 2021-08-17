<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'includes/links.php';
    ?>
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
        <div class="container">
            
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
        <table class="table table-bordered table-striped table-responsive" >
             <?php
        
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added To Cart'";
        $result = mysqli_query($con, $query) or die;
        if (mysqli_num_rows($result) >= 1) {
            ?>

            <thead>
                
                <tr>
                    <th>Item number</th>
                    <th>Item name</th>
                    <th>Price</th>
                    <th>     </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                 echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        </table>
        </div>
                    </div>
            </div>
        </div>
        
         <?php
         include 'includes/footer.php';
         ?>

    </body>
</html>
