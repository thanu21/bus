<html>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bus", $con);
$sql="INSERT INTO data(name,sex,mail,phone,tfrom,tto,date)
VALUES
('$_POST[name]','$_POST[sex]','$_POST[mail]','$_POST[phone]','$_POST[from]','$_POST[to]','$_POST[date]')"or die("Record not insert");
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
include("busde.html");
mysql_close($con)
?>
</body>
</html>