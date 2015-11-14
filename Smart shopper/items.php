
	
<?php 

echo "<body style='background-color:white;font-size:28'>";
echo ' 
<html>
<img src="logo1.png" width="280" height="125"/>

</html>
';
//header('location:bill.html');

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
  else
  {


    $N = count($item);

    //echo("<font size=5 color=#980000;>You have selected $N item(s):</font> ");
    for($i=0; $i < $N; $i++)
    {
      //echo htmlspecialchars($item[$i] ). " ";
      
      $sql="INSERT INTO `smart_shopper`.`deal`(`ItemID`,`I_Name`,`price1`,`price2`,`price3`,`price4`,`price5`,`quantity`) VALUES ('{$item[$i]}',(select I_Name from items where ItemID='".$item[$i]."'),(select price1 from items where ItemID='".$item[$i]."'),(select price2 from items where ItemID='".$item[$i]."'),(select price3 from items where ItemID='".$item[$i]."'),(select price4 from items where ItemID='".$item[$i]."'),(select price5 from items where ItemID='".$item[$i]."'),'{$qty[$i]}')";
    
    
     
      $sql3="INSERT INTO `smart_shopper`.`bill`(`I_Name`,`Cost1`,`Cost2`,`Cost3`,`Cost4`,`Cost5`) VALUES ((select I_Name from deal where ItemID='".$item[$i]."'),(select quantity *  price1 from deal where ItemID='".$item[$i]."'),(select quantity *  price2 from deal where ItemID='".$item[$i]."'),(select quantity *  price3 from deal where ItemID='".$item[$i]."'),(select quantity *  price4 from deal where ItemID='".$item[$i]."'),(select quantity *  price5 from deal where ItemID='".$item[$i]."'))";

    $result1=mysqli_query($conn,$sql);
    $result3=mysqli_query($conn,$sql3);

    if(!$result1||!$result3){
    echo "Failed to insert";//
   
    }
    }
/*echo ' 
<html>
<img src="bill.jpg" width="280" height="125"/>

</html>
';*/
echo ' 
<html>
<font color=#880000 face="Impact" size=28>
<br><center>Your Bill<br></center>
</font>
</html>
';
//echo "<br><center>Your Bill<br><br></center>";

$sql6 = "SELECT * FROM bill";

$result6 = mysqli_query($conn,$sql6)or die(mysqli_error());

$sql7 = "SELECT * FROM items";

$result7 = mysqli_query($conn,$sql7)or die(mysqli_error());

echo "<table>";
echo "<tr style='width: 200px;text-align: center;line-height: 10px;height: 30px;color:#980000;font-size:20px'><th >ITEMID</th><th>Cargills</th><th>Laugfs</th><th>Puhulyaya</th><th>Arpico</th><th>Samanala</th></tr>";

$total_s1=0;
$total_s2=0;
$total_s3=0;
$total_s4=0;
$total_s5=0;


while($row = mysqli_fetch_array($result6)) {
    $iname = $row['I_Name'];
    $shop1 = $row['Cost1'];
    $shop2 = $row['Cost2'];
    $shop3 = $row['Cost3'];
    $shop4 = $row['Cost4'];
    $shop5 = $row['Cost5'];
    
    $total_s1+=$shop1;
    $total_s2+=$shop2;
    $total_s3+=$shop3;
    $total_s4+=$shop4;
    $total_s5+=$shop5;
    
    
    echo "<tr><td style='width: 200px;text-align: center;line-height: 10px;height: 30px;font-size:20px'>".$iname."</td>
    <td style='width: 200px;text-align: center;font-size:20px'>".$shop1."</td>
    <td style='width: 200px;text-align: center;font-size:20px'>".$shop2."</td>
    <td style='width: 200px;text-align: center;font-size:20px'>".$shop3."</td>
    <td style='width: 200px;text-align: center;font-size:20px'>".$shop4."</td>
    <td style='width: 200px;text-align: center;font-size:20px'>".$shop5."</td></tr>";

} 
//header('location:bill.html');
echo "<html>";
echo "<span style='background-color: #FFFF00';>";
echo"<hr>";

echo "<tr><td style='width: 200px;text-align: center;line-height: 10px;height: 30px;font-size:20px;color:#ffffff;background-color: #800000'>TotalCost</td>
    <td style='width: 200px;text-align: center;font-size:20px;background-color: #800000;color:#ffffff'>".$total_s1."</td>
    <td style='width: 200px;text-align: center;font-size:20px;background-color: #800000;color:#ffffff'>".$total_s2."</td>
    <td style='width: 200px;text-align: center;font-size:20px;background-color: #800000;color:#ffffff'>".$total_s3."</td>
    <td style='width: 200px;text-align: center;font-size:20px;background-color: #800000;color:#ffffff'>".$total_s4."</td>
    <td style='width: 200px;text-align: center;font-size:20px;background-color: #800000;color:#ffffff'>".$total_s5."</td></tr>";

echo"<hr>";
echo "</span>";

echo "</html>";
echo "</table>";

   $query1="TRUNCATE TABLE bill";
    $r2 = mysqli_query($conn,$query1);

    $query2="TRUNCATE TABLE deal";
    $r3 = mysqli_query($conn,$query2);


}


   
  

    
//.....................................................
    
  


?>