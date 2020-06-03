<?php
    include('connect_db.php');
    $zipcode="573201";
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$zipcode."&key=AIzaSyDeb2feCGV_WQXXYX4Rk9GgApaS58jhU1g";
    $details=file_get_contents($url);
    $result = json_decode($details,true);
   
    $lat=$result['results'][0]['geometry']['location']['lat'];

    $lng=$result['results'][0]['geometry']['location']['lng'];
    echo $url;
    echo "Latitude :" .$lat;
    echo '<br>';
    echo "Longitude :" .$lng;
    $sql1 = "SELECT * FROM delivery_location LIMIT 1 ORDER BY timestamp DESC;";
    $result1 = $conn->query($sql1);
    if($result1->num_rows>0){
        while($row=$result1->fetch_assoc()){
            $lat1 = $row['delivery_x'];
            $lng1 = $row['delivery_y'];
        }
    }
    $username = "Harshitha";
   ;
    echo $result;
    echo $sql;
    $hmaps_request= "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=$lat,$lng&destinations=$lat1%2C$lng1&key=AIzaSyDeb2feCGV_WQXXYX4Rk9GgApaS58jhU1g";
						$data = file_get_contents($hmaps_request);
						$data = json_decode($data);
							$time = 0;
							$distance = 0;
							foreach($data->rows[0]->elements as $road) {
								$time += $road->duration->text;
								$distance += $road->distance->text;
							}
							$distance_1=$distance;
							$time_1 = $table[1];
							$distance_2 = $distance_1 * 1.609; 
                            $time_2 = $time_1 + 15;
                            // echo $distance;
                            // echo $time;
                            echo $distance_2;
                            echo"<br>";
                            echo $time_2;
    $sql = "INSERT INTO user_location(username,user_x, user_y,distance,timestamp) VALUES('$username','$lat', '$lng','$distance_2', CURRENT_TIME());";
    $result = $conn->query($sql); 
    if($distance_2<6){
      echo'<script>
      window.location = "payments.php";
      </script>';
    } 
    else{
        echo'<script>
        alert("Delivery boy not available please try after sometime");
        window.location = "category.php";
        </script>';
    }                 
    ?>
    