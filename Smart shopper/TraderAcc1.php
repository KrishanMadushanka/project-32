<?php
	include 'loggin.php';
	$name=$_SESSION['name'];
	mysql_connect('localhost','root','') or die(mysql_error());//connecting to the database
 	mysql_select_db('smart_shopper') or die(mysql_error());//selecting a database from
	//function savePrice(){
		if(isset($_POST['Save']))//when submit button is clicked following code is executed
		{
			$sql="SELECT User_ID FROM user WHERE E_mail = '".$name."'";
			$x=mysql_query($sql) or die(mysql_error());
			$row=mysql_fetch_array($x);
		
			$sql1="SELECT Item_Name FROM item WHERE User_ID = '0'";
			$result3=mysql_query($sql1) or die(mysql_error());
		
			$i=1;
			while($name=mysql_fetch_assoc($result3)){
				//$itemName[$i]=$name['Item_Name'];
			
				$sql2="INSERT INTO item (User_ID,Item_ID,Item_Name,Price) VALUES ('{$row['User_ID']}','{$i}','{$name['Item_Name']}','{$_POST[$i]}')";
				$result4=mysql_query($sql2) or die(mysql_error());
				$i++;
			}
			$res1=mysql_fetch_array($result4);
		
		
		
 		
			if($res1)//if $res is true,
			{
				echo "enter the all prices";//else print wrong password or username
				
				
			}
			else
			{
				header('location:TraderAcc.php');//directing to ralated page which is related to user
			}
		}
	//}
	//savePrice();
	
	

?>
