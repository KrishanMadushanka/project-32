<?php
	
	$hostname="localhost";//assigning server name to variable
	$username="root";//assigning username to database to variable
	$password="";//assigning password to database to variable
	$db="smart_shopper";//assigning database name to variable

	$conn=mysqli_connect($hostname,$username,$password,$db);//connecting to database
	if(!$conn){
		die("Error");//if unable to connect to database die, print "Error"
	}

	$E_mail=$_POST['email'];
	$Contact_No=$_POST['contact'];
	$Address=$_POST['address'];//assigining the inputs in html form to variables
	$F_Name=$_POST['firstname'];
	$L_Name=$_POST['lastname'];
	$Password=$_POST['password'];
	$Latitude=$_POST['latitude'];
	$Longitude=$_POST['longitude'];
	

	$Password=hash("sha1",$Password);//hashcoding the password
	
	$query="INSERT INTO `smart_shopper`.`user` (`E_mail`, `Type`,";
	$query.=" `Contact_No`, `Address`, `F_Name`, `L_Name`,`Latitude`,`Longitude`) VALUES ";
	$query.="('{$E_mail}', 'trader', '{$Contact_No}', '{$Address}', '{$F_Name}', '{$L_Name}','{$Latitude}','{$Longitude}')";
	//inserting data in to table user
 	
 	$query2="INSERT INTO `smart_shopper`.`login` (`E_mail`, `Password`) VALUES ('{$E_mail}', '{$Password}')";
 	
 	//$query3="INSERT INTO 'smart_shopper'.'user'('Latitude','Longitude') VALUES ('{$Latitude}','{$Longitude}')";
 	//inserting data in to table login

	$result2=mysqli_query($conn,$query2);//return true is query is exected successfully	
	$result=mysqli_query($conn,$query);//return true is query is exected successfully
	//$result3=mysqli_query($conn,$query3);
 	if(!$result || !$result2){
 		echo "Failed to insert";//if $result2 or $result returns false print failed to insert
 	}else{
 		echo "string";
 		header('location:Login.html');//else direct to related page
 	}
 	echo $Latitude;
 ?>