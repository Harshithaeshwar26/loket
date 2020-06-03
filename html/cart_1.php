<?php
include('connect_db.php');
$order_id = rand(11111111,99999999);
$product_name = $_REQUEST['id'];
$sql = "SELECT * FROM products WHERE product_name = '$product_name';";
$result = $conn->query($sql);
if($result->num_rows>=0){
    while($row=$result->fetch_assoc()){
        $product_name = $row['product_name'];
        $final_cost = $row['final_cost'];
        $product_quantity = $row['product_quantity'];
        $product_image = $row['product_image'];
        $username = "Harshitha";
        $product_quantity_1 = 1;
    }
}
$sql_2 = "SELECT * FROM items WHERE item_name = '$product_name';";
$result_2 = $conn->query($sql_2);
if($result_2->num_rows>0){
    echo"done";
    echo'<script>
    alert("Item already added to cart");
    window.location = "cart.php";
    <script>';
}
else{
    $sql1 = "INSERT INTO items(id, item_name, username, item_price,product_quantity,initial_quantity, product_image, order_id) VALUES (Null, '$product_name', '$username', '$final_cost','$product_quantity_1','$product_quantity','$product_image','$order_id');";
    $result1 = $conn->query($sql1);
    echo $sql1;
    echo $result1;
    if($result1->num_rows>=0){
        echo'
        <script>
        alert("Cart Updated Successfully");
        window.location = "cart.php?id='.$product_name.'";
        </script>';
    }
    }
?>