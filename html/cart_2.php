<?php
include('connect_db.php');
$product_name = $_REQUEST['id'];
$sql = "DELETE from items WHERE item_name = '$product_name';";
$result = $conn->query($sql);
if($result->num_rows>=0){
    echo'
    <script>
    alert("Cart Updated Successfully");
    window.location = "cart.php";
    </script>';
}
?>