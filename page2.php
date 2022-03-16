<?php
$pi=$_POST["pid"];

$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
die("server could not connect");
$sql="select * from product where pid='".$pi."'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($rs);

echo "<div style='border:2px solid black;background-color:pink;position:absolute;left:40%;padding:15px;'>";
echo"<h2 style='color:blue;'>Product Details</h2><br>";
echo"<b>Product Id:</b>".$row["pid"]."<br><br>";
echo"<b>Product name:</b> ".$row["pname"]."<br><br>";
echo"<b>Price: </b>".$row["price"]."<br><br>";
echo"<b>Brand: </b>".$row["brand"]."<br><br>";
echo"</div>";
?>