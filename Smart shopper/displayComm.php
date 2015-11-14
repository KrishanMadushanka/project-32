<?

$con = mysql_connect("localhost","inmoti6_myuser","mypassword");
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("smart_shopper", $con);

$article_id = $_GET['ID'];

if( ! is_numeric($article_id) )
  die('invalid article id');

$query = "SELECT * FROM `comments` WHERE `ID` =1 LIMIT 0 , 30";

$comments = mysql_query($query);

echo "<h1>User Comments</h1>";

while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
{
  $email = $row['email'];
  $comment = $row['comment'];
  

  $email = htmlspecialchars($row['email'],ENT_QUOTES);
  $comment = htmlspecialchars($row['comment'],ENT_QUOTES);
  
  echo "  <div style='margin:30px 0px;'>
      Email: $email<br />
      Comment: $comment<br />
    </div>
  ";
}

mysql_close($con);

?>