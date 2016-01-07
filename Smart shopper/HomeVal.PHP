<?php
	$hostname="localhost";//assigning server name to variable
	$username="root";//assigning username to database to variable
	$password="";//assigning password to database to variable
	$db="smart_shopper";//assigning database name to variable

	$conn=mysqli_connect($hostname,$username,$password,$db);//connecting to database
	if(!$conn){
		die("Error");//if unable to connect to database die, print "Error"
	}

  $item = (isset($_POST['ITEM']) ? $_POST['ITEM'] : null);
  //$item = $_POST['ITEM'];
  $qty=$_POST['QTY'];
  $qty1= array();
  foreach ($qty as $row) {
    if ($row != 0)
       $qty1[] = $row;
}
$qty = $qty1;

  
  if(empty($item))
  {
    //echo("You didn't select items");
    //header('location:Home.html');
    //echo '<script language="javascript">';
    //echo 'alert("You have not select items")';
   // echo '</script>';

  	
    
    echo '<script type="text/javascript">';
   	echo 'alert("You cannot leave field empty")';
    echo '</script>';


    
  }
  else{
  	header('location:items.php');

  }
?>