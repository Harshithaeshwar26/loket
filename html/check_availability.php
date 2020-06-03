<?php
include('connect_db.php');
$zipcode = $_POST['zipcode'];
$product_name = $_POST['product_name'];
$sql = "SELECT * FROM location WHERE zipcode = '$zipcode';";
$result=$conn->query($sql);
if($result->num_rows>0){
  echo'<script>
  alert("Delivery available in this location");
  window.location = "checkout.php?id='.$product_name.'&id1=1";
  </script>';
}
else{
    echo'<script>
    alert("Delivery not available in this location");
    window.location = "checkout.php?id='.$product_name.'";
    </script>'; 
}
?>