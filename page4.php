<?php
$pi=$_POST["pid"];
$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
die("server could not connect");
$sql="delete from product where pid='".$pi."'";
$check=mysqli_query($con,$sql);
if($check!=0)
echo"Product Removed";
else
echo "Unable to remove";
?>