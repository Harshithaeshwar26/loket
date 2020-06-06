<?php
include('connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loket - E-commerce</title>

    <style>
        * {
        box-sizing: border-box;
        }

        body {
        background-color: #474e5d;
        font-family: Helvetica, sans-serif;
        }

        /* The actual timeline (the vertical ruler) */
        .timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        }

        /* The actual timeline (the vertical ruler) */
        .timeline::after {
        content: '';
        position: absolute;
        width: 6px;
        background-color: white;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
        }

        /* Container around content */
        .container {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
        }

        /* The circles on the timeline */
        .container::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        right: -17px;
        background-color: white;
        border: 4px solid #FF9F55;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
        }

        /* Place the container to the left */
        .left {
        left: 0;
        }

        /* Place the container to the right */
        .right {
        left: 50%;
        }

        /* Add arrows to the left container (pointing right) */
        .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 30px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent white;
        }

        /* Add arrows to the right container (pointing left) */
        .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 30px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
        }

        /* Fix the circle for containers on the right side */
        .right::after {
        left: -16px;
        }

        /* The actual content */
        .content {
        padding: 20px 30px;
        background-color: white;
        position: relative;
        border-radius: 6px;
        }

        /* Media queries - Responsive timeline on screens less than 600px wide */
        @media screen and (max-width: 600px) {
        /* Place the timelime to the left */
        .timeline::after {
        left: 31px;
        }
        
        /* Full-width containers */
        .container {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
        }
        
        /* Make sure that all arrows are pointing leftwards */
        .container::before {
        left: 60px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left::after, .right::after {
        left: 15px;
        }
        
        /* Make all right containers behave like the left ones */
        .right {
        left: 0%;
        }
        }

        * {box-sizing: border-box;}

        body { 
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
        }

        .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px; 
        line-height: 25px;
        border-radius: 4px;
        }

        .header a.logo {
        font-size: 25px;
        font-weight: bold;
        }

        .header a:hover {
        background-color: #ddd;
        color: black;
        }

        .header a.active {
        background-color: dodgerblue;
        color: white;
        }

        .header-right {
        float: right;
        }

        @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }
        
        .header-right {
            float: none;
        }
        }

        .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        }

        .button5 {
        background-color: white;
        color: black;
        border: 2px solid #555555;
        }

        .button5:hover {
        background-color: #555555;
        color: white;
        }

        .button5 {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .button5 {width: 100%;}
        .button5 {border-radius: 12px;}
    </style>

</head>
<body>

    <div class="header">
    <a href="#default" class="logo" style="text-align:center">Loket</a>
        <div class="header-right">
            <a class="active" style="text-align:center; font-size:15px; font-weight: bold;" href="#home">HOME</a>
        </div>
    </div>
    
    <div class="timeline">
    <?php
    include('connect_db.php');
    $item_id = 72970564;
    $sql = "SELECT * FROM order_status WHERE item_id = '$item_id';";
    $result = $conn->query($sql);
    if($result->num_rows>=0){
        while($row=$result->fetch_assoc()){
            $status = $row['status'];
        }
    }
    if($status = 'ordered_accepted'){
        echo '<div class="container left">
        <div class="content">
            <h2>Order Accepted By Delivery Boy</h2>
            <p></p>
        </div>
    </div>';
    }
    else if($status = 'ordered_collected'){
        echo'<div class="container left">
        <div class="content">
            <h2>Order Accepted By Delivery Boy</h2>
            <p></p>
        </div>
    </div>
    <div class="container right">
            <div class="content">
                <h2>Order Picked-Up At Store</h2>
                <p>1st Product</p>
                <p>2nd Product</p>
                <p>3rd Product</p>
                <p>4th Product</p>
            </div>
        </div';
    }
    else if($status = 'delivered'){
        echo'<div class="container left">
        <div class="content">
            <h2>Order Accepted By Delivery Boy</h2>
            <p></p>
        </div>
    </div>
    <div class="container right">
            <div class="content">
                <h2>Order Is On The Way</h2>
                <button class="button button5">Live Track</button>
                <p></p>
            </div>
        </div>
        <div class="container left">
            <div class="content">
                <h2>Order Delivered</h2>
                <p>Order Details</p>
            </div>
        </div>';
    }   
    ?>
    </div>

</body>
</html>