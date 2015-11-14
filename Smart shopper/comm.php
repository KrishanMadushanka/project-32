<?php
  
  $hostname="localhost";//assigning server name to variable
  $username="root";//assigning username to database to variable
  $password="";//assigning password to database to variable
  $db="smart_shopper";//assigning database name to variable

  $conn=mysqli_connect($hostname,$username,$password,$db);//connecting to database
  if(!$conn){
    echo "aio....";
    die("Error");//if unable to connect to database die, print "Error"
  }

  $email=$_POST['email'];
  $comment=$_POST['comment'];
  
  
  $query="INSERT INTO `smart_shopper`.`comments` (`Time`,`email`,";
  $query.="  `comment`) VALUES ";
  $query.="(CURRENT_TIMESTAMP,'{$email}', '{$comment}')";
  //inserting data in to table user
  
 
  $result=mysqli_query($conn,$query);//return true is query is exected successfully

  if(!$result){
    echo "Failed to insert";//if $result2 or $result returns false print failed to insert
  }else{
    echo "string";
    header('location:Home.php');//else direct to related page
  }
 ?>