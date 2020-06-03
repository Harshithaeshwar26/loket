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
    }
}
$sql_2 = "SELECT * FROM favourites WHERE item_name = '$product_name';";
$result_2 = $conn->query($sql_2);
if($result_2->num_rows>0){
    echo"done";
    echo'<script>
    alert("Item already added to cart");
    window.location = "favourite.php";
    <script>';
}
else{
    $sql1 = "INSERT INTO favourites(id, item_name, username, item_price,initial_quantity, product_image) VALUES (Null, '$product_name', '$username', '$final_cost','$product_quantity','$product_image');";
    $result1 = $conn->query($sql1);
    echo $sql1;
    echo $result1;
    if($result1->num_rows>=0){
        echo'
        <script>
        alert("Favourites Updated Successfully'.$sql1.''.$result1.'");
        window.location = "favourite.php?id='.$product_name.'";
        </script>';
    }
    }
?>