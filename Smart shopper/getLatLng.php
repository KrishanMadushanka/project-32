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
	//$conn->close();
?>

<script>
  var myvar = [<?php echo json_encode($string); ?>];
  alert(myvar);
</script>