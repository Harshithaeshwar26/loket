<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect_db.php');
$sql1 = "SELECT * FROM admin_product ORDER BY product_id DESC LIMIT 1;";
$result1= $conn->query($sql1);
if($result1->num_rows>=0){
    while($row=$result1->fetch_assoc()){
      $product_code = $row['product_code'];
    }
  }
echo $product_code;
?>