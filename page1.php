<?php
$pi=$_POST["pid"];
$pn=$_POST["pname"];
$pr=$_POST["price"];
$b=$_POST["brand"];
$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
die("server could not connect");
$sql="insert into product values('".$pi."','".$pn."','".$pr."','".$b."')";
$check=mysqli_query($con,$sql);
if($check!=0)
echo"Product Added Successfully";
else
echo"Unable to add";
?>