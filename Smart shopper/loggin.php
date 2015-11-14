<?php
	session_start();
	if(isset($_POST['submit']))//when submit button is clicked following code is executed
	{
		mysql_connect('localhost','root','') or die(mysql_error());//connecting to the database
 		mysql_select_db('smart_shopper') or die(mysql_error());//selecting a database from
 		$name=$_POST['Username'];//assigning the username entered in html form to the variable "$name"
		$_SESSION['name']=$name;
		global$name;
 		$pwd=hash("sha1",$_POST['Password']);//assigning the password entered in html form to the variable "$pwd by hashcodinig the password"
		
 		if($name!="" && $pwd!="")//if username and password are not empty,
 		{
 			$query=mysql_query("select * from login where E_mail='".$name."' and Password='".$pwd."'") or die(mysql_error());
			//assigning mysql query to $query to execute

			$res=mysql_fetch_row($query);//Returns an numerical array of strings that corresponds to the fetched row
			
			if($res)//if $res is true,
			{
				$query1="SELECT User_ID FROM user WHERE E_mail = '".$name."'";
			$y=mysql_query($query1) or die(mysql_error());
			$row1=mysql_fetch_array($y);
	
	
			$query2="SELECT * FROM item WHERE User_ID = {$row1['User_ID']}";
			$rec=mysql_query($query2) or die(mysql_error());
			$ref=mysql_fetch_row($rec);
				if($ref){
					header('location:TraderAcc.php');//directing to ralated page which is related to user
				}
				else{
					header('location:TraderAcc.html');//directing to ralated page which is related to user
				}
			}
			else
			{
   			//echo "wrong password or username";//else print wrong password or username
				    echo '<script type="text/javascript">';
   
    				echo 'alert("Wrong Username or Password")';

    				echo '</script>';
			}
		}
		else
		{
   		header('location:Login.html');//if both fields are empty stay on same page
		}
	}

?>
