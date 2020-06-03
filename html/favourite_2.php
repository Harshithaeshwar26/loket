<?php
include('connect_db.php');
$product_name = $_REQUEST['id'];
$sql = "DELETE from favourites WHERE item_name = '$product_name';";
$result = $conn->query($sql);
if($result->num_rows>=0){
    echo'
    <script>
    alert("Favourite Updated Successfully");
    window.location = "favourite.php";
    </script>';
}
?>