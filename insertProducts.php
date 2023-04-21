<?php
	include ("class/clsProduct.php");
	$p = new product();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm sản phẩm</title>
</head>

<body>
<form enctype="multipart/form-data" method="post">
  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr align="center">
        <td height="38" colspan="2"><strong>THÊM SẢN PHẨM</strong></td>
      </tr>
      <tr>
        <td width="302" height="42" align="center">Danh mục</td>
        <td width="492">
        <?php
        	$p->showOptionsInSelect("SELECT * FROM danhMuc", 'txtDM');
		?>
        </td>
      </tr>
      <tr>
        <td height="48" align="center">Tác giả</td>
        <td>
        <?php
        	$p->showOptionsInSelect("SELECT * FROM tacGia", 'txtTG');
		?>
        </td>
      </tr>
      <tr>
        <td height="41" align="center">Tên sản phẩm</td>
        <td><input name="txtTenSP" type="text" id="txtTenSP" size="50"></td>
      </tr>
      <tr>
        <td height="48" align="center">Giá</td>
        <td><input name="txtGia" type="number" id="txtGia" value="0" min="0"></td>
      </tr>
      <tr>
        <td height="46" align="center">Giảm giá</td>
        <td><input name="txtGiamGia" type="number" id="txtGiamGia" value="0" min="0"></td>
      </tr>
      <tr>
        <td height="71" align="center">Mô tả</td>
        <td><textarea name="txtMT" cols="50" rows="10" id="txtMT"></textarea></td>
      </tr>
      <tr>
        <td height="45" align="center">Số lượng</td>
        <td><input type="number" name="txtSL" id="txtSL" min="0"></td>
      </tr>
      <tr>
        <td height="56" align="center">Hình ảnh</td>
        <td><input type="file" name="txtAnh" id="txtAnh"></td>
      </tr>
      <tr align="center">
        <td height="51" colspan="2"><input type="submit" name="btnThemSP" id="btnThemSP" value="Thêm sản phẩm"></td>
      </tr>
    </tbody>
  </table>
  <?php
	$btn = $_REQUEST["btnThemSP"];
	switch ($btn)
	{
		case "Thêm sản phẩm":
		{
			$danhMuc = $_REQUEST["txtDM"];
			$tacGia = $_REQUEST["txtTG"];
			$tenSP = $_REQUEST["txtTenSP"];
			$gia = $_REQUEST["txtGia"];
			$giamGia = $_REQUEST["txtGiamGia"];
			$mota = $_REQUEST["txtMT"];
			$soLuong = $_REQUEST["txtSL"];
			$folder = './images/book/';
			$tenAnh = time() . '-' . $_FILES["txtAnh"]["name"];
			$tmpName = $_FILES["txtAnh"]["tmp_name"];
			$type = $_FILES["txtAnh"]["type"];
			
			if($p->uploadImg($tmpName, $folder, $tenAnh, $type) == 1)
			{
				$maDanhMuc = $p->countRowTable("danhMucSP") + 1;
				$maSanPham = $p->countRowTable("sanPham") + 1;
				
				$sql1 = "INSERT INTO `sanPham`
					(`tenSP`, `moTa`, `gia`, `giamGia`, `soLuong`, `daBan`, `trangThaiSP`, `noiBat`,  `maTacGia`, `hinhAnh`, `danhGia`) 
					 values (N'{$tenSP}', N'{$mota}', {$gia}, {$giamGia}, {$soLuong}, 0, 1, 0, {$tacGia}, '{$tenAnh}', 0)";
				$sql2 = "INSERT INTO `danhMucSP` VALUES ({$maDanhMuc}, {$maSanPham}, {$danhMuc})";
				if($p->themSuaXoaSP($sql1) == 1) 
				{
					if($p->themSuaXoaSP($sql2) == 1)
					{
						echo "<script>alert('Thêm sản phẩm thành công')</script>";	
					}
					else
					{
						echo "<script>alert('Thêm sản phẩm vào danh mục thất bại!')</script>";	
					}
				}
				else
				{
					echo "<script>alert('Lỗi, thêm sản phẩm thất bại!')</script>";	
				}
			}
			else
			{
				echo "<script>alert('Lỗi, tải hình ảnh lên thất bại!')</script>";	
			}
			
			break;	
		}	
	}
  ?>
</form>
</body>
</html>