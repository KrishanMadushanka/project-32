<?
   $hostname="localhost";//assigning server name to variable
   $username="root";//assigning username to database to variable
   $password="";//assigning password to database to variable
   $db="smartshopper";//assigning database name to variable

   $conn=mysqli_connect($hostname,$username,$password,$db);//connecting to database
   if(!$conn){
      die("Error");//if unable to connect to database die, print "Error"
   }

  
  $email = $_POST['email'];
  $comments = $_POST['comment'];

  
  $email = mysql_real_escape_string($users_email);
  
  $comments = mysql_real_escape_string($users_comment);

  $articleid = $_GET['id'];
  if( ! is_numeric($articleid) )
    die('invalid article id');

  $query = "INSERT INTO `smartshopper`.`comments` (`id`,`email`,";
  $query.= "`comments`,`timestamp`, `articleid`) VALUES (NULL,";
  $query.= "'$email', '$comments',CURRENT_TIMESTAMP,";
  $query.= "'$articleid');";

  $result=mysql_query($query);
  if(!$result){
      echo "Failed to insert";//if $result2 or $result returns false print failed to insert
   }else{
      echo "string";
      header('location:Login.html');//else direct to related page
   }
?>