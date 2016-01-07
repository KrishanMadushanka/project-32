<!DOCTYPE html>
<html>
<head>
    <?php
        include getLatLng.php;
    ?>
    <script src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
</head>
<body>
    <p id="demo1"></p>
    <p id="demo2"></p>
    <!--<button onclick="getLocation()" id="demo">get current location</button>-->
    <button onclick="getLocation1()">get ditance from current location to other location</button>

    
        
    

    <script>
        //var x=<?php echo $jsonData;?>;

        var lat;
        var longt;
        var latLngA = new google.maps.LatLng(lat, longt);
        var latLngB = new google.maps.LatLng(6.8664813, 79.8846455);//laugfs
        var latLngC=new google.maps.LatLng(6.8744968,79.9002849);//puhulyaya
        var distance1 = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
        var distance2=google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngC);

        var x=document.getElementById("demo1");
        var y=document.getElementById("demo2");

        function getLocation1() {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    var latLngA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                    var latLngB = new google.maps.LatLng(6.8664813, 79.8846455);
                    var latLngC=new google.maps.LatLng(6.8744968,79.9002849);
                    var distance1 = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
                    var distance2=google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngC);
                    //alert(distance/1000);//In k metres
                    x.innerHTML=("To Laugfs: "+distance1/1000+" km");
                    y.innerHTML=("To Puhulyaya: "+distance2/1000+" km");
                },
                function() {
                    alert("geolocation not supported!!");
                }
            );
        }

        /*function getLocation(){
            if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }else{
                alert("Geolocation is not supported by this browser.");
            }
        }
        function showPosition(position){
            lat = position.coords.latitude;
            longt = position.coords.longitude;
            x.innerHTML="Latitude: " + lat + "<br>Longitude: " + longt;
            alert(lat);
        }*/
    </script>
</body>
</html>