<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
 <link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style type="text/css">
p a{
position:absolute;
right:10px;
top:8px;
font-size:20px;
color:white;
}

</style>
</head>
<body>

<div class="container-fluid">
<div class="row">
<p style="font-size:20px;padding:15px;" class="bg-primary"><i>Goolge Fashion</i><a href="login.php">Admin</a>
<a href="index.php" style="right:100px;">Home</a>
</p>
<div>
<a href="index.php?data=mens">Mens</a>
<a href="index.php?data=womens">Womens</a>
<a href="index.php?data=kids">Kids</a>
</div><br>
<?php
if(isset($_REQUEST['data']))
{
$page=$_REQUEST['data'].".php";
include($page);
}
else
{
include('content.php');
}
?>
</div>
</div>
</div>

</body>
</html>