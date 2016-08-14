<html>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bus", $con);
$sql="INSERT INTO infor(name,bnum,sou,dis,ditime,artime)
VALUES
('$_POST[name]','$_POST[id]','$_POST[so]','$_POST[de]','$_POST[det]','$_POST[art]')"or die("Record not insert");
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
include("rec1.html");
mysql_close($con)
?>
</body>
</html>