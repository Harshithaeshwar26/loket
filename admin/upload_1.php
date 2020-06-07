<?php
echo'<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
session_start();
include('connect_db.php');
$sub_category_name =  $_SESSION['sub_category_name'];
$target_dir = $_SERVER["DOCUMENT_ROOT"]. "/assets/images/collection/BigDeal_images/602-402/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
echo basename($_FILES["fileToUpload"]["name"]) . "<br>";
echo $_FILES["fileToUpload"]["tmp_name"] . "<br>";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    // echo "File is not an image";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    // echo "Sorry, File Already Exists";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  // echo "Sorry, File Too Large To Upload";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
  }
}
$sql1 = "SELECT * FROM admin_sub_category ORDER BY id DESC LIMIT 1;";
$result1= $conn->query($sql1);
if($result1->num_rows>=0){
    while($row=$result1->fetch_assoc()){
      $sub_category_name = $row['sub_category_name'];
    }
  }
$sub_category_image = "..assets/images/collection/BigDeal_images/602-402/".basename($_FILES["fileToUpload"]["name"]);
$sql = "UPDATE admin_sub_category SET sub_category_image = '$sub_category_image' WHERE sub_category_name = '$sub_category_name';";
$result = $conn->query($sql);
if($result->num_rows>=0){
  echo '<script>
  setTimeout(function () { 
      swal({
      title: "",
      text: "Sub Category Added Successfully",
      type: "success",
      confirmButtonText: "OK"
      },
      function(isConfirm){
      if (isConfirm) {
          window.location.href = "add-sub_category.php";
      }
      }); }, 1000);
  </script>';
  }
// echo $sql;
// echo $result;
?>