<?php
	session_start();
	include ("class/clsLogin.php");
	$p = new login();
?>
<?php 
include ("./class/clsStatusLogin.php");

$giaodien = new statusLogin();

?>
<!DOCTYPE html>
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
<title>Classic premium HTML5 &amp; CSS3 template</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style1.css" media="all">
<link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<div id="page"> 
	  <!-- Header -->
	<?php
    	$giaodien->showHeader();
	?>
  <!-- end header -->
  <div class="mm-toggle-wrap">
    <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
  </div>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="nav-inner col-lg-12">
          <ul id="nav" class="hidden-xs">
            <li class="level0 parent drop-menu "><a href="index.php"><span>Home</span></a>
            
            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Trang</span></a>
              <ul class="level1">
                <li class="level1 first"><a href="show_product.php"><span>Danh mục sản phẩm</span></a></li>
              
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Giỏ hàng</span></a></li>
                <li class="level1 first parent"><a href="checkout.php"><span>Thanh toán</span></a>  </li>
             
                <li class="level1"><a href="login.php"><span>Đăng nhập</span></a></li>
                
                <li class="level1 first parent"><a href="blog.php"><span>Bài viết</span></a>
                 
                </li>
                <li class="level1"><a href="contact_us.html"><span>Liên hệ</span></a></li>
              </ul>
            </li>
             <li class="mega-menu"><a href="#" class="level-top"><span>Giới thiệu</span></a></li>
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Book</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Sách giáo khoa</span></a>
                            
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách tham khảo</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách ngoại ngữ</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách thiếu nhi</span></a>
                            
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách kinh tế</span></a>
                            
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                   
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Từ điển</span></a>
             
            </li>
           <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Truyện tranh</span></a>
            
            </li>
         <li class="mega-menu"><a class="level-top" href="show_product.php"><span>Tiểu thuyết</span></a>
            </li>
            <li class="level0 nav-8 level-top"><a href="show_product.php" class="level-top"><span>Đời sống</span></a></li>
          
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
               <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ hàng(3)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal">3  items, <span class="price">180.000 đ</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><a href="shopping_cart.php"><span>Xem giỏ hàng</span></a></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                     <li class="item first">
                        <div class="item-inner"><a class="product-image" title="'.$tensp.'" href="./shopping_cart.php"><img alt="'.$tensp.'" src="./images/book/image1.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="?layid='.$id.'">Remove</a> <a class="btn-edit" title="Edit item" href="./shopping_cart.php"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">69.000 đ</span>
                            <p class="product-name"><a href="product_detail.php?layid='.$id.'">Người giàu nhất thành bayby lon</a></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button"><a href="shopping_cart.php"><span style="color:white;">Thanh toán</span></a></button>
                    </div>
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
  <!-- Main Container -->
  <section class="main-container col1-layout wow bounceInUp animated">
    <div class="main container">
      <div class="account-login">
        <div class="page-title">
          <h2>Đăng nhập hoặc tạo một tài khoản</h2>
        </div>
        <fieldset class="col2-set">
          <legend>Đăng nhập hoặc tạo một tài khoản</legend>
          <div class="col-1 new-users"><strong>Khách hàng mới</strong>
            <div class="content">
              <p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi ,bạn sẽ có thể chuyển qua quy trình thanh toán nhanh hơn,lưu trữ nhiều địa chỉ giao hàng , xem và theo dõi đơn hàng trong tài khoản của bạn ,v.v.</p>
              <div class="buttons-set">
                <button class="button create-account"><a href="signup.php"><span>Tạo tài khoản</span></a></button>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>Khách hàng đã đăng ký</strong>
            <div class="content">
              <p>Nếu bạn có tài khoản , vui lòng đăng nhập </p>
              <form method="post">
              <ul class="form-list">
                <li>
                  <label for="email">Email <span class="required">*</span></label>
                  <br>
                  <input type="text" title="Email Address" class="input-text" id="email" value="khachHang" name="txtuser">
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" title="Password" id="pass" value="khachhang" class="input-text" name="txtpass">
                </li>
              </ul>
              <p class="required">*Bắt buộc</p>
              <div class="buttons-set">
                <input name="btn" type="submit" class="button login" value="Đăng nhập">
                <a class="forgot-word" href="#">Quên mật khẩu?</a> </div>
            </div>
          </form>
          </div>
        </fieldset>
      </div>
      <?php
      	switch ($_REQUEST["btn"])
		{
			case "Đăng nhập":
			{
				$user = $_REQUEST["txtuser"];
				$pass = $_REQUEST["txtpass"];
				
				$p->mylogin($user, $pass);
				break;	
			}	
		}
	  ?>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
  <!-- Main Container End -->
  
  <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
            <div class="top-b-text"></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col free-shipping"><strong></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner2">
            <div class="top-b-text"></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col last offer"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner section -->
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php
  	$giaodien->showFooter();
  ?>
</div>
<div id="mobile-menu">
  <div class="mm-search">
    <form name="search">
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn-default" type="submit"><i class="icon-search"></i></button>
        </div>
        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
      </div>
    </form>
  </div>
  <ul>
    <li> </li>
    <li>
      <div class="home"><a href="index.php"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="show_product.php">Grid</a></li>
        <li> <a href="list.php">List</a></li>
        <li> <a href="product_detail.php">Product Detail</a></li>
        <li> <a href="shopping_cart.php">Shopping Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.html">Dashboard</a></li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
        <li> <a href="about_us.html">About us</a></li>
        <li><a href="compare.html">Compare</a></li>
 	   <li><a href="faq.html">FAQ</a></li>
        <li><a href="quick_view.php">Quick view</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="blog.php">Blog</a>
          <ul>
            <li><a href="blog_detail.php">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="show_product.php">Sách </a>
      <ul>
        <li> <a href="show_product.php" class="">Sách giáo khoa</a>
          <!--<ul>
            <li> <a href="grid.html" class="">Clutch Handbags</a></li>
            <li> <a href="grid.html" class="">Diaper Bags</a></li>
            <li> <a href="grid.html" class="">Bags</a></li>
            <li> <a href="grid.html" class="">Hobo handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách tham khảo</a>
          <!--<ul>
            <li> <a href="grid.html">Beaded Handbags</a></li>
            <li> <a href="grid.html">Fabric Handbags</a></li>
            <li> <a href="grid.html">Handbags</a></li>
            <li> <a href="grid.html">Leather Handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách ngoại ngữ</a>
         <!-- <ul>
            <li> <a href="grid.html">Flat Shoes</a></li>
            <li> <a href="grid.html">Flat Sandals</a></li>
            <li> <a href="grid.html">Boots</a></li>
            <li> <a href="grid.html">Heels</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách thiếu nhi</a>
         <!-- <ul>
            <li> <a href="grid.html">Bracelets</a></li>
            <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
            <li> <a href="grid.html">Pendants</a></li>
            <li> <a href="grid.html">Pins &amp; Brooches</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách kinh tế</a>
          <!--<ul>
            <li> <a href="grid.html">Casual Dresses</a></li>
            <li> <a href="grid.html">Evening</a></li>
            <li> <a href="grid.html">Designer</a></li>
            <li> <a href="grid.html">Party</a></li>
          </ul>-->
        </li>
    <!-- <li> <a href="grid.html">Swimwear</a>
          <ul>
            <li> <a href="grid.html">Swimsuits</a></li>
            <li> <a href="grid.html">Beach Clothing</a></li>
            <li> <a href="grid.html">Clothing</a></li>
            <li> <a href="grid.html">Bikinis</a></li>
          </ul>
        </li>-->
      </ul>
    </li>
    <li><a href="show_product.php">Truyện tranh</a>
     <!-- <ul>
        <li> <a href="grid.html" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
          </ul>
        </li>
        <li> <a href="#/sunglasses.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Sách kinh tế </a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="show_product.php">Từ điển</a>
     <!-- <ul>
        <li> <a href="grid.html"><span>Mobiles</span></a>
          <ul>
            <li> <a href="grid.html"><span>Samsung</span></a></li>
            <li> <a href="grid.html"><span>Nokia</span></a></li>
            <li> <a href="grid.html"><span>IPhone</span></a></li>
            <li> <a href="grid.html"><span>Sony</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
            <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Cameras</span></a>
          <ul>
            <li> <a href="grid.html"><span>Camcorders</span></a></li>
            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
            <li> <a href="grid.html"><span>Digital SLR</span></a></li>
            <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="grid.html"><span>MP3 Players</span></a></li>
            <li> <a href="grid.html"><span>IPods</span></a></li>
            <li> <a href="grid.html"><span>Speakers</span></a></li>
            <li> <a href="grid.html"><span>Video Players</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Computer</span></a>
          <ul>
            <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
            <li> <a href="grid.html"><span>Pendrives</span></a></li>
            <li> <a href="grid.html"><span>Headphones</span></a></li>
            <li> <a href="grid.html"><span>PC Components</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Appliances</span></a>
          <ul>
            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
            <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
            <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
            <li> <a href="grid.html"><span>Water Purifier</span></a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="show_product.php">Tiểu thuyết</a>
      <!--<ul>
        <li> <a href="grid.html">Living Room</a>
          <ul>
            <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
            <li> <a href="grid.html">Sofas</a></li>
            <li> <a href="grid.html">Chairs</a></li>
            <li> <a href="grid.html">Tables</a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class="">Dining &amp; Bar</a>
          <ul>
            <li> <a href="grid.html">Dining Table Sets</a></li>
            <li> <a href="grid.html">Serving Trolleys</a></li>
            <li> <a href="grid.html">Bar Counters</a></li>
            <li> <a href="grid.html">Dining Cabinets</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Bedroom</a>
          <ul>
            <li> <a href="grid.html">Beds</a></li>
            <li> <a href="grid.html">Chest of Drawers</a></li>
            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
            <li> <a href="grid.html">Nightstands</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Kitchen</a>
          <ul>
            <li> <a href="grid.html">Kitchen Racks</a></li>
            <li> <a href="grid.html">Kitchen Fillings</a></li>
            <li> <a href="grid.html">Wall Units</a></li>
            <li> <a href="grid.html">Benches &amp; Stools</a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="show_product.php">Đời sống</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>


<!-- End Footer --> 
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->
</html>