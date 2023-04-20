<?php
	include ("class/clsProduct.php");
	$p = new product();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div class="box">
<?php
	$p->showProducts();
?>
</div>
</body>
</html>