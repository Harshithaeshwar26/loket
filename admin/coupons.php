<?php
session_start();
include('connect_db.php');
echo'<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
// $target_dir = $_SERVER["DOCUMENT_ROOT"]. "/loket_e-commerce/assets/images/collection/BigDeal_images/1920-550/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// echo basename($_FILES["fileToUpload"]["name"]) . "<br>";
// echo $_FILES["fileToUpload"]["tmp_name"] . "<br>";
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
// $category = $_POST['category_name'];
// // $sub_category_name = $_POST['sub_category_name'];
// // $colour = $row['colour'];
// // $size = $row['size'];
// // $height = $row['height'];
// // $weight = $row['weight'];
// // $depth = $row['depth'];
// // $offer_code = $row['offer_code'];
// // $total_tax = 0.18;
// // $product_quantity = $_POST['product_quantity'];
// $description = $_POST['description'];
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
// //   if($check !== false) {
      
// //     echo "File is an image - " . $check["mime"] . ".";d
// //     $uploadOk = 1;
// //   } else {
// //     echo "File is not an image.";
// //     $uploadOk = 0;
// //   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//     echo'<script>
//     alert("Sorry, file already exists");
//     window.location = "add-category.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo'<script>
//     alert("Sorry, your file is too large");
//     window.location = "add-category.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo'<script>
//     alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed");
//     window.location = "add-category.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo'<script>
//     alert("Sorry, your file was not uploaded");
//     window.location = "add-category.php";
//     </script>';
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
// if($uploadOk == 1){

// $category_image = "../assets/images/collection/BigDeal_images/1920-550/".basename($_FILES["fileToUpload"]["name"]);
// echo $product_name;
// echo $product_image;
// print_r($_POST);
$coupon_code = $_POST['coupon_code'];
$total_discount = $_POST['total_discount'];
$amount = $_POST['amount'];
$category_name = $_POST['category_name'];
// $description = $_POST['description'];
$sql = "INSERT INTO coupons(id,coupon_code,value ,cost, time_created) VALUES (NULL,'$coupon_code','$total_discount','$amount', CURRENT_TIME());"; 
$result = $conn->query($sql);
// echo $sql;
// echo $result;
if($result->num_rows>=0){
    echo '<script>
  setTimeout(function () { 
      swal({
      title: "",
      text: "Coupons Added Successfully",
      type: "success",
      confirmButtonText: "OK"
      },
      function(isConfirm){
      if (isConfirm) {
          window.location.href = "add-coupons.php";
      }
      }); }, 1000);
  </script>';
  
}

?>