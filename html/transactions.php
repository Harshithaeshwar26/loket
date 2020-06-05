<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  
  <!-- <nav class="navbar navbar-light light-blue lighten-4">
    <button class="navbar-toggler first-button icon" id="mobileToggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
    aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i></button>
    <div class="col-sm-4 collapse navbar-collapse" id="navbarSupportedContent20">
      <ul class=" navbar-nav mr-auto">
        <li><a href="admin_events.php"> Events </a></li>
        <li><a class = "active" href="adminTransactions.php"> Transactions </a></li>
        <li><a href="adminProfileView.php"> Profile </a></li>
        <li><a href="addEvents.php">Add Events</a></li>
        <li><a href="addEvents.php">Roles</a></li>
      </ul>
    </div>
  </nav> -->
<div class="container">
<?php
// require_once("./loadEnvironmentals.php"); 

// echo $uname;
include('connect_db.php');
// $user_id = $_SESSION['user_id'];
// echo $user_id;
$sql = "SELECT  * FROM products";
$result = $conn->query($sql);
// echo "<div class='w3-container table-responsive'><table class = 'w3-table-all table table-striped table-bordered table-sm' id='dtBasicExample'><thead<tr><th class='th-sm'>Payment Amount (In USD) </th><th class='th-sm'>First Name</th><th class='th-sm'>Last Name</th><th class='th-sm'>Payment Status</th><th class='th-sm'>Payment Time</th><th class='th-sm'>Event Name</th></tr></thead><tbody>";
echo "<div class='w3-container table-responsive'>
<table class = 'w3-table-all table table-striped table-bordered table-sm' id='dtBasicExample'>
<thead><tr><th class='th-sm'>Product Name </th><th class='th-sm'>Initial Cost</th><th class='th-sm'>Final Cost</th><th class='th-sm'>Sub Category Name</th><th class='th-sm'>Shop Id</th></tr></thead><tbody>";
      if ($result->num_rows >= 0) {
while($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['product_name']}</td><td>{$row['initial_cost']}</td><td>{$row['final_cost']}</td><td>{$row['sub_category_name']}</td><td>{$row['shop_id']}</td></tr>";
}
      }
    
echo "</tbody></table></div>";
?>
</div>
<footer>
  copyright&copy;2020
</footer>
  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script> 
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#dtBasicExample').DataTable({
        "searching": true,
        "order": [[ 4, "desc" ]]
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>  
</body>
</html>

</html>