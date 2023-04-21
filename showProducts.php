<?php
	include ("class/clsProduct.php");
	$p = new product();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show sản phẩm</title>
</head>

<body>
<div class="box">
<?php
	$p->showProducts();
?>
</div>
</body>
</html>