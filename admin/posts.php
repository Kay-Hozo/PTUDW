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
<title>Quản lý bài viết
</title>

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
			<li><a href="products.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Quản lý sản phẩm</a></li>
			<li class="active"><a href="posts.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Quản lý bài viết</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Quản lý bài viết</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý bài viết</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#sanPham" data-toggle="tab">Bài viết</a></li>
						<li><a href="#themSP" data-toggle="tab">Thêm bài viết</a></li>
					</ul>
					<div class="panel-body">						
						<div class="tab-content border-0">
							<div class="tab-pane active" id="sanPham">
							  <?php 
							  	$p->showPostAdmin("SELECT * FROM `baiViet` bv left join taiKhoan tk on bv.tacGia = tk.maTK");
							  ?>
							</div>
							<div class="tab-pane" id="themSP">
							  <h3 class="text-center">THÊM BÀI VIẾT</h3>
                              <form enctype="multipart/form-data" method="post" class="form-themSP">
							  	<div class="form-group row">
                                  <label for="txtTieuDe" class="col-sm-2 col-form-label">Tiêu đề</label>
                                  <div class="col-sm-10">
                                    <input name="txtTieuDe" type="text" id="txtTieuDe" class="form-control" placeholder="Nhập tiêu đề bài viết"  required>
                                  </div>
                                </div>
							  	<div class="form-group row">
                                  <label for="txtNoiDung" class="col-sm-2 col-form-label">Nội dung</label>
								  <div class="col-sm-10">
                                    <textarea name="txtNoiDung" class="form-control" id="txtNoiDung" rows="10" required></textarea>
                                  </div>
                                </div>
							  	<div class="form-group row">
                                  <label for="txtAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                                  <div class="col-sm-10">
								 	 <input type="file" name="txtAnh" id="txtAnh" required>
                                  </div>
                                </div>
								<div class="form-group row">
                                  <div class="col-sm-12 text-center">
								  	<input type="submit" name="btn" id="btnThemBV" class="btn btn-primary" value="Thêm bài viết">
                                  </div>
                                </div>
                              </form>
							</div>                            
						</div>
					</div>
					<?php
                        $btn = $_REQUEST["btn"];
                        switch ($btn)
                        {
                            case "Thêm bài viết":
                            {
                                $tieuDe = $_REQUEST["txtTieuDe"];
								$noiDung = $_REQUEST["txtNoiDung"];
                                $folder = '../images/post/';
                                $tenAnh = time() . '-' . $_FILES["txtAnh"]["name"];
                                $tmpName = $_FILES["txtAnh"]["tmp_name"];
                                $type = $_FILES["txtAnh"]["type"];
                                $thoiGian = date('Y-m-d H:i:s');
								
                                if($p->uploadImg($tmpName, $folder, $tenAnh, $type) == 1)
                                {
                                    
                                    $sqlAddPost = "INSERT INTO baiViet(tenBV, hinhAnh, noiDung, thoiGianDang, tacGia) values 
									(N'{$tieuDe}', '{$tenAnh}', N'{$noiDung}', '{$thoiGian}',{$_SESSION['id']});";
								
                                    if($p->themSuaXoaSP($sqlAddPost) == 1) 
                                    {
                                        echo "<script>alert('Thêm bài viết thành công')</script>";	
										echo "<script>window.location.replace('./posts.php')</script>";
                                    }
                                    else
                                    {
                                        echo "<script>alert('Lỗi, thêm bài viết thất bại!')</script>";	
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
