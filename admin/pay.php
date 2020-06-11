<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$product_name = "abc";
$price = $_POST["amount"];
$name = "abc";
$phone = $_POST["phone"];
$email = $_POST["email"];
include '../src/instamojo.php';       //Download from website
$api = new Instamojo\Instamojo('test_0cf201539311159827b3e0c1923', 'test_8076ca821d24829f71324b38b5b','https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://loket.in/confermation.php",
        // "webhook" => "http://loket.in/webhook.php"
        ));
    print_r($response);
    $pay_url = $response['longurl'];
    
    header("Location: $pay_url");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
?>