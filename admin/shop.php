<?php
include('connect_db.php');
echo'<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
// $target_dir = $_SERVER["DOCUMENT_ROOT"]. "/loket_e-commerce/assets/images/collection/BigDeal_images/602-402/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// echo basename($_FILES["fileToUpload"]["name"]) . "<br>";
// echo $_FILES["fileToUpload"]["tmp_name"] . "<br>";
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// echo  $target_file;
// //Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
      
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//     echo'<script>
//     alert("Sorry, file already exists");
//     window.location = "add-product.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo'<script>
//     alert("Sorry, your file is too large");
//     window.location = "add-product.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo'<script>
//     alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed");
//     window.location = "add-product.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo'<script>
//     alert("Sorry, your file was not uploaded");
//     window.location = "add-product.php";
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
$shop_name = $_POST['shop_name'];
$contact_name = $_POST['cname'];
$cphone_number = $_POST['cphone_number'];
$cemail_address = $_POST['cemail_address'];
$address_1 = $_POST['address_1'];
$address_2 = $_POST['address_2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
// $weight = $_POST['weight'];
// $depth = $_POST['depth'];
// $offer_code = $_POST['offer_code'];
// $total_tax = 0.18;
// $product_quantity = $_POST['quantity'];
// $expiry_date = $_POST['expiry_date'];
// $description = $_POST['description'];
// $product_image = "../assets/images/collection/BigDeal_images/abc/".$_FILES["fileToUpload"]["name"];
// echo $product_name;
// print_r($_POST);
$sql = "INSERT INTO shops(shop_id, shop_name, contact_name, cphone_number, cemail_address, address_1, address_2, city, state, zipcode, country) VALUES (NULL, '$shop_name','$contact_name','$cphone_number', '$cemail_address','$address_1','$address_2','$city','$state','$zipcode','$country');"; 
$result = $conn->query($sql);
// echo $sql;
// echo $result;
if($result->num_rows>=0){
    echo '<script>
    setTimeout(function () { 
        swal({
        title: "",
        text: "Shop Added Successfully",
        type: "success",
        confirmButtonText: "OK"
        },
        function(isConfirm){
        if (isConfirm) {
            window.location.href = "add-shop.php";
        }
        }); }, 1000);
    </script>';
}
