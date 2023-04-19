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
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="600" border="1" align="center" cellspacing="0">
  <tbody>
    <tr>
      <td height="30" colspan="2" align="center"><strong>THÊM SẢN PHẨM</strong></td>
      </tr>
    <tr>
      <td width="229" height="35" align="right">Công ty</td>
      <td width="361" align="left">
		<?php 
            $p->loadThongTin("SELECT * from congty");
        ?>
      </td>
    </tr>
    <tr>
      <td height="36" align="right">Tên sản phẩm</td>
      <td align="left"><label for="txttensp"></label>
        <input name="txttensp" type="text" id="txttensp" size="50"></td>
    </tr>
    <tr>
      <td height="36" align="right">Giá</td>
      <td align="left"><label for="txtgia"></label>
        <input name="txtgia" type="text" id="txtgia" size="50"></td>
    </tr>
    <tr>
      <td height="48" align="right">Mô tả</td>
      <td align="left"><textarea name="txtmota" cols="50" rows="8" id="txtmota"></textarea></td>
    </tr>
    <tr>
      <td height="45" align="right">Hình ảnh</td>
      <td align="left"><input type="file" name="txthinhanh" id="txthinhanh"></td>
    </tr>
    <tr>
      <td height="36" colspan="2" align="center"><strong>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Thêm sản phẩm">
      </strong></td>
      </tr>
  </tbody>
  <?php
  	$btnSubmit = $_REQUEST["btnSubmit"];
	switch($btnSubmit)
	{
		case "Thêm sản phẩm":
		{
			$tensp = $_REQUEST["txttensp"];
			$gia = $_REQUEST["txtgia"];
			$mota = $_REQUEST["txtmota"];
			$imgName = time() .'_'. $_FILES["txthinhanh"]["name"];
			$tmpName = $_FILES["txthinhanh"]["tmp_name"];
			$idCT = $_REQUEST["txtcongty"];
			
			if($p->uploadHinhAnh($imgName, '../img', $tmpName) == 1)
			{
				$p->themsuaxoa("INSERT INTO sanpham (`tensp`, `gia`, `mota`, `hinhanh`, `id_congty`) 
				VALUES (N'{$tensp}', {$gia}, N'{$mota}', N'{$imgName}', {$idCT});");
			}
			else
			{
				echo "Tải lên hình ảnh thất bại!";
			}
			break;	
		}	
	}
  ?>
</table>
</form>
<?php
	$p->showProducts();
?>
</div>
</body>
</html>