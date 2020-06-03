<?php
$data = $_POST;
$mac_provided = $data['mac'];  /* Get the MAC from the POST data*/
unset($data['mac']);  /* Remove the MAC key from the data. */
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
/* You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers*/
/* Pass the 'salt' without the <>.*/
$mac_calculated = hash_hmac("sha1", implode("|", $data), "723a3b8f18014441b3a7aead136b6544");

if($mac_provided == $mac_calculated){
   
    if($data['status'] == "Credit"){
       /* Payment was successful, mark it as completed in your database  */
                
                $to = 'YOUR_EMAIL_ADDRESS';
                $subject = 'Website Payment Request ' .$data['buyer_name'].'';
                $message = "<h1>Payment Details</h1>";
                $message .= "<hr>";
                $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
                $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
                $message .= "<hr>";
                $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
                $message .= '<p><b>Email:</b> '.$data['email'].'</p>';
                $message .= '<p><b>Phone:</b> '.$data['phone'].'</p>';
                $message .= "<hr>";
				$headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                /* send email*/
                mail($to, $subject, $message, $headers);
		}
    else{
       /* Payment was unsuccessful, mark it as failed in your database*/
    }
}
else{
    echo "Invalid MAC passed";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<title>Thank You, Mojo</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
	<body>
    <div class="container">
	<div class="page-header">
        <h1><a href="index.php">Instamojo Payment</a></h1>
        <p class="lead">A test payment integration for instamojo paypemnt gateway. Written in PHP</p>
    </div>
	<h3 style="color:#6da552">Thank You, Payment succus!!</h3>
<?php
include 'src/instamojo.php';
$api = new Instamojo\Instamojo('YOU_PRIVATE_API_KEY', 'YOUR_PRIVATE_AUTH_TOKEN','https://test.instamojo.com/api/1.1/');
$payid = $_GET["payment_request_id"];
try {
    $response = $api->paymentRequestStatus($payid);
	echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['email'] . "</h4>" ;
echo "<pre>";
   print_r($response);
echo "</pre>";
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
</div> <!-- /container -->
</body>
</html>