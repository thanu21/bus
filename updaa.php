<html>
<body>
<?php
$name=$_POST['name'];
$id=$_POST['id'];
$so=$_POST['so'];
$de=$_POST['de'];
$det=$_POST['det'];
$art=$_POST['art'];
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bus", $con);
$sql="update infor set name='$name',bnum='$id',sou='$so',dis='$de',ditime='$det',artime='$art' where bnum='$id'"or die("Record not updated");
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
include("upda1.html");
mysql_close($con)
?>
</body>
</html>