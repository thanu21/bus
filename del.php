<html>
<body>
<?php
$id=$_POST['id'];
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bus", $con);
$sql="delete from infor  where bnum='$id'"or die("Record not updated");
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
include("del1.html");
mysql_close($con)
?>
</body>
</html>