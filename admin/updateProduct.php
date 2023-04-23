<?php 
	include ("../class/clsProduct.php");
	$p = new product();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles2.css" rel="stylesheet">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="../js/html5shiv.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<div class="upProduct-box">
    <h3 class='modal-title text-center'>CẬP NHẬT SẢN PHẨM</h3>
      <form enctype='multipart/form-data' method='post'>
        <div class='form-group row'>
          <label for='txt_Up_DM' class='col-sm-2 col-form-label'>Danh mục</label>
          <div class='col-sm-10'>
            <?php
                $p->showOptionsInSelect('SELECT * FROM danhMuc', 'txt_Up_DM');
            ?>
          </div>
        </div>
        <div class='form-group row'>
          <label for='txt_Up_TG' class='col-sm-2 col-form-label'>Tác giả</label>
          <div class='col-sm-10'>
            <?php
                $p->showOptionsInSelect('SELECT * FROM tacGia', 'txt_Up_TG');
            ?>
          </div>
        </div>
	<?php
		$product_id = $_REQUEST["product_id"];
		$sql = "SELECT * FROM  sanPham WHERE maSP = {$product_id}";
		
    	$p->showUpProduct($sql);
	?>
    <div class='form-group row'>
      <div class='col-sm-12 text-center'>
        <input type='submit' name='btnSP' id='btnUpdateSP' class='btn btn-primary' value='Cập nhật sản phẩm'>
      </div>
    </div>
  </form>
</div>

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
</body>
</html>