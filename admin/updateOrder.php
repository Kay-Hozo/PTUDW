<?php 
include("../class/clsLogin.php");
$login = new login();
session_start();

if(isset($_SESSION["id"]) && isset($_SESSION["user"]) && isset($_SESSION["pass"]) && isset($_SESSION["ten"]) && isset($_SESSION["quyen"]))
{
	if($_SESSION["quyen"] == 1)
	{
		$login->confirmLogin($_SESSION["id"], $_SESSION["user"], $_SESSION["pass"], $_SESSION["ten"], $_SESSION["quyen"]);	
	}
	else
	{
		echo "<script>alert('Bạn không có quyền truy cập vào trang!')</script>";
		header('location: login.php');	
	}
}
else
{
	header('location: login.php');	
}
?>
<?php 
	include ("../class/clsProduct.php");
	$p = new product();
	$product_id = $_REQUEST['product_id'];
	$author_id = $_REQUEST['author_id'];
	$category_id = $_REQUEST['category_id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cập nhật sản phẩm</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles2.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="../js/html5shiv.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<div class="content">
    <div class="bg-dark">
    </div>
    <div class="upProduct-box">
        <h3 class='text-center heading-form'>CẬP NHẬT SẢN PHẨM</h3>
        <form enctype='multipart/form-data' method='post'>
            <div class='form-group row'>
              <label for='txt_Up_DM' class='col-sm-2 col-form-label'>Danh mục</label>
              <div class='col-sm-10'>
                <?php
                    $p->showOptionsInSelect('SELECT * FROM danhMuc', 'txt_Up_DM', $category_id);
                ?>
              </div>
            </div>
            <div class='form-group row'>
              <label for='txt_Up_TG' class='col-sm-2 col-form-label'>Tác giả</label>
              <div class='col-sm-10'>
                <?php
                    $p->showOptionsInSelect('SELECT * FROM tacGia', 'txt_Up_TG', $author_id);
                ?>
              </div>
            </div>
        <?php
            $sql_showProduct = "SELECT * FROM  sanPham WHERE maSP = {$product_id}";            
            $p->showUpProduct($sql_showProduct);
			
			switch ($_REQUEST['btnSP'])
			{
				case "Cập nhật sản phẩm" :
				{
					$danhMuc = $_REQUEST["txt_Up_DM"];
					$tacGia = $_REQUEST["txt_Up_TG"];
					$tenSP = $_REQUEST["txt_Up_TenSP"];
					$gia = $_REQUEST["txt_Up_Gia"];
					$giamGia = $_REQUEST["txt_Up_GiamGia"];
					$mota = $_REQUEST["txt_Up_MT"];
					$soLuong = $_REQUEST["txt_Up_SL"];
					$thoiGian = date('Y-m-d H:i:s');	
					$sql_upProduct  = "";
					
					if($_FILES["txt_Up_Anh"]["name"] == "")
					{
						$sql_upProduct = 
						"
						UPDATE sanPham sp
						LEFT JOIN danhMucSP dm ON sp.maSP = dm.maSanPham
						SET  sp.`tenSP` = N'{$tenSP}', 
							sp.`moTa` = N'{$mota}', 
							sp.`gia` = {$gia}, 
							sp.`giamGia` = {$giamGia}, 
							sp.`soLuong` = {$soLuong}, 
							sp.`thoiGianSua` = '{$thoiGian}',  
							sp.`maTacGia` = {$tacGia}, 
							dm.`maDanhMuc` = {$danhMuc}
						WHERE sp.maSP = {$product_id}
						";
					}
					else
					{
						$folder = '../images/book/';
						$tenAnh = time() . '-' . $_FILES["txt_Up_Anh"]["name"];
						$tmpName = $_FILES["txt_Up_Anh"]["tmp_name"];
						$type = $_FILES["txt_Up_Anh"]["type"];
						
						if($p->uploadImg($tmpName, $folder, $tenAnh, $type) == 0) 
						{
							exit("Lỗi, tải ảnh lên thất bại!");
						}
						
						$sql_upProduct = 
						"
						UPDATE sanPham sp
						LEFT JOIN danhMucSP dm ON sp.maSP = dm.maSanPham
						SET sp.`tenSP` = N'{$tenSP}', 
							sp.`moTa` = N'{$mota}', 
							sp.`gia` = {$gia}, 
							sp.`giamGia` = {$giamGia}, 
							sp.`soLuong` = {$soLuong}, 
							sp.`thoiGianSua` = '{$thoiGian}',  
							sp.`maTacGia` = {$tacGia}, 
							sp.`hinhAnh` = '{$tenAnh}',
							dm.`maDanhMuc` = {$danhMuc}
						WHERE sp.maSP = {$product_id}
						";
					}
					$result = $p->themSuaXoaSP($sql_upProduct);
					if($result == 1)
					{
						echo "<script> alert('Cập nhật sản phẩm thành công')</script>";	
						$p->showProducts($product_id);
					}
					else
					{
						echo "<script> alert('Lỗi, cập nhật sản phẩm thất bại!')</script>";		
					}
					break;	
				}	
				case "Xoá bài viết":
					{
						$sql_delPro = "DELETE FROM `sanPham` WHERE maSP = {$product_id}";
						
						$result = $p->themSuaXoaSP($sql_delPro);
						if($result == 1)
						{
							echo "<script> alert('Xoá sản phẩm thành công')</script>";	
							echo "<script>window.location.replace('./products.php')</script>";
						}
						else
						{
							echo "<script> alert('Lỗi, Xoá sản phẩm thất bại!')</script>";		
						}
						break;
					}
			}
        ?>
        <div class='form-group row'>
		<div class="col-sm-4 text-center">
				</div>
				<div class="col-sm-2 text-center">
					<input type="submit" name='btnSP' id="btn" class="btn btn-light" value="Xoá sản phẩm">
				</div>
				<div class="col-sm-2 text-center">
				<input type='submit' name='btnSP' id='btnUpdateSP' class='btn btn-primary' value='Cập nhật sản phẩm'>
				</div>
				<div class="col-sm-4 text-center">
		</div>
        </div>
      </form>
      <a href="products.php" class="cancel-btn">
      	<i class="fa-solid fa-circle-xmark btn-icon"></i>
      </a>
    </div>
</div>

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
    <script src="https://kit.fontawesome.com/e9dbdfe1dd.js" crossorigin="anonymous"></script>
</body>
</html>