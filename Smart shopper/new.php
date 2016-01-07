<!DOCTYPE html>
<html>
<head>
    <script src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
</head>
<body>
    <button onclick="getLocation()">get distance from current location to other location</button>

    <?php
    //header("Content-Type: application/json");

    $hostname="localhost";//assigning server name to variable
    $username="root";//assigning username to database to variable
    $password="";//assigning password to database to variable
    $db="smart_shopper";//assigning database name to variable

    $conn=mysqli_connect($hostname,$username,$password,$db);//connecting to database
    if(!$conn){
        die("Error");//if unable to connect to database die, print "Error"
    }
    $sql="SELECT `Latitude`,`Longitude` FROM `user`";
    $res=  mysqli_query($conn,$sql) or die (mysqli_error());
    $rowNo=($res->num_rows);
    $i=$rowNo;
    //echo $rowNo;
    $array = array();

    while ($row = $res->fetch_assoc()) {
        //$array[$i]="Lat: ".$row['Latitude']." "."Lng: ".$row['Longitude'];
        $array[$i]=$row['Latitude'].",".$row['Longitude'];
        $i-=1;
        //$jsonData = '{ "loc":{ "Latitude":"'.$lat.'", "Longitude":"'.$lon.'" } }';
        //echo $jsonData
    }
    $string=implode(",",$array);
    //$jsonData=json_encode($array);
    //print_r($jsonData);
    $conn->close();
?>

    <script>
        var lat;
        var longt;
        var latLngA = new google.maps.LatLng(lat, longt);
        var latLngB = new google.maps.LatLng(6.8664813, 79.8846455);//laugfs
        var latLngC=new google.maps.LatLng(6.8744968,79.9002849);//puhulyaya
        var distance1=google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
        var distance2=google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngC);

        var x=document.getElementById("demo");

        function getLocation() {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    var latLngA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                    //var latLngB = new google.maps.LatLng(6.8664813, 79.8846455);//laugfs
                    //var latLngC=new google.maps.LatLng(6.8744968,79.9002849);//puhulyaya
                    var distance1=google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
                    var distance2=google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngC);
                    alert("To Laugfs: "+Number((distance1/1000).toFixed(2))+" km");
                    alert("To Puhulyaya: "+Number((distance2/1000).toFixed(2))+" km");
                },
                function() {
                    alert("geolocation not supported!!");
                }
            );
        }
        var myvar = [<?php echo json_encode($string); ?>];
        alert(myvar);

    </script>
</body>
</html>