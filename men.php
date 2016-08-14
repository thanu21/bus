<html>
<body background="5.jpg">
<center><h2>Bus Details</h2>
<table border="5" width="530" style="text-align:left">
<tr><?php
$id=$_GET["id"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("bus");
$res=mysql_query("select *from infor where bnum='$id'");
$row=mysql_fetch_array($res);
?>
<th width="253">Bus Name
<th width="40">:
<th width="253"><?php echo $row[0]; ?><tr>
<th>Bus ID
<th>:
<th><?php echo $row[1]; ?><tr>
<th>Source
<th>:
<th><?php echo $row[2]; ?><tr>
<th>Destination
<th>:
<th><?php echo $row[3]; ?><tr>
<th>DepTime
<th>:
<th><?php echo $row[4]; ?><tr>
<th>ArrTime
<th>:
<th><?php echo $row[5]; ?><tr>
</center>
</table>

</body>
</html>