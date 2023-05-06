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
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quản lý sản phẩm</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/bootstrap-table.css" rel="stylesheet">
<link href="../css/styles2.css" rel="stylesheet">
<link rel="stylesheet" href="../css/main.css">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="../js/html5shiv.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./index.php"><span>hello</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="./logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li class="active"><a href="products.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Quản lý sản phẩm</a></li>
			<li><a href="posts.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Quản lý bài viết</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Quản lý sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý sản phẩm</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#sanPham" data-toggle="tab">Sản phẩm</a></li>
						<li><a href="#themSP" data-toggle="tab">Thêm sản phẩm</a></li>
					</ul>
					<div class="panel-body">						
						<div class="tab-content border-0">
							<div class="tab-pane active" id="sanPham">
							  <?php 
							  	$p->showProductsAdmin();
							  ?>
							</div>
							<div class="tab-pane" id="themSP">
							  <h3 class="text-center">THÊM SẢN PHẨM</h3>
                              <form enctype="multipart/form-data" method="post" class="form-themSP">
                                <div class="form-group row">
                                  <label for="txtDM" class="col-sm-2 col-form-label">Danh mục</label>
                                  <div class="col-sm-10">
                                    <?php
                                        $p->showOptionsInSelect("SELECT * FROM danhMuc", 'txtDM');
                                    ?>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="txtTG" class="col-sm-2 col-form-label">Tác giả</label>
                                  <div class="col-sm-10">
                                    <?php
                                        $p->showOptionsInSelect("SELECT * FROM tacGia", 'txtTG');
                                    ?>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="txtTenSP" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                  <div class="col-sm-10">
                                    <input name="txtTenSP" type="text" id="txtTenSP" class="form-control" placeholder="Nhập tên sản phẩm"  required>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="txtGia" class="col-sm-2 col-form-label">Giá</label>
                                  <div class="col-sm-10">
                                    <input name="txtGia" type="number" id="txtGia" class="form-control" min="0" required>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="txtGiamGia" class="col-sm-2 col-form-label">Giảm giá</label>
                                  <div class="col-sm-10">
                                    <input name="txtGiamGia" type="number" id="txtGiamGia" class="form-control" value="0" min="0">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="txtMT" class="col-sm-2 col-form-label">Mô tả</label>
                                  <div class="col-sm-10">
                                    <textarea name="txtMT" class="form-control" id="txtMT" rows="5" required></textarea>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="txtSL" class="col-sm-2 col-form-label">Số lượng</label>
                                  <div class="col-sm-10">
                                    <input type="number" name="txtSL" id="txtSL" class="form-control" min="0" required>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="txtAnh" class="col-sm-2 col-form-label" >Hình ảnh</label>
                                  <div class="col-sm-10">
                                    <input type="file" name="txtAnh" id="txtAnh" required>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-12 text-center">
                                    <input type="submit" name="btnSP" id="btnThemSP" class="btn btn-primary" value="Thêm sản phẩm">
                                  </div>
                                </div>
                              </form>
							</div>                            
						</div>
					</div>
					<?php
                        $btn = $_REQUEST["btnSP"];
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
                                $folder = '../images/book/';
                                $tenAnh = time() . '-' . $_FILES["txtAnh"]["name"];
                                $tmpName = $_FILES["txtAnh"]["tmp_name"];
                                $type = $_FILES["txtAnh"]["type"];
                                $thoiGian = date('Y-m-d H:i:s');
								
                                if($p->uploadImg($tmpName, $folder, $tenAnh, $type) == 1)
                                {
                                    $maDanhMuc = $p->countRowTable("danhMucSP") + 1;
                                    $maSanPham = $p->countRowTable("sanPham") + 1;
                                    
                                    $sql1 = "INSERT INTO `sanPham`
                                        (`tenSP`, `moTa`, `gia`, `giamGia`, `soLuong`, `daBan`, `trangThaiSP`, `noiBat`, `thoiGianTao`,  `maTacGia`, `hinhAnh`, `danhGia`) 
                                         values (N'{$tenSP}', N'{$mota}', {$gia}, {$giamGia}, {$soLuong}, 0, 1, 0, '{$thoiGian}', {$tacGia}, '{$tenAnh}', 0)";
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
                </div>
			</div>
		</div><!--/.row-->			
		
	</div><!--/.main-->

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
