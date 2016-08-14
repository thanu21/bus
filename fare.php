<html>
<body background="5.jpg">
<center><h2>Fare For Travaling</h2>
<table border="5" width="530" style="text-align:left">
<tr><?php
$bn=$_POST["bid"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("bus");
$res=mysql_query("select *from far where bid='$bn'");
$row=mysql_fetch_array($res);
?>
<th width="253">Bus ID
<th width="40">:
<th width="253"><?php echo $row[0]; ?><tr>
<th>Cost
<th>:
<th><?php echo $row[1]; ?><tr>
</center>
</table>
</body>
</html>