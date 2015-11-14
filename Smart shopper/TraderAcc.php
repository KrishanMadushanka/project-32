<?php
	$con = mysql_connect('localhost', 'root', '');
	mysql_select_db("smart_shopper", $con);
	include 'loggin.php';
	$name=$_SESSION['name'];
	$sql2="SELECT User_ID FROM user WHERE E_mail = '".$name."'";
	$x=mysql_query($sql2) or die(mysql_error());
	$row=mysql_fetch_array($x);
	
	
	$sql="SELECT * FROM item WHERE User_ID = {$row['User_ID']}";
	$records=mysql_query($sql) or die(mysql_error());
	$reg=mysql_fetch_row($records);
	
	
	
	
	if(isset($_POST['update'])){
		$updatequery = "UPDATE item SET Price='$_POST[Price]' WHERE Item_ID = '$_POST[hidden]'";
		mysql_query($updatequery, $con);
	}
	
	$sql4="SELECT F_Name FROM user WHERE User_ID = '".$row['User_ID']."'";
	$record3=mysql_query($sql4) or die(mysql_error());
	$row1=mysql_fetch_array($record3);
	
?>

<!doctype html>
<html lang="en">
<!--Head section>-->
<head>
	<title>Smart Shopper</title>
    <!--Linking the css file to the html file-->
	<link rel="stylesheet" href="TraderAcc.css" type="text/css" media="screen" />

    
</head>

<!--Starts the body of the page-->
<body>

<!--Top div in the page-->
<div id="parent">

<!--Right side of the parent div-->
    <div class="right"><font size="6" face="Agency FB" color="#996600"><b>Smart Shopper Best Deal Searching System</b></font></div>
    <!--Left side of the parent div-->
    <div class="left"><img src="logo.jpg" alt="logo" width="224" height="117" /></div>
</div> 

<!--Tab display area-->
	<nav>
    <!--Tabs as a unordered list-->
		<ul>
			<li><a href="Home.php">Home</a></li>
			<li><a href="about us.html">About us</a></li>
			<li><a href="Registration.html">Registration</a></li>
			<li><a href="Login.html">Login</a></li>
			<li><a href="Comment.html">Comment</a></li>
		</ul>
	</nav>
    <!--Intro section-->
	<section id="intro" name="intro">
		<header>
        <!--Animated text-Welcome-->
			<h2><div class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>W</div>		<div>e</div>		<div>l</div>		<div>c</div>		<div>o</div>		<div>m</div>		<div>e</div></div>
</div>
            </h2>
            <img src="super2.jpg" alt="Flower" width="386" height="243" />
		</header>
		<p>
        <br><br>
        Search Your Deal Here</p>
	</section>
    
<!--Content area-->
	<div id="content">
    <!--Main Content of the home page-->
		<div id="mainContent">
			<section>
					<header>
						You have logged in as
                        <a href="#"><?php echo $row1['F_Name']; ?></a>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="Login.html" class="myButton" >Log Out</a>
                        
					</header><br>
                    <!--Table for item list-->

<table class="ItemList">
	<thead>
    	<tr>
     		<th ><Font color="#669900" size=5 >Item</font></th>
      		<th ><Font color="#669900" size=5 >Price(Rs.)(1 unit)</font></th>
        </tr>
     </thead>           
        
    <tbody>
		<?php
		if($reg){
			while($item = mysql_fetch_assoc($records))
			{
				echo"<form action=TraderAcc.php method=post>";
				echo "<tr>";
				echo "<td>" . " </td>";
				echo "<td>" . $item['Item_Name'] . " </td>";
				echo "<td>" . " </td>";
				echo "<td>" . "<input type=text name=Price value=" . $item['Price'] . " </td>";
				echo "<td>" . "<input type=hidden name=hidden value=" . $item['Item_ID'] . " </td>";
				echo "<br>";
				echo "<td>" . "<input type=submit name=update value=update " . " </td>";
				echo "</form>";
			}
			
		}
		
		?>

    </tbody>
</table> 
                    
			</section>
		</div>
   	  <aside>
			<section>
				<header>
					<!--<h3><a href="#" class="myButton">Save Changes</a></h3>-->
                    <div class="element"></div>
				</header>
                 	 
			</section>
       	</aside>
	</div>
   <!--Footer of the page-->    
	<footer>
		<div></div>
	</footer>
	
</body>
</html>
