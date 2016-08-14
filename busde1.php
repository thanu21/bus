<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bus", $con);
$sql="INSERT INTO she(name,she)
VALUES
('$_POST[name]','$_POST[she]')"or die("Record not insert");
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
include("th.html");
mysql_close($con)
?>

