<?php
function check_if_added_to_cart($item_id){
    require 'includes/common.php';
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    $user_id=$_SESSION['user_id'];
    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and
    status='Added to Cart'";
    $result= mysqli_query($con, $query);
    $row_count=mysqli_num_rows($result);
    if($row_count>=1){
        return TRUE;
        
    }
 else {
        return FALSE;    
    }
}

?>