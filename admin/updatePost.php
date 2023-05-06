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
	$post_id = $_REQUEST['post_id'];
	$author_id = $_REQUEST['author_id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Update post</title>

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
        <h3 class='text-center heading-form'>CẬP NHẬT BÀI VIẾT</h3>
        <form enctype='multipart/form-data' method='post'>
			<div class="form-group row">
				<label for="txt_Up_TieuDe" class="col-sm-2 col-form-label">Tiêu đề</label>
				<div class="col-sm-10">
					<input name="txt_Up_TieuDe" type="text" id="txt_Up_TieuDe" value="<?php
							echo $p->getValue("SELECT `tenBV` FROM `baiViet` WHERE id = $post_id");
						?>
						" class="form-control" placeholder="Nhập tiêu đề bài viết"  required>
				</div>
			</div>
			<div class="form-group row">
				<label for="txt_Up_NoiDung" class="col-sm-2 col-form-label">Nội dung</label>
				<div class="col-sm-10">
					<textarea name="txt_Up_NoiDung" class="form-control" id="txt_Up_NoiDung" rows="10" required>
						<?php
							echo $p->getValue("SELECT `noiDung` FROM `baiViet` WHERE id = $post_id");
						?>
					</textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="txt_Up_Anh" class="col-sm-2 col-form-label">Hình ảnh</label>
				<div class="col-sm-10">
					<input type="file" name="txt_Up_Anh" id="txt_Up_Anh">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4 text-center">
				</div>
				<div class="col-sm-2 text-center">
					<input type="submit" name="btn" id="btn" class="btn btn-light" value="Xoá bài viết">
				</div>
				<div class="col-sm-2 text-center">
					<input type="submit" name="btn" id="btn" class="btn btn-primary" value="Cập nhật bài viết">
				</div>
				<div class="col-sm-4 text-center">
				</div>
			</div>
        <?php
			
			switch ($_REQUEST['btn'])
			{
				case "Cập nhật bài viết" :
				{
					$tieuDe = $_REQUEST["txt_Up_TieuDe"];
					$noiDung = $_REQUEST["txt_Up_NoiDung"];
					$thoiGian = date('Y-m-d H:i:s');	
					$sql_upPost  = "";
					
					if($_FILES["txt_Up_Anh"]["name"] == "")
					{
						$sql_upPost = 
						"
						UPDATE baiViet
						SET  `tenBV` = N'{$tieuDe}', 
							`noiDung` = N'{$noiDung}'
						WHERE id = {$post_id}
						";
					}
					else
					{
						$folder = '../images/post/';
						$tenAnh = time() . '-' . $_FILES["txt_Up_Anh"]["name"];
						$tmpName = $_FILES["txt_Up_Anh"]["tmp_name"];
						$type = $_FILES["txt_Up_Anh"]["type"];
						
						if($p->uploadImg($tmpName, $folder, $tenAnh, $type) == 0) 
						{
							exit("Lỗi, tải ảnh lên thất bại!");
						}
						
						$sql_upPost = 
						"
						UPDATE baiViet
						SET  `tenBV` = N'{$tieuDe}', 
							`noiDung` = N'{$noiDung}',
							`hinhAnh` = '{$tenAnh}'
						WHERE id = {$post_id}
						";
					}
					
					$result = $p->themSuaXoaSP($sql_upPost);
					if($result == 1)
					{
						echo "<script> alert('Cập nhật bài viết thành công')</script>";	
						echo "<script>window.location.replace('./posts.php')</script>";
					}
					else
					{
						echo "<script> alert('Lỗi, cập nhật bài viết thất bại!')</script>";		
					}
					break;	
				}	
				case "Xoá bài viết":
				{
					$sql_delPost = "DELETE FROM `baiViet` WHERE id = {$post_id}";
					$result = $p->themSuaXoaSP($sql_delPost);
					if($result == 1)
					{
						echo "<script> alert('Xoá bài viết thành công')</script>";	
						echo "<script>window.location.replace('./posts.php')</script>";
					}
					else
					{
						echo "<script> alert('Lỗi, Xoá bài viết thất bại!')</script>";		
					}
					break;
				}
			}
        ?>
      </form>
      <a href="posts.php" class="cancel-btn">
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