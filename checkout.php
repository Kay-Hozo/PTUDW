﻿<?php 
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
             <!-- <ul class="level1">
                <li class="level1 first parent"><a href="index.html"><span>Home Version 1</span></a></li>
                <li class="level1 parent"><a href="../version_2/index.html"><span>Home Version 2</span></a></li>
                <li class="level1 parent"><a href="../version_3/index.html"><span>Home Version 3</span></a></li>
           
              </ul>-->
            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Trang</span></a>
              <ul class="level1">
                <li class="level1 first"><a href="show_product.php"><span>Danh mục sản phẩm</span></a></li>
               <!-- <li class="level1 nav-10-2"><a href="list.html"><span>List</span></a></li>-->
                <!--<li class="level1 nav-10-3"><a href="product_detail.html"><span>Product Detail</span></a></li>-->
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Giỏ hàng</span></a></li>
                <li class="level1 first parent"><a href="checkout.php"><span>Thanh toán</span></a>  </li>
               <!-- <li class="level1 nav-10-4"><a href="wishlist.html"><span>Wishlist</span></a></li>-->
              <!--  <li class="level1"><a href="dashboard.html"><span>Dashboard</span></a></li>
                <li class="level1"><a href="#"><span>Multiple Addresses</span></a></li>
                <li class="level1"><a href="gioithieu.php"><span>About us</span></a></li>
                <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
                
                <li class="level1"><a href="faq.html"><span>FAQ</span></a></li>
                <li class="level1"><a href="quick_view.html"><span>Quick view </span></a></li>-->
                <li class="level1"><a href="login.php"><span>Đăng nhập</span></a></li>
                
                <li class="level1 first parent"><a href="blog.php"><span>Bài viết</span></a>
                 <!-- <ul class="level2 right-sub">
                    <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                  </ul>-->
                </li>
                <li class="level1"><a href="contact_us.html"><span>Liên hệ</span></a></li>
               <!-- <li class="level1"><a href="404error.html"><span>404 Error Page</span></a></li>-->
              </ul>
            </li>
             <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Giới thiệu</span></a></li>
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Book</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Sách giáo khoa</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Clutch Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Diaper Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Hobo handbags</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách tham khảo</span></a>
                           <!-- <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Beaded Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Fabric Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Leather Handbags</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách ngoại ngữ</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Flat Shoes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Flat Sandals</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Boots</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Heels</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách thiếu nhi</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Bracelets</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid-2.html"><span>Necklaces &amp; Pendent</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Pendants</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Pins &amp; Brooches</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách kinh tế</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Casual Dresses</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Evening</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Designer</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Party</span></a></li>
                            </ul>-->
                          </li>
                          <!--<li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Swimwear</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Swimsuits</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/beach-clothing.html"><span>Beach Clothing</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Clothing</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Bikinis</span></a></li>
                            </ul>
                          </li>-->
                        </ul>
                      </div>
                    </div>
                    <!--nav-block nav-block-center-->
               <!--     <div class="col-2">
                      <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                      <div class="menu_image1"><a href="#" title=""><img src="images/menu_image1.jpg" alt="menu_image"></a></div>
                    </div>
                  </div>-->
                  <!--level0-wrapper2--><!-- </div>
              </div> 
            </li> -->
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Từ điển</span></a>
              <!--<div  style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="grid.html" class=""><span>Shoes</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Sport Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Casual Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Leather Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>canvas shoes</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Dresses</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Casual Dresses</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Evening</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Designer</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Party</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Jackets</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Coats</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Formal Jackets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Leather Jackets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Blazers</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Watches</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Fasttrack</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Casio</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Titan</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Tommy-Hilfiger</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Sunglasses</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Ray Ban</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Fasttrack</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Police</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Oakley</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Accesories</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Backpacks</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Wallets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Laptops Bags</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Belts</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>-->
                    <!--level0-wrapper2-->
                 <!--   <div class="nav-add">
                      <div class="push_item">
                        <div class="push_img"><a href="#"><img alt="sunglass" src="images/menu_man_sunglass.png"></a></div>
                      </div>
                      <div class="push_item">
                        <div class="push_img"><a href="#"><img alt="watch" src="images/menu_man_watch.png"></a></div>
                      </div>
                      <div class="push_item">
                        <div class="push_img"><a href="#"><img alt="jeans" src="images/menu_man_jeans.png"></a></div>
                      </div>
                      <div class="push_item push_item_last">
                        <div class="push_img"><a href="#"><img alt="shoes" src="images/menu_man_shoes.png"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->
            </li>
           <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Truyện tranh</span></a>
             <!-- <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Mobiles</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Samsung</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Nokia</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>IPhone</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Sony</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html" class=""><span>Accesories</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Mobile Memory Cards</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Cases &amp; Covers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Mobile Headphones</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Bluetooth Headsets</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Cameras</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Camcorders</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Point &amp; Shoot</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Digital SLR</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Camera Accesories</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Audio &amp; Video</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>MP3 Players</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>IPods</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Speakers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Video Players</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Computer</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>External Hard Disk</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Pendrives</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Headphones</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>PC Components</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Appliances</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Vaccum Cleaners</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Indoor Lighting</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Kitchen Tools</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Water Purifier</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>-->
                  <!--level0-wrapper2-->
             <!--     <div class="nav-add">
                    <div class="push_item">
                      <div class="push_img"><a href="#"><img alt="phone" src="images/menu_ele_phone.png"></a></div>
                    </div>
                    <div class="push_item">
                      <div class="push_img"><a href="#"><img alt="camera" src="images/menu_ele_camera.png"></a></div>
                    </div>
                    <div class="push_item">
                      <div class="push_img"><a href="#"><img alt="ipod" src="images/menu_ele_ipod.png"></a></div>
                    </div>
                    <div class="push_item push_item_last">
                      <div class="push_img"><a href="#"><img alt="laptop" src="images/menu_ele_laptop.png"></a></div>
                    </div>
                  </div>
                </div>
              </div>-->
            </li>
         <li class="mega-menu"><a class="level-top" href="show_product.php"><span>Tiểu thuyết</span></a>
             <!--<div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Living Room</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Racks &amp; Cabinets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Sofas</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Chairs</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Tables</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html" class=""><span>Dining &amp; Bar</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Dining Table Sets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Serving Trolleys</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Bar Counters</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Dining Cabinets</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Bedroom</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Beds</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Chest of Drawers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid-2.html"><span>Wardrobes &amp; Almirahs</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Nightstands</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Kitchen</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Kitchen Racks</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Kitchen Fillings</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Wall Units</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html"><span>Benches &amp; Stools</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>-->
                    <!--nav-block nav-block-center-->
                   <!-- <div class="nav-block nav-block-right std grid12-4"><a href="#"><img src="images/menu_furniture_2.png" alt="furniture"></a> </div>-->
                    <!--nav-block nav-block-right std grid12-4--><!-- </div>
                </div>-->
                <!--level0-wrapper2--> 
             <!--</div> -->
            </li>
            <li class="level0 nav-8 level-top"><a href="show_product.php" class="level-top"><span>Đời sống</span></a></li>
           <!-- <li class="nav-custom-link mega-menu"> <a class="level-top" href="#"><span>Custom</span></a>
              <div class="level0-wrapper custom-menu" style="left: 0px; display: none;">
                <div class="container">
                  <div class="header-nav-dropdown-wrapper clearer">
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img1.jpg" alt="custom img1"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img2.jpg" alt="custom img2"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img3.jpg" alt="custom img3"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                    <div class="grid12-5">
                      <div class="custom_img"><a href="#"><img src="images/custom-img4.jpg" alt="custom img4"></a></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                      <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </li>-->
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ hàng(3)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal">3 items, <span class="price">$180.00</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><a href="shopping_cart.php"><span>Xem giỏ hàng</span></a></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <li class="item first">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="images/book/image1.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$99.00</span>
                            <p class="product-name"><a href="product_detail.php">Người Giàu Có Nhất Thành Babylon</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#"><img alt="Sample Product" src="images/book/image2.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$16.00</span>
                            <p class="product-name"><a href="product_detail.php">Doremon</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#"><img alt="Sample Product" src="images/book/image3.png"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$65.00</span>
                            <p class="product-name"><a href="product_detail.php">Từ điển Anh-Việt</a></p>
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
<div class="main-container col2-right-layout bounceInUp animated">
  <div class="main container">
    <div class="row">
      <div class="col-main col-sm-9">
        <div class="page-title">
          <h2>Thanh toán</h2>
        </div>
        <ol class="one-page-checkout" id="checkoutSteps">
          <li id="opc-billing" class="section allow active">
            <div class="step-title"> <span class="number">1</span>
              <h3>Phương pháp kiểm tra</h3>
              <!--<a href="#">Edit</a> --> 
            </div>
            <div id="checkout-step-billing" class="step a-item" >
              <form id="co-billing-form" >
                <fieldset class="group-select">
                  <ul>
                    <li>
                      <label for="billing-address-select">Chọn địa chỉ thanh toán từ số địa chỉ của bạn hoặc nhập địa chỉ mới</label>
                      <br>
                      <select name="billing_address_id" id="billing-address-select" class="address-select" title="" onChange="billing.newAddress(!this.value)">
                        <option value="1" selected="selected">41/21 Nguyễn Thái Sơn P>4 Gò Vấp TP HCM</option>
                        <option >Địa chỉ mới</option>
                      </select>
                    </li>
                    <li id="billing-new-address-form" style="display: none;">
                      <fieldset>
                        <legend>Địa chỉ mới</legend>
                        <input type="hidden" name="billing[address_id]" value="4269" id="billing:address_id">
                        <ul>
                          <li>
                            <div class="customer-name">
                              <div class="input-box name-firstname">
                                <label for="billing:firstname"> First Name <span class="required">*</span> </label>
                                <br>
                                <input type="text" id="billing:firstname" name="billing[firstname]" value="pranali" title="First Name" class="input-text">
                              </div>
                              <div class="input-box name-lastname">
                                <label for="billing:lastname"> Last Name <span class="required">*</span> </label>
                                <br>
                                <input type="text" id="billing:lastname" name="billing[lastname]" value="d" title="Last Name" class="input-text">
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="billing:company">Company</label>
                              <br>
                              <input type="text" id="billing:company" name="billing[company]"  title="Company" class="input-text">
                            </div>
                          </li>
                          <li>
                            <label>Address <span class="required">*</span></label>
                            <br>
                            <input type="text" title="Street Address" name="billing[street][]" value="aundh" class="input-text">
                          </li>
                          <li>
                            <input type="text" title="Street Address 2" name="billing[street][]" class="input-text">
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="billing:city">City <span class="required">*</span></label>
                              <br>
                              <input type="text" title="City" name="billing[city]" value="tyyrt" class="input-text" id="billing:city">
                            </div>
                            <div class="input-box">
                              <label>State/Province <span class="required">*</span></label>
                              <br>
                              <select id="billing:region_id" name="billing[region_id]" title="State/Province" class="validate-select" >
                                <option >Please select region, state or province</option>
                                <option value="1">Alabama</option>
                                <option value="2">Alaska</option>
                                <option value="3">American Samoa</option>
                                <option value="4">Arizona</option>
                                <option value="5">Arkansas</option>
                                <option value="6">Armed Forces Africa</option>
                                <option value="7">Armed Forces Americas</option>
                                <option value="8">Armed Forces Canada</option>
                                <option value="9">Armed Forces Europe</option>
                                <option value="10">Armed Forces Middle East</option>
                                <option value="11">Armed Forces Pacific</option>
                                <option value="12">California</option>
                                <option value="13">Colorado</option>
                                <option value="14">Connecticut</option>
                                <option value="15">Delaware</option>
                                <option value="16">District of Columbia</option>
                                <option value="17">Federated States Of Micronesia</option>
                                <option value="18">Florida</option>
                                <option value="19">Georgia</option>
                                <option value="20">Guam</option>
                                <option value="21">Hawaii</option>
                                <option value="22">Idaho</option>
                                <option value="23">Illinois</option>
                                <option value="24">Indiana</option>
                                <option value="25">Iowa</option>
                                <option value="26">Kansas</option>
                                <option value="27">Kentucky</option>
                                <option value="28">Louisiana</option>
                                <option value="29">Maine</option>
                                <option value="30">Marshall Islands</option>
                                <option value="31">Maryland</option>
                                <option value="32">Massachusetts</option>
                                <option value="33">Michigan</option>
                                <option value="34">Minnesota</option>
                                <option value="35">Mississippi</option>
                                <option value="36">Missouri</option>
                                <option value="37">Montana</option>
                                <option value="38">Nebraska</option>
                                <option value="39">Nevada</option>
                                <option value="40">New Hampshire</option>
                                <option value="41">New Jersey</option>
                                <option value="42">New Mexico</option>
                                <option value="43">New York</option>
                                <option value="44">North Carolina</option>
                                <option value="45">North Dakota</option>
                                <option value="46">Northern Mariana Islands</option>
                                <option value="47">Ohio</option>
                                <option value="48">Oklahoma</option>
                                <option value="49">Oregon</option>
                                <option value="50">Palau</option>
                                <option value="51">Pennsylvania</option>
                                <option value="52">Puerto Rico</option>
                                <option value="53">Rhode Island</option>
                                <option value="54">South Carolina</option>
                                <option value="55">South Dakota</option>
                                <option value="56">Tennessee</option>
                                <option value="57">Texas</option>
                                <option value="58">Utah</option>
                                <option value="59">Vermont</option>
                                <option value="60">Virgin Islands</option>
                                <option value="61">Virginia</option>
                                <option value="62">Washington</option>
                                <option value="63">West Virginia</option>
                                <option value="64">Wisconsin</option>
                                <option value="65">Wyoming</option>
                              </select>
                              <input type="text" id="billing:region" name="billing[region]" value="Alabama" title="State/Province" class="input-text" style="display: none;">
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="billing:postcode">Zip/Postal Code <span class="required">*</span></label>
                              <br>
                              <input type="text" title="Zip/Postal Code" name="billing[postcode]" id="billing:postcode" value="46532" class="input-text validate-zip-international">
                            </div>
                            <div class="input-box">
                              <label for="billing:country_id">Country <span class="required">*</span></label>
                              <br>
                              <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country">
                                
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="VG">British Virgin Islands</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos [Keeling] Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo - Brazzaville</option>
                                <option value="CD">Congo - Kinshasa</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="CI">Côte d’Ivoire</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong SAR China</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau SAR China</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar [Burma]</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="KP">North Korea</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territories</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn Islands</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="RE">Réunion</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="KR">South Korea</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="ST">São Tomé and Príncipe</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UM">U.S. Minor Outlying Islands</option>
                                <option value="VI">U.S. Virgin Islands</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected="selected">United States</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                                <option value="AX">Åland Islands</option>
                              </select>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="billing:telephone">Telephone <span class="required">*</span></label>
                              <br>
                              <input type="text" name="billing[telephone]" value="454541" title="Telephone" class="input-text" id="billing:telephone">
                            </div>
                            <div class="input-box">
                              <label for="billing:fax">Fax</label>
                              <br>
                              <input type="text" name="billing[fax]"  title="Fax" class="input-text" id="billing:fax">
                            </div>
                          </li>
                          <li>
                            <input type="checkbox" name="billing[save_in_address_book]" value="1" title="Save in address book" id="billing:save_in_address_book" onChange="shipping.setSameAsBilling(false);" class="checkbox">
                            <label for="billing:save_in_address_book">Save in address book</label>
                          </li>
                        </ul>
                      </fieldset>
                    </li>
                    <li>
                      <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" class="radio">
                      <label for="billing:use_for_shipping_yes">Gửi đến địa chỉ này</label>
                      <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" checked="checked" class="radio">
                      <label for="billing:use_for_shipping_no">Gửi đến địa chỉ khác</label>
                    </li>
                  </ul>
                  <p class="require"><em class="required">* </em>Bắt buộc</p>
                  <button type="button" class="button continue" ><span>Tiếp tục</span></button>
                </fieldset>
              </form>
            </div>
          </li>
          <li id="opc-shipping" class="section">
            <div class="step-title"> <span class="number">2</span>
              <h3 class="one_page_heading"> Thông tin vận chuyển</h3>
              <!--<a href="#">Edit</a>--> 
            </div>
            <div id="checkout-step-shipping" class="step a-item" style="display: none;">
              <form  id="co-shipping-form">
                <fieldset class="group-select">
                  <ul>
                    <li>
                      <label for="shipping-address-select">Select a shipping address from your address book or enter a new address.</label>
                      <br>
                      <select name="shipping_address_id" id="shipping-address-select" class="address-select" title="" onChange="shipping.newAddress(!this.value)">
                        <option value="1" selected="selected">pranali d, aundh, tyyrt, Alabama 46532, United States</option>
                        <option >New Address</option>
                      </select>
                    </li>
                    <li id="shipping-new-address-form" style="display: none;">
                      <fieldset>
                        <input type="hidden" name="shipping[address_id]"  id="shipping:address_id">
                        <ul>
                          <li>
                            <div class="customer-name">
                              <div class="input-box name-firstname">
                                <label for="shipping:firstname"> First Name <span class="required">*</span> </label>
                                <br>
                                <input type="text" id="shipping:firstname" name="shipping[firstname]"  title="First Name" class="input-text" onChange="shipping.setSameAsBilling(false)">
                              </div>
                              <div class="input-box name-lastname">
                                <label for="shipping:lastname"> Last Name <span class="required">*</span> </label>
                                <br>
                                <input type="text" id="shipping:lastname" name="shipping[lastname]"  title="Last Name" class="input-text" onChange="shipping.setSameAsBilling(false)">
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="shipping:company">Company</label>
                              <br>
                              <input type="text" id="shipping:company" name="shipping[company]"  title="Company" class="input-text" onChange="shipping.setSameAsBilling(false);">
                            </div>
                          </li>
                          <li>
                            <label for="shipping:street1">Address <span class="required">*</span></label>
                            <br>
                            <input type="text" title="Street Address" name="shipping[street][]" id="shipping:street1"  class="input-text" onChange="shipping.setSameAsBilling(false);">
                          </li>
                          <li>
                            <input type="text" title="Street Address 2" name="shipping[street][]" id="shipping:street2"  class="input-text" onChange="shipping.setSameAsBilling(false);">
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="shipping:city">City <span class="required">*</span></label>
                              <br>
                              <input type="text" title="City" name="shipping[city]"  class="input-text" id="shipping:city" onChange="shipping.setSameAsBilling(false);">
                            </div>
                            <div class="input-box">
                              <label for="shipping:region">State/Province <span class="required">*</span></label>
                              <br>
                              <select id="shipping:region_id" name="shipping[region_id]" title="State/Province" class="validate-select" >
                                <option >Please select region, state or province</option>
                                <option value="1">Alabama</option>
                                <option value="2">Alaska</option>
                                <option value="3">American Samoa</option>
                                <option value="4">Arizona</option>
                                <option value="5">Arkansas</option>
                                <option value="6">Armed Forces Africa</option>
                                <option value="7">Armed Forces Americas</option>
                                <option value="8">Armed Forces Canada</option>
                                <option value="9">Armed Forces Europe</option>
                                <option value="10">Armed Forces Middle East</option>
                                <option value="11">Armed Forces Pacific</option>
                                <option value="12">California</option>
                                <option value="13">Colorado</option>
                                <option value="14">Connecticut</option>
                                <option value="15">Delaware</option>
                                <option value="16">District of Columbia</option>
                                <option value="17">Federated States Of Micronesia</option>
                                <option value="18">Florida</option>
                                <option value="19">Georgia</option>
                                <option value="20">Guam</option>
                                <option value="21">Hawaii</option>
                                <option value="22">Idaho</option>
                                <option value="23">Illinois</option>
                                <option value="24">Indiana</option>
                                <option value="25">Iowa</option>
                                <option value="26">Kansas</option>
                                <option value="27">Kentucky</option>
                                <option value="28">Louisiana</option>
                                <option value="29">Maine</option>
                                <option value="30">Marshall Islands</option>
                                <option value="31">Maryland</option>
                                <option value="32">Massachusetts</option>
                                <option value="33">Michigan</option>
                                <option value="34">Minnesota</option>
                                <option value="35">Mississippi</option>
                                <option value="36">Missouri</option>
                                <option value="37">Montana</option>
                                <option value="38">Nebraska</option>
                                <option value="39">Nevada</option>
                                <option value="40">New Hampshire</option>
                                <option value="41">New Jersey</option>
                                <option value="42">New Mexico</option>
                                <option value="43">New York</option>
                                <option value="44">North Carolina</option>
                                <option value="45">North Dakota</option>
                                <option value="46">Northern Mariana Islands</option>
                                <option value="47">Ohio</option>
                                <option value="48">Oklahoma</option>
                                <option value="49">Oregon</option>
                                <option value="50">Palau</option>
                                <option value="51">Pennsylvania</option>
                                <option value="52">Puerto Rico</option>
                                <option value="53">Rhode Island</option>
                                <option value="54">South Carolina</option>
                                <option value="55">South Dakota</option>
                                <option value="56">Tennessee</option>
                                <option value="57">Texas</option>
                                <option value="58">Utah</option>
                                <option value="59">Vermont</option>
                                <option value="60">Virgin Islands</option>
                                <option value="61">Virginia</option>
                                <option value="62">Washington</option>
                                <option value="63">West Virginia</option>
                                <option value="64">Wisconsin</option>
                                <option value="65">Wyoming</option>
                              </select>
                              <input type="text" id="shipping:region" name="shipping[region]"  title="State/Province" class="input-text" style="display: none;">
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="shipping:postcode">Zip/Postal Code <span class="required">*</span></label>
                              <br>
                              <input type="text" title="Zip/Postal Code" name="shipping[postcode]" id="shipping:postcode"  class="input-text validate-zip-international" onChange="shipping.setSameAsBilling(false);">
                            </div>
                            <div class="input-box">
                              <label for="shipping:country_id">Country <span class="required">*</span></label>
                              <br>
                              <select name="shipping[country_id]" id="shipping:country_id" class="validate-select" title="Country" onChange="shipping.setSameAsBilling(false);">
                                
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="VG">British Virgin Islands</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos [Keeling] Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo - Brazzaville</option>
                                <option value="CD">Congo - Kinshasa</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="CI">Côte d’Ivoire</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong SAR China</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau SAR China</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar [Burma]</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="KP">North Korea</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territories</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn Islands</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="RE">Réunion</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="KR">South Korea</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="ST">São Tomé and Príncipe</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UM">U.S. Minor Outlying Islands</option>
                                <option value="VI">U.S. Virgin Islands</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected="selected">United States</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                                <option value="AX">Åland Islands</option>
                              </select>
                            </div>
                          </li>
                          <li>
                            <div class="input-box">
                              <label for="shipping:telephone">Telephone <span class="required">*</span></label>
                              <br>
                              <input type="text" name="shipping[telephone]"  title="Telephone" class="input-text" id="shipping:telephone" onChange="shipping.setSameAsBilling(false);">
                            </div>
                            <div class="input-box">
                              <label for="shipping:fax">Fax</label>
                              <br>
                              <input type="text" name="shipping[fax]"  title="Fax" class="input-text" id="shipping:fax" onChange="shipping.setSameAsBilling(false);">
                            </div>
                          </li>
                          <li>
                            <input type="checkbox" name="shipping[save_in_address_book]" value="1" title="Save in address book" id="shipping:save_in_address_book" onChange="shipping.setSameAsBilling(false);" class="checkbox">
                            <label for="shipping:save_in_address_book">Save in address book</label>
                          </li>
                          <li>
                            <input type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" class="checkbox">
                            <label for="shipping:same_as_billing">Use Billing Address</label>
                          </li>
                        </ul>
                      </fieldset>
                    </li>
                  </ul>
                  <p class="require"><em class="required">* </em>Required Fields</p>
                  <div class="buttons-set1" id="shipping-buttons-container">
                    <button type="button" class="button" ><span>Continue</span></button>
                    <a href="#" class="back-link">« Back</a> </div>
                </fieldset>
              </form>
            </div>
          </li>
          <li id="opc-shipping_method" class="section">
            <div class="step-title"> <span class="number">3</span>
              <h3 class="one_page_heading">Phương pháp vận chuyển</h3>
              <!--<a href="#">Edit</a>--> 
            </div>
            <div id="checkout-step-shipping_method" class="step a-item" style="display: none;">
              <form id="co-shipping-method-form" >
                <fieldset>
                  <div id="checkout-shipping-method-load">
                    <dl class="shipping-methods">
                      <dt>Flat Rate</dt>
                      <dd>
                        <ul>
                          <li>
                            <input type="radio" name="shipping_method" value="flatrate_flatrate" id="s_method_flatrate_flatrate" checked="checked" class="radio">
                            <label for="s_method_flatrate_flatrate">Fixed <span class="price">$35.00</span> </label>
                          </li>
                        </ul>
                      </dd>
                    </dl>
                  </div>
                  <div id="onepage-checkout-shipping-method-additional-load">
                    <div class="add-gift-message">
                      <h4>Do you have any gift items in your order?</h4>
                      <p>
                        <input type="checkbox" name="allow_gift_messages" id="allow_gift_messages" value="1" class="checkbox">
                        <label for="allow_gift_messages">Check this checkbox if you want to add gift messages.</label>
                      </p>
                    </div>
                    <div style="display: none;" class="gift-message-form" id="allow-gift-message-container">
                      <div class="inner-box"> </div>
                    </div>
                  </div>
                  <div class="buttons-set1" id="shipping-method-buttons-container">
                    <button type="button" class="button" ><span>Continue</span></button>
                    <a href="#" class="back-link">« Back</a> </div>
                </fieldset>
              </form>
            </div>
          </li>
          <li id="opc-payment" class="section">
            <div class="step-title"> <span class="number">4</span>
              <h3 class="one_page_heading">Thông tin thanh toán</h3>
              <!--<a href="#">Edit</a>--> 
            </div>
            <div id="checkout-step-payment" class="step a-item" style="display: none;">
              <form id="co-payment-form">
                <dl id="checkout-payment-method-load">
                  <dt>
                    <input type="radio" id="p_method_checkmo" value="checkmo" name="payment[method]" title="Check / Money order" class="radio">
                    <label for="p_method_checkmo">Check / Money order</label>
                  </dt>
                  <dd>
                    <fieldset class="form-list">
                    </fieldset>
                  </dd>
                  <dt>
                    <input type="radio" id="p_method_ccsave" value="ccsave" name="payment[method]" title="Credit Card (saved)" class="radio">
                    <label for="p_method_ccsave">Credit Card (saved)</label>
                  </dt>
                  <dd>
                    <fieldset class="form-list">
                      <ul id="payment_form_ccsave" style="display: none;">
                        <li>
                          <div class="input-box">
                            <label for="ccsave_cc_owner">Name on Card <span class="required">*</span></label>
                            <br>
                            <input type="text" disabled="" title="Name on Card" class="input-text" id="ccsave_cc_owner" name="payment[cc_owner]" >
                          </div>
                        </li>
                        <li>
                          <div class="input-box">
                            <label for="ccsave_cc_type">Credit Card Type <span class="required">*</span></label>
                            <br>
                            <select disabled="" id="ccsave_cc_type" name="payment[cc_type]" class="required-entry validate-cc-type-select">
                              <option >--Please Select--</option>
                              <option value="AE">American Express</option>
                              <option value="VI">Visa</option>
                              <option value="MC">MasterCard</option>
                              <option value="DI">Discover</option>
                            </select>
                          </div>
                        </li>
                        <li>
                          <div class="input-box">
                            <label for="ccsave_cc_number">Credit Card Number <span class="required">*</span></label>
                            <br>
                            <input type="text" disabled="" id="ccsave_cc_number" name="payment[cc_number]" title="Credit Card Number" class="input-text validate-cc-number validate-cc-type" >
                          </div>
                        </li>
                        <li>
                          <div class="input-box">
                            <label for="ccsave_expiration">Expiration Date <span class="required">*</span></label>
                            <br>
                            <div class="v-fix">
                              <select disabled="" id="ccsave_expiration" style="width: 140px;" name="payment[cc_exp_month]" class="required-entry">
                                <option  selected="selected">Month</option>
                                <option value="1">01 - January</option>
                                <option value="2">02 - February</option>
                                <option value="3">03 - March</option>
                                <option value="4">04 - April</option>
                                <option value="5">05 - May</option>
                                <option value="6">06 - June</option>
                                <option value="7">07 - July</option>
                                <option value="8">08 - August</option>
                                <option value="9">09 - September</option>
                                <option value="10">10 - October</option>
                                <option value="11">11 - November</option>
                                <option value="12">12 - December</option>
                              </select>
                            </div>
                            <div class="v-fix">
                              <select disabled="" id="ccsave_expiration_yr" style="width: 103px;" name="payment[cc_exp_year]" class="required-entry">
                                <option  selected="selected">Year</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                              </select>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="input-box">
                            <label for="ccsave_cc_cid">Card Verification Number <span class="required">*</span></label>
                            <br>
                            <div class="v-fix">
                              <input type="text" title="Card Verification Number" class="input-text" id="ccsave_cc_cid" name="payment[cc_cid]" style="width: 3em;" >
                            </div>
                            <a href="#" class="cvv-what-is-this">What is this?</a> </div>
                        </li>
                      </ul>
                    </fieldset>
                  </dd>
                </dl>
              </form>
              <p class="require"><em class="required">* </em>Required Fields</p>
              <div class="buttons-set1" id="payment-buttons-container">
                <button type="button" class="button" ><span>Continue</span></button>
                <a href="#" class="back-link">« Back</a> </div>
              <div style="clear: both;"></div>
            </div>
          </li>
          <li id="opc-review" class="section">
            <div class="step-title"> <span class="number">5</span>
              <h3 class="one_page_heading">Đánh giá đơn hàng</h3>
            </div>
            <div id="checkout-step-review" class="step a-item" style="display: none;">
              <div class="order-review" id="checkout-review-load"> </div>
              <div class="buttons-set13" id="review-buttons-container">
                <p class="f-left">Forgot an Item? <a href="shopping-cart.html">Edit Your Cart</a></p>
                <button type="submit" class="button" ><span>Place Order</span></button>
              </div>
            </div>
          </li>
        </ol>
      </div>
      <aside class="col-right sidebar col-sm-3">
        <div class="block block-progress">
          <div class="block-title ">Your Checkout</div>
          <div class="block-content">
            <dl>
              <dt class="complete"> Billing Address <span class="separator">|</span> <a href="#">Change</a> </dt>
              <dd class="complete">
                <address>
                swapna taru<br>
                Better Technology Labs.<br>
                23 North Main Stree<br>
                Windsor<br>
                Holtsville,  New York, 00501<br>
                United States<br>
                T: 5465465 <br>
                F: 466523
                </address>
              </dd>
              <dt class="complete"> Shipping Address <span class="separator">|</span> <a href="#">Change</a> </dt>
              <dd class="complete">
                <address>
                swapna taru<br>
                Better Technology Labs.<br>
                23 North Main Stree<br>
                Windsor<br>
                Holtsville,  New York, 00501<br>
                United States<br>
                T: 5465465 <br>
                F: 466523
                </address>
              </dd>
              <dt class="complete"> Shipping Method <span class="separator">|</span> <a href="#">Change</a> </dt>
              <dd class="complete"> Flat Rate - Fixed <br>
                <span class="price">$15.00</span> </dd>
              <dt> Payment Method </dt>
              <dd class="complete"></dd>
            </dl>
          </div>
        </div>
        </aside>
    </div>
  </div>
  </div>
  <!-- Main Container End -->
 <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
          <div class="top-b-text"></div></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col free-shipping"></div>
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
        <li> <a href="#">Multiple Addresses</a></li>
        <li> <a href="gioithieu.php">About us</a></li>
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