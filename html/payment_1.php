<?php 
$purpose = "Payment";
$amount = $_POST["amount"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
include 'src/instamojo.php';
$api = new Instamojo\Instamojo('29b34070bf5867b7d36bf2586c4f4855', '40d161c14f252cc781066e0c685f5f4d','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $amount,
        "buyer_name" => $name,
        "phone" => $phone,
		"email" => $email,
        "send_email" => true,
        "send_sms" => true,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://studentstutorial.com/instamojo/thankyou.php",
        "webhook" => "https://studentstutorial.com/instamojo/webhook.php"
        ));
   $pay_ulr = $response['longurl'];
    header("Location: $pay_ulr");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
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
		<title>Payment Mojo</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
    <div class="container">
	<div class="page-header">
        <h1><a href="index.php">Instamojo Payment</a></h1>
		<form action="pay.php" method="POST" accept-charset="utf-8">
			<input type="hidden" name="product_name" value="<?php echo $prd_name; ?>"> 
			<input type="hidden" name="product_price" value="<?php echo $prd_price; ?>"> 
			<div class="form-group">
			<label>Your Name</label>
			<input type="text" class="form-control" name="name" placeholder="Enter your name">	 
			</div>
			<div class="form-group">
			<label>Your Phone</label>
			<input type="text" class="form-control" name="phone" placeholder="Enter your phone number"> 
			</div>
			<div class="form-group">
			<label>Your Email</label>
			<input type="email" class="form-control" name="email" placeholder="Enter you email"> 
			</div>
			<div class="form-group">
			<label>Amount</label>
			<input type="email" class="form-control" name="amount" Value="100" readonly>
			</div>
			<p><input type="submit" class="btn btn-success btn-lg" value="Click here to Pay"></p>
		</form>
 
    
    </div> <!-- /container -->
		</div>


  </body>
</html>


