<?php
echo'<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
include('connect_db.php');
session_start();
if(isset($_POST['submit'])){
    $email_address = $_POST['email_address'];
    $pwd = md5($_POST['pwd']);
    // echo $email_address;
    // echo $pwd;
    $sql = "SELECT * FROM Users where email_address = '$email_address' AND password = '$pwd'";
   $result = $conn->query($sql);
    if($result->num_rows>=0){
    // echo "done";
    while($row = $result->fetch_assoc()){
        $_SESSION['uname'] = $row['fname'];
        $role = $row['role'];
        // echo $username;
        $_SESSION['email_address'] = $email_address;
        $registration_status = $row['registration_status'];
        // echo $registration_status;
       
        // echo $_SESSION['username'];
       
        // echo $username;
        // echo $email_address;
        // echo $pwd;
    }
    if($role == "user"){
        echo '<script>
        setTimeout(function () { 
            swal({
            title: "Login",
            text: "",
            type: "success",
            confirmButtonText: "OK"
            },
            function(isConfirm){
            if (isConfirm) {
                window.location.href = "category.php";
            }
            }); }, 1000);
        </script>';
    }
    else if($role == "delivery"){
        echo '<script>
        setTimeout(function () { 
            swal({
            title: "Login",
            text: "Sign-In successful",
            type: "success",
            confirmButtonText: "OK"
            },
            function(isConfirm){
            if (isConfirm) {
                window.location.href = "delivery_checkin.php";
            }
            }); }, 1000);
        </script>';
    }
    else if($role == "delivery_shop"){
        echo '<script>
        setTimeout(function () { 
            swal({
            title: "Login",
            text: "Sign-In successful",
            type: "success",
            confirmButtonText: "OK"
            },
            function(isConfirm){
            if (isConfirm) {
                window.location.href = "delivery_shop_status.php";
            }
            }); }, 1000);
        </script>';
    }
   
}
else{
    echo '<script>
    setTimeout(function () { 
        swal({
          title: "Login",
          text: "Incorrect Credentials",
          type: "error",
          confirmButtonText: "OK"
        },
        function(isConfirm){
          if (isConfirm) {
            window.location.href = "index.php";
          }
        }); }, 1000);
    </script>';

}
}
?>
<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button id = "mybutton" onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(redirectToPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function redirectToPosition(position) {
    window.location='category.php?lat='+position.coords.latitude+'&long='+position.coords.longitude;
}
</script>
<script>
  document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementById("mybutton").click();
 });
</script>