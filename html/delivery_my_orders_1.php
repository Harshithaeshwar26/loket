<?php
include('connect_db.php');
$order_id = $_REQUEST['id'];
$order_status = $_REQUEST['id1'];
$sql = "UPDATE order_status SET status = '$order_status' WHERE item_id = '$order_id';";
$result = $conn->query($sql);
    echo'<script>
    window.location = "delivery_my_orders.php";
    </script>';
?>