<?php
  session_start();
?><?php
$servername = "localhost";
$username = "theabzo4_root";
$password = "!Abhi1234";
$dbname = "theabzo4_tae";
$ielts=$_POST['ielts'];
$toefl=$_POST['toefl'];
$name = array();
$_SESSION['uniname'] = array();
$db = mysql_connect($servername, $username,$password) or 
die("Connection failed: ");
mysql_select_db($dbname) or
die("Database name not available !!");
$ch=$_POST['tickettype'];
switch($ch)
{
case "Yes":
$query = mysql_query("SELECT name FROM university WHERE (country = '" . $_POST['country'] . "') and (ielts <= '" . $ielts . "' or toefl <= '" . $toefl . "')",$db);
$rowcount = mysql_num_rows($query);
$check_num_rows=mysql_num_rows($query);
while ($row = mysql_fetch_assoc($query))
{
$name[]=$row['name'];
}
if ($rowcount >=1) 
{
foreach($name as $us)
{
$_SESSION['uniname'][]=$us; 
}
header("Location: searchresults.php");
}
else
{
$_SESSION['uniname'] = "Sorry!! University not found";
header("Location: searchresults2.php");
}
break;
case "No":
$query = mysql_query("SELECT name FROM university WHERE (country = '" . $_POST['country'] . "')",$db);
$rowcount = mysql_num_rows($query);
$check_num_rows=mysql_num_rows($query);
while ($row = mysql_fetch_assoc($query))
{
$name[]=$row['name'];
}
if ($rowcount >=1) 
{
foreach($name as $us)
{
$_SESSION['uniname'][]=$us; 
}
header("Location: searchresults.php");
}
else
{
$_SESSION['uniname'] = "Sorry!! University not found";
header("Location: searchresults.php");
}
break;
default:
        echo "Error!";
}?>
