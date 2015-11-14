
<!doctype html>
<html lang="en">
<!--Head section>-->
<head>
	<title>Smart Shopper</title>
    <!--Linking the css file to the html file-->
    
	<link rel="stylesheet" href="Home.css" type="text/css" media="screen" />
	<script src="Home.js" type="text/javascript"></script>
  <script language="javascript" type="text/javascript">
<!--
function popitup(url) {
  newwindow=window.open(url,'name','height=200,width=150');
  if (window.focus) {newwindow.focus()}
  return false;
}

// -->
</script>



    
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
        <!--Displayed page when home  tab is selected-->
			<li class="selected"><a href="Home.php">Home</a></li>
            <!--Other tab links-->
			<li><a href="about us.html">About us</a></li>
			<li><a href="Registration.html">Registration</a></li>
			<li><a href="Login.html">Login</a></li>
			<li><a href="Comment.html">Comment</a></li>
		</ul>
	</nav>
<!--Intro section-->
	<section id="intro" name="intro">
		<header>
        <!--Animated text-Home-->
			<h2><div class="cssload-preloader">
	<div class="cssload-preloader-box">		<div>H</div>		<div>o</div>		<div>m</div>		<div>e</div></div>
</div>
</h2>
<!--Image displayed in the intro section-->
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
						Expected Distance</b>&thinsp;
                        <!--Drop down list-->
                        <select>
						<option value="">0.5</option>
						<option value="">1</option>
						<option value="">1.5</option>
						<option value="">2</option>

						</select>
                        <!--View Bill Button
                        <a href="#" class="myButton" id="B1">View Bill</a>-->
					</header><br>
                    
 <!--Table displayed for item list-->  
  <div id="items">  
  <form name="Itemlist" id ="reg-form" action="items.php" onSubmit="return confirmForm(this)" method="post">
    <!--<p><a href="popupex.html" onclick="return popitup('popupex.html')"
  ><input type="submit" value="Search" name="search"></a>--><p> <input type="submit" value="Search" name="search"></p>
<ul>
            <li>
                <a href="#" onclick="swap('sectionOneLinks');return false;">Rice</a>
                <ul id="sectionOneLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX class="EnableTB" NAME="ITEM[]" VALUE="I001">Ponni rice</a></li>
                          
                          <li><a href="#"><INPUT TYPE=CHECKBOX class="EnableTB" NAME="ITEM[]" VALUE="I002">White raw rice</a></li>
                          
                          <li><a href="#"><INPUT TYPE=CHECKBOX class="EnableTB" NAME="ITEM[]" VALUE="I003">Red raw rice</a></li>
                          
                          <li><a href="#"><INPUT TYPE=CHECKBOX class="EnableTB" NAME="ITEM[]" VALUE="I004">Samba rice steamed</a></li>
                          
                          <li><a href="#"><INPUT TYPE=CHECKBOX class="EnableTB" NAME="ITEM[]" VALUE="I005">Samba Kekulu white</a></li>
                          
                          <li><a href="#"><INPUT TYPE=CHECKBOX class="EnableTB" NAME="ITEM[]" VALUE="I006">Nadu steamed</a></li>
                          
                          <li><a href="#"><INPUT TYPE=CHECKBOX class="EnableTB" NAME="ITEM[]" VALUE="I007">Supiri Keeri Samba</a></li>
                          
                          
                        </td>
                        <td>

                          
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                          
                         
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionTwoLinks');return false;">Vegetables</a>
                <ul id="sectionTwoLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I008">Tomato</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I009">Carrot</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I010">B.onion</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I011">Potatoes</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I012">Cabbage</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I013">Green beans</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I014">Kankun</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I015">Brinjal</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I016">Mushroom 200g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I017">Pumpkin</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionThreeLinks');return false;">Oil</a>
                <ul id="sectionThreeLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I018">Vegetable Oil 1l</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I019">Coconut Oil</a></li>
                        </td>
                          
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10">l</li>
                          
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionFourLinks');return false;">Noodles</a>
                <ul id="sectionFourLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I020">Prima Kottu mee 85g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I021">Maggi 85g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I022">Harischandra Plane Noodles</a></li>
                          
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionFiveLinks');return false;">Bread and Bakery</a>
                <ul id="sectionFiveLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I023">Prima Sandwich Bread</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I024">Finagle Sandwich Bread</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I025">Prima Crust Top Bread</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I026">Finagle Kurakkan bread</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I027">Finagle Kurakkan diet bread</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I028">Tiera Layer Cake Vanilla</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I029">Tiera Layer Cake Chocolate</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I030">Little lion choco Role</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"  VALUE="" SIZE="10"></li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionSixLinks');return false;">Sugar</a>
                <ul id="sectionSixLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I031">Brown Sugar</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]" VALUE="I032">White Sugar</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10">kg</li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionSevenLinks');return false;">Milk Powder</a>
                <ul id="sectionSevenLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I033">Anchor 400g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I034">Ratti 400g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I035">Highland 400g</a></li>    
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I036">Milo 400g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I037">Nespray 400g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I038">Maliban 400g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I039">Nestomolt 400g</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionEightLinks');return false;">Soyameat</a>
                <ul id="sectionEightLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I040">Lankasoy Chicken</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I041">Lankasoy Regular</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I042">Lankasoy Curry</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I043">Raigam Chicken</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionNineLinks');return false;">Soft Drinks</a>
                <ul id="sectionNineLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I044">Coca Cola 500ml</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I045">sprite 2l</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I046">Coco Cola 2l</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>

            <li>
                <a href="#" onclick="swap('sectionTenLinks');return false;">Biscuits</a>
                <ul id="sectionTenLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I047">Munchee Super Creamcraker 190 g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I048">Chocolate biscuit</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I049">Maree</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I050">Nice</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I051">Ginger biscuit</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I052">Munchee Super Creamcracker 320g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I053">Maliban Smart Cream craker 190g</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionElevenLinks');return false;">Yoghurt</a>
                <ul id="sectionElevenLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I054">Kotmale</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I055">Highland Plane</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I056">Newdale</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I057">CIC</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I058">Ambewela</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionElevenLinks');return false;">Soap and Washing Powder</a>
                <ul id="sectionElevenLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I059">Sunlight 90g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I060">Wonderlight 90g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I061">Lifebuoy 90g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I062">Detol 90g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I063">Vim dishwash bar 200g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I064">Sunlight Washing Powder 1kg</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I065">Diva 1kg</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I066">Surfexel washing powder 1kg</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]"VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionTwelveLinks');return false;">Spices and Salt</a>
                <ul id="sectionTwelveLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I067">Chillie Powder 100g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I068">Curry Powder 100g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I069">Turmeric Powder 100g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I070">Salt Powder 400g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I071">Salt 500g</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>

            <li>
                <a href="#" onclick="swap('sectionThirteenLinks');return false;">Spices and Salt</a>
                <ul id="sectionThirteenLinks" style="display: none;">
                <table>
                  <tr>
                        <td>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I072">Kumbalawa</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I073">Curry Powder 100g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I074">Turmeric Powder 100g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I075">Salt Powder 400g</a></li>
                          <li><a href="#"><INPUT TYPE=CHECKBOX NAME="ITEM[]"VALUE="I076">Salt 500g</a></li></td>
                        <td>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          <li><INPUT TYPE="text" NAME="QTY[]" VALUE="" SIZE="10"></li>
                          
                          
                        </td>
                  </tr>
                </table>
                </ul>
            </li>

                          


            

        </ul>

</div>
                    
			</section>
		</div>
        

		<aside><!--This side bar includes special offer adds and Comments added by users-->
			<section>
				<header>
					<!--<h3>Special Offers</h3>
                    <div class="element"><img src="ad3.jpg" alt="Add" width="386" height="243" /></div>-->
				</header>
                 	 
			</section>
			<section>
				<header>
					<h3><font color="blue" face="agency fb" size="6">Your Comments</h3></font>
          <img src="comm.jpg" alt="Add" />
          
          <div>
<?php

  $hostname="localhost";//assigning server name to variable
  $username="root";//assigning username to database to variable
  $password="";//assigning password to database to variable
  $db="smart_shopper";//assigning database name to variable

  $conn=mysqli_connect($hostname,$username,$password,$db);//connecting to database
  if(!$conn){
    die("Error");//if unable to connect to database die, print "Error"
  }
  $query = "SELECT comment,Time FROM comments order by Time DESC LIMIT 10";
  $result = mysqli_query($conn, $query );
  $row = mysqli_fetch_array($result,MYSQL_ASSOC);

  if($result -> num_rows >0){
    while($row = $result-> fetch_assoc()){
      //echo htmlspecialchars($row['comment']). " ";
      echo "<h1>";
      echo $row["Time"];
      echo "</h1>";
      //echo "<br>";
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      echo '<font color="#330099" face="Calibri" size="3">';
      echo $row["comment"];
      echo "</font>";
      echo "<br>";

  }
  }
?>
</div>
  
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