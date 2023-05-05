<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include ("class/clsgiohang.php");
	include ("class/clsLogin.php");
	$login = new login();
	$cart = new giohang();
	session_start();
	
	if(isset($_SESSION["id"]) && isset($_SESSION["user"]) && isset($_SESSION["pass"]) && isset($_SESSION["ten"]) && isset($_SESSION["quyen"]))
	{
		$login->confirmLogin($_SESSION["id"], $_SESSION["user"], $_SESSION["pass"], $_SESSION["ten"], $_SESSION["quyen"]);
	}
	else
	{
		header('location: login.php');	
	}
	
	$maSP = $_REQUEST['product_id'];
	$maTK = $_SESSION["id"];
	if(isset($_REQUEST['qty']))
	{
		$soLuong = $_REQUEST['qty'];
	}
	else
	{
		$soLuong = 1;
	}
	
	$conn=$cart->addtocart();
	$sql="select * from giohang where maSP='{$maSP}' and maKH = {$maTK}";
	$result=mysql_query($sql,$conn);
	$i=mysql_num_rows($result);
	if($i>0)
	{
	  $row=mysql_fetch_array($result);
	  $sqlUpCart="update giohang set soluong = soluong + {$soLuong} where maSP='{$maSP}'";
	  if(mysql_query($sqlUpCart,$conn))
	  {
		  echo " <script>alert('Cập nhật giỏ hàng thành công')</script>;";
	  }
	  else
	  {
		  echo " <script>alert('Cập nhật giỏ hàng thất bại')</script>;";
	  }
	}
	else
	{
	  $sqlAddCart="insert into giohang(maKH,maSP,soluong) values ('{$maTK}','{$maSP}','{$soLuong}')";
	  if(mysql_query($sqlAddCart,$conn))
	  {
		  echo " <script>alert('Thêm giỏ hàng thành công')</script>;";
	  }
	  else
	  {
		  echo " <script>alert('Thêm giỏ hàng thất bại')</script>;";
	  }
	  
	}
	echo "<script> window.history.back();</script>";
?>
</body>
</html>
