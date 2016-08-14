<!DOCTYPE html>
<html>
<head>
    <style>
     body {
    background-color: lightcyan;
        }
input[type=text], select {
    width: 150px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 300px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    
h4 {
           font-family: Agency FB;
    text-align: left;
           
   }  
p {
           font-family: Trajan Pro;
    text-align: left;
 
   }
    </style>
    </head>
<body>
<form action="busde1.php" method="POST">
<pre>
<?php
$se=$_GET["id"];
?>
<h4> Bus Seats of   <?php echo $se ?></h4>

<img src="se.jpg" height="65" width="65">	<img src="se.jpg" height="65" width="65">	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>
   (2)		  (3)		  (8)		  (9)		  (14)		  (15)
<img src="se.jpg" height="65" width="65">	<img src="se.jpg" height="65" width="65">	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	
   (1)		  (4)		  (7)		  (10)		  (13)		  (16)
		
		<img src="se.jpg" height="65" width="65">	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	<img src="se.jpg" height="65" width="65"><td>	
  		  (5)		  (6)		  (11)		  (12)		  (17)
<P>
Name			             	               <input type="text" name="name"/>
What no.of sheet do you like	       <input type="text" name="she"/>
 
		<input type="submit" value="Make Reservation"/></P>
</form>
</body>
</html>