<?php 
$error=0;
session_start();
$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
die("Server could not Connect");
if(isset($_POST['btn']))
{
$id=$_POST['id'];
$pwd=$_POST['pwd'];
$s="select * from login where loginID='".$id."'";
$rs=mysqli_query($con,$s);
$rows=mysqli_fetch_assoc($rs);
if($rows["password"]==$pwd)
{
header("location:clpage1.php");
}
else
$error=1;
}
?>
<html>
<body align="center" bgcolor="#98AFC7">
<div style="border:1px solid brown;width:50%;position:relative;left:20%;top:10%;background-color:#F8F8FF">
<h2>Please Login First</h2>
<form action="<?php $_PHP_SELF ?>" method="post">
Enter login Id:-  &nbsp;&nbsp;<input type="text" placeholder="Enter login Id" name="id" required><br><br>
Enter Password:- <input type="password" placeholder="Enter Password" name="pwd" required><br><br>

<?php
if($error==1)
echo "<font color='red'>login ID or Pasword are Incorrect </font>";
?><br>
<input type="submit" name="btn" value="LogIn">
</div>

</body>
</html>