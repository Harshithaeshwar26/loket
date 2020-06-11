<?php
$decoded_json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=13.0033,76.1004&key=AIzaSyDeb2feCGV_WQXXYX4Rk9GgApaS58jhU1g'));

foreach($decoded_json->results as $results)
{

    foreach($results->address_components as $address_components)
    {
        // Check types is set then get first element (may want to loop through this to be safe,
        // rather than getting the first element all the time)
        // print_r($address_components);
        if(isset($address_components->types) && $address_components->types[0] == 'postal_code')
        {
                    // Do what you want with data here
            $zipcode =  $address_components->long_name;          
        }
    }
}
echo $zipcode;
?>