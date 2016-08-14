<?php
$user=$_POST["user"];
$pw=$_POST["pass"];
if(($user=="thanu") && ($pw=="123456"))
{
include("admindis.html");
}
else
{
echo "<script>javascript: alert('Password or UserName is Wrong')</script>";
}
?>