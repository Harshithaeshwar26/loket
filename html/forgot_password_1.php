<?php
echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">';
include('connect_db.php');
include("./php/class.phpmailer.php");
if(isset($_POST['submit'])){
    
    $email_address = $_POST['email_address'];
    echo $email_address;
    $sql = "SELECT * FROM Users WHERE email_address = '$email_address';";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $fname = $row['fname'];
        }
    }
    $sql1 = "SELECT * FROM Users WHERE email_address = '$email_address';";
    $result1 = $conn->query($sql1);
    if($result1->num_rows>0){
    function my_simple_crypt( $string, $action = 'e' ) {
        // you may change these values to your own
        $secret_key = 'my_simple_secret_key';
        $secret_iv = 'my_simple_secret_iv';
    
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    
        if( $action == 'e' ) {
            $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'd' ){
            $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }
    
        return $output;
    }
    $mail = new PHPMailer;
    $mailaddress = $email_address;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail -> Username = 'contact.azeempatel@gmail.com';
    $mail -> Password = 'AzeemPatel46#';                          // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom('contact.azeempatel@gmail.com', 'no reply');
    $mail->addAddress($mailaddress);     // Add a recipient                                  // Set email format to HTML
    $mail->Subject = 'Loket.in-E Commerce Website';
    $mail->Body    = '<h1 align =center style="color:#0A99F3" >Loket.in</h1><br>
                      <h3 align =center>Dear <p style ="color :green">'.$fname.' </p>Welcome to Loket E Commerce Website </h3><br>
                      <h5 align =center><a href = "http://loket.in/testing/index.php?&id1='.$email.'"> Reset Password</h5><br>';               
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail -> isHTML(true);
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // echo'<script>
        // alert("Email has been sent successfully");
        // window.location= "cashier.php";
        // </script>';
    }
        echo '<script>
        setTimeout(function () { 
            swal({
              title: "Forgot Password",
              text: "A link has been sent to your registered email address",
              type: "success"
            },
            function(isConfirm){
              if (isConfirm) {
                window.location.href = "login.php";
              }
            }); }, 1000);
        </script>';
    }
    else{
        echo '<script>
            setTimeout(function () { 
                swal({
                  title: "Forgot Password",
                  text: "Email address has not been registered",
                  type: "error"
                },
                function(isConfirm){
                  if (isConfirm) {
                    window.location.href = "login.php";
                  }
                }); }, 1000);
            </script>';
    }
}
?>