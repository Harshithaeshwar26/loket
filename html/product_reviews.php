<?php
include('connect_db.php');
echo'<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">'; 
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email_address = $_POST['email_address'];
    $reviews = $_POST['reviews'];
    $product_name = $_POST['product_name'];
    // $username = $_POST['username'];
    // $password  = md5($_POST['pwd']);
    // $arr1 = rand(1000000,9999999);
    // $referral_code = $fname.$arr1;
    // $role = "user";
    $sql = "INSERT INTO product_reviews(id,fname,email_address,product_name,reviews) VALUES (Null, '$fname','$email_address','$product_name','$reviews')";
    $result = $conn->query($sql);
    // echo $sql;
    // echo $result;
    if($result->num_rows>=0){
        echo '<script>
        setTimeout(function () { 
            swal({
              title: "Reviews",
              text: "Your review has been submitted successfully",
              type: "success",
              confirmButtonText: "OK"
            },
            function(isConfirm){
              if (isConfirm) {
                window.location.href = "details_1.php?id='.$product_name.'";
              }
            }); }, 1000);
        </script>';
    }
}
?>