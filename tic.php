<html>
<body background="5.jpg">
<center><h2>Ticket</h2>
<table border="5" width="530" style="text-align:left">
<tr><?php
$bn=$_GET["bname"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("bus");
$res=mysql_query("select *from data where name='$bn'");
$row=mysql_fetch_array($res);
?>
<th width="253">Name
<th width="40">:
<th width="253"><?php echo $row[0]; ?><tr>
<th>Sex
<th>:
<th><?php echo $row[1]; ?><tr>
<th>mail
<th>:
<th><?php echo $row[2]; ?><tr>
<th>Phone
<th>:
<th><?php echo $row[3]; ?><tr>
<th>Travaling Fr.
<th>:
<th><?php echo $row[4]; ?><tr>
<th>Arrival
<th>:
<th><?php echo $row[5]; ?><tr>
<th>Date
<th>:
<th><?php echo $row[6]; ?><tr>
<?php
$id=$_GET["id"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("bus");
$ree=mysql_query("select *from far where bid='$id'");
$co=mysql_fetch_array($ree);
?>
<th>Cost
<th>:
<th><?php echo $co[1]; ?><tr>
<?php
$bn=$_GET["bname"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("bus");
$re=mysql_query("select *from she where name='$bn'");
$ro=mysql_fetch_array($re);
?>
<th>Sheet No.
<th>:
<th><?php echo $ro[1]; ?><tr>
</center>
</table>
</body>
</html>