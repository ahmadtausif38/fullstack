<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
a{
text-decoration:none;

}
div{position:absolute;top:100px;border:2px black solid;
height:200px;width:150px;padding:10px;background-color:pink;}
div a:hover{
background-color:brown;
padding:10px;
color:white;
text-decoration:none;
}

</style>
</head>
<body bgcolor="#dcaddd">
<p style="font-size:20px;padding:15px;" class="bg-primary"><i>Goolge Fashion</i></p>
<h2 style="text-align:center;color:blue;">Admin Panel<br><small>Update Details</small></h2>

<a href="index.php" style="position:absolute;right:15px;top:15px;color:white;font-size:20px;">Home</a>

<form action="page3.php" method="post">
<p style="text-align:right;position:relative;right:50px;">
P-Id : <input type="text" name="pid" placeholder="Enter Prodcut Id" required><br><br>
Price : <input type="text" name="price" placeholder="Enter Price" required><br><br>
  <input type="submit" value="Update Product">
</p>
</form>

<div>
<a href="clpage1.php">Add product</a><br><br>
<a href="clpage2.php">View product</a><br><br>
<a href="clpage3.php">Edit product</a><br><br>
<a href="clpage4.php">Remove product</a><br><br>
</div>
</body>
</html>