<?php
$dbhost = 'localhost:3036';
$dbuser = 'admin';
$dbpass = '0192023a7bbd73250516f069df18b500';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
 die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($conn);
?>