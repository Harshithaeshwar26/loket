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
    window.location='weather.php?lat='+position.coords.latitude+'&long='+position.coords.longitude;
}
</script>
<script>
  document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementById("mybutton").click();
 });
</script>


</body>
</html>