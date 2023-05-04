<?php 
include ("class/clsStatusLogin.php");
include ("class/clsLogin.php");
$p = new statusLogin();
$login = new login();
?>
<?php
session_start();
if(isset($_SESSION['id']))
{
	$maKH=$_SESSION['id'];
}
else
{
	$maKH=-1;
}

 ?>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<title>User</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body>
	<?php
        $p->showHeader();
    ?>
	<div class="mm-toggle-wrap">
    <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
  </div>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="nav-inner col-lg-12">
          <ul id="nav" class="hidden-xs">
            <li class="level0 parent drop-menu active"><a href="index.php"><span>Home</span></a>
             
            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Trang</span></a>
              <ul class="level1">
                <li class="level1 first"><a href="grid.php"><span>Danh mục sản phẩm</span></a></li>
               
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Giỏ hàng</span></a></li>
                <li class="level1 first parent"><a href="checkout.php"><span>Thanh toán</span></a>  </li>
             
                <li class="level1"><a href="login.php"><span>Đăng nhập</span></a></li>
                
                <li class="level1 first parent"><a href="blog.php"><span>Bài viết</span></a>
                
                </li>
                <li class="level1"><a href="contact_us.html"><span>Liên hệ</span></a></li>
               
              </ul>
            </li>
             <li class="mega-menu"><a href="grid.php" class="level-top"><span>Giới thiệu</span></a></li>
            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Book</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="grid.php" class=""><span>Sách giáo khoa</span></a>
                            
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách tham khảo</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách ngoại ngữ</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách thiếu nhi</span></a>
                          
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách kinh tế</span></a>
                            
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    
            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Từ điển</span></a>
              
            </li>
           <li class="mega-menu"><a href="grid.php" class="level-top"><span>Truyện tranh</span></a>
             
             
            </li>
            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Tiểu Thuyết</span></a>
             
             
            </li>
            <li class="level0 nav-8 level-top"><a href="grid.php" class="level-top"><span>Đời sống</span></a></li>
          
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ hàng(<?php echo $login->laygiatri("select count(*) from giohang where maKH={$maKH}",$maKH);?>)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal"><?php echo $login->laygiatri("select count(*) from giohang where maKH={$maKH}",$maKH);?>  items, <span class="price"><?php echo $login->thanhtien("select*from giohang g left join sanPham s on g.maSP=s.maSP where maKH={$maKH}",$maKH);?>.000 đ</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><a href="shopping_cart.php"><span>Xem giỏ hàng</span></a></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <?php
					  $login->ouput_checkout("select*from giohang g left join sanPham s on g.maSP=s.maSP where maKH={$maKH}",$maKH); 
					  ?>
                    <!--actions--> 
                  </div>
                </div>
              </div>
              <!-- Top Cart -->
              <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                <input value="" type="hidden">
                <input id="enable_module" value="1" type="hidden">
                <input class="effect_to_cart" value="1" type="hidden">
                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
  <div>
  	<form method="post" action="">
        <input type="submit" name="btn" value="Đăng xuất">
        
    </form>
    <?php
	switch($_REQUEST["btn"])
	{
		case "Đăng xuất":
		{
    		$login->logout();
			break;	
		}	
	}
	?>
  </div>
<!--  Footer-->
<?php
	$p->showFooter();
?>
</body>
</html>