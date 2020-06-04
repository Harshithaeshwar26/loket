<?php
// include('connect_db.php');
// $target_dir = $_SERVER["DOCUMENT_ROOT"]. "/loket_e-commerce/assets/images/collection/BigDeal_images/602-402/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// echo basename($_FILES["fileToUpload"]["name"]) . "<br>";
// echo $_FILES["fileToUpload"]["tmp_name"] . "<br>";
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
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
//     window.location = "add-sub_category.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo'<script>
//     alert("Sorry, your file is too large");
//     window.location = "add-sub_category.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo'<script>
//     alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed");
//     window.location = "add-sub_category.php";
//     </script>';
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo'<script>
//     alert("Sorry, your file was not uploaded");
//     window.location = "add-sub_category.php";
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
$category = $_POST['category'];
$sub_category_name = $_POST['sub_category_name'];
// $colour = $row['colour'];
// $size = $row['size'];
// $height = $row['height'];
// $weight = $row['weight'];
// $depth = $row['depth'];
// $offer_code = $row['offer_code'];
// $total_tax = 0.18;
// $product_quantity = $_POST['product_quantity'];
$description = $_POST['description'];
$product_image = "../assets/images/collection/BigDeal_images/602-402/".$_FILES["fileToUpload"]["name"];
echo $product_name;
// print_r($_POST);
$sql = "INSERT INTO admin_sub_category(id, sub_category_name, category_name,sub_category_image,description) VALUES (NULL, '$sub_category_name','$category_name','$sub_category_image','$description');"; 
$result = $conn->query($sql);
echo $sql;
echo $result;
if($result->num_rows>=0){
    echo'<script>
    alert("Product added successfully");
    window.location = "add-sub_category.php";
    </script>';
}

?>