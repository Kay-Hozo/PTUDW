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
                <li class="level1 first"><a href="grid.php"><span>Danh mục sản phẩm</span></a></li>
               <!-- <li class="level1 nav-10-2"><a href="list.html"><span>List</span></a></li>-->
                <!--<li class="level1 nav-10-3"><a href="product_detail.html"><span>Product Detail</span></a></li>-->
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Giỏ hàng</span></a></li>
                <li class="level1 first parent"><a href="checkout.php"><span>Thanh toán</span></a>  </li>
               <!-- <li class="level1 nav-10-4"><a href="wishlist.html"><span>Wishlist</span></a></li>-->
              <!--  <li class="level1"><a href="dashboard.html"><span>Dashboard</span></a></li>
                <li class="level1"><a href="multiple_addresses.html"><span>Multiple Addresses</span></a></li>
                <li class="level1"><a href="about_us.html"><span>About us</span></a></li>
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
             <li class="mega-menu"><a href="gioithieu.php" class="level-top"><span>Giới thiệu</span></a></li>
            <li class="mega-menu active"><a href="grid.php" class="level-top"><span>Book</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="grid.php" class=""><span>Sách giáo khoa</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Clutch Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Diaper Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html" class=""><span>Hobo handbags</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách tham khảo</span></a>
                           <!-- <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Beaded Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Fabric Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Leather Handbags</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách ngoại ngữ</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Flat Shoes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Flat Sandals</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Boots</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Heels</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách thiếu nhi</span></a>
                            <!--<ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Bracelets</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid-2.html"><span>Necklaces &amp; Pendent</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Pendants</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid.html"><span>Pins &amp; Brooches</span></a></li>
                            </ul>-->
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách kinh tế</span></a>
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
            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Từ điển</span></a>
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
           <li class="mega-menu"><a href="grid.php" class="level-top"><span>Truyện tranh</span></a>
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
         <li class="mega-menu"><a class="level-top" href="grid.php"><span>Tiểu thuyết</span></a>
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
            <li class="level0 nav-8 level-top"><a href="grid.php" class="level-top"><span>Đời sống</span></a></li>
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
  <!-- Breadcrumbs -->
  <div class="breadcrumbs bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>» </span></li>
            <li class=""> <a title="Go to Home Page" href="grid.php">Book</a><span>» </span></li>
           <!-- <li class="category13"><strong>Tops & Tees</strong></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <section class="main-container col2-left-layout bounceInUp animated">
  <div class="page-header"><div class="container"><div class="row">
  <div class="col-xs-12">
              <h2>BOOKS</h2></div></div></div>
            </div>
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-sm-push-3">
          <article class="col-main">
            
            <div class="category-description std">
              <div class="slider-items-products">
                <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                    
                    <!-- Item -->
                    <div class="item"> <a href="#x"><img alt="" src="images/silde/book-banner1.png"></a>
                      <div class="cat-img-title cat-bg cat-box">
                        <h2 class="cat-heading"><strong>New Fashion 2015</strong><br></h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                      </div>
                    </div>
                    <!-- End Item --> 
                    
                    <!-- Item -->
                    <div class="item"> <a href="#x"><img alt="" src="images/silde/book-banner2.png"></a>
                      
                    </div>
                    
                    <!-- End Item --> 
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.php" title="List" class="button-list">&nbsp;</a> </div>
              </div>
              <div id="sort-by">
                <label class="left">Sắp xếp theo: </label>
                <ul>
                  <li><a href="#">Vị trí<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Tên</a></li>
                      <li><a href="#">Giá</a></li>
                      <li><a href="#">Vị trí</a></li>
                    </ul>
                  </li>
                </ul>
                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
              <div class="pager">
                <div id="limiter">
                  <label>Xem: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <label>Trang:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product1.jpg" alt="Sample Product"> </a>
                        <div class="new-label new-top-left">New</div>
                        <div class="item-box-hover">
                          <div class="box-inner"> <div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                           <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product2.jpg" alt="Sample Product"> </a>
                        <div class="sale-label sale-top-left">Sale</div>
                        <div class="item-box-hover">
                          <div class="box-inner"> <div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                           <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:40%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product3.jpg" alt="Sample Product"> </a>
                       
                        <div class="item-box-hover">
                          <div class="box-inner"><div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:0%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product4.jpg" alt="Sample Product"> </a>
                       
                        <div class="item-box-hover">
                          <div class="box-inner"> <div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                           <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:100%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product5.jpg" alt="Sample Product"> </a>
                        <div class="item-box-hover">
                          <div class="box-inner"><div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:100%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product6.jpg" alt="Sample Product"> </a>
                       
                        <div class="item-box-hover">
                          <div class="box-inner"> <div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                           <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product7.jpg" alt="Sample Product"> </a>
                      
                        <div class="item-box-hover">
                          <div class="box-inner"><div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:40%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product8.jpg" alt="Sample Product"> </a>
                       
                        <div class="item-box-hover">
                          <div class="box-inner"><div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:0%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product9.jpg" alt="Sample Product"> </a>
                       
                        <div class="item-box-hover">
                          <div class="box-inner"><div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:100%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php" title="Sample Product" class="product-image"> <img src="products-images/product10.jpg" alt="Sample Product"> </a>
                        <div class="item-box-hover">
                          <div class="box-inner"><div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.php" title="Sample Product"> Sample Product </a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:100%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $90.00 </span> </p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $80.00 </span> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="col-left sidebar">
          <div class="side-nav-categories">
              <div class="block-title"> Categories </div>
              <!--block-title--> 
              <!-- BEGIN BOX-CATEGORY -->
              <div class="box-content box-category">
                <ul>
                  <li> <a class="active" href="grid.php">Book</a> <span class="subDropdown minus"></span>
                    <ul class="level0_415" style="display:block">
                      <li> <a href="grid.php">Sách giáo khoa </a> 
                        <!--<ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Evening Tops </a> </li>
                          <li> <a href="grid.html"> Shirts &amp; Blouses </a> </li>
                          <li> <a href="grid.html"> Tunics </a> </li>
                          <li> <a href="grid.html"> Vests </a> </li>-->
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="grid.php"> Sách tham khảo </a> 
                       <!-- <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Bags </a> </li>
                          <li> <a href="grid.html"> Designer Handbags </a> </li>
                          <li> <a href="grid.html"> Purses </a> </li>
                          <li> <a href="grid.html"> Shoulder Bags </a> </li>
                          <!--end for-each -->
                        <!--</ul>-->
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="grid.php">Sách ngoại ngữ </a> 
                        <!--<ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Flat Shoes </a> </li>
                          <li> <a href="grid.html"> Flat Sandals </a> </li>
                          <li> <a href="grid.html"> Boots </a> </li>
                          <li> <a href="grid.html"> Heels </a> </li>
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="grid.php">Sách thiếu nhi </a>
                       <!-- <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Bracelets </a> </li>
                          <li> <a href="grid.html"> Necklaces &amp; Pendants </a> </li>
                          <li> <a href="grid.html"> Pins &amp; Brooches </a> </li>
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="grid.php"> Sách kinh tế </a> 
                       <!-- <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Casual Dresses </a> </li>
                          <li> <a href="grid.html"> Evening </a> </li>
                          <li> <a href="grid.html"> Designer </a> </li>
                          <li> <a href="grid.html"> Party </a> </li>
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                      </li>
                      <!--level1-->
                     <!-- <li> <a href="grid.html"> Lingerie </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Bras </a> </li>
                          <li> <a href="grid.html"> Bodies </a> </li>
                          <li> <a href="grid.html"> Lingerie Sets </a> </li>
                          <li> <a href="grid.html"> Shapewear </a> </li>-->
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                     <!-- </li>-->
                      <!--level1-->
                     <!-- <li> <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Coats </a> </li>
                          <li> <a href="grid.html"> Jackets </a> </li>
                          <li> <a href="grid.html"> Leather Jackets </a> </li>
                          <li> <a href="grid.html"> Blazers </a> </li>
                          <!--end for-each -->
                        <!--</ul>--> 
                        <!--level1--> 
                     <!-- </li>--> 
                      <!--level1-->
                     <!-- <li> <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Swimsuits </a> </li>
                          <li> <a href="grid.html"> Beach Clothing </a> </li>
                          <li> <a href="grid.html"> Bikinis </a> </li>
                          <!--end for-each -->
                       <!-- </ul>--> 
                        <!--level1--> 
                     <!-- </li>-->
                      <!--level1-->
                    </ul>
                    <!--level0--> 
                  </li>
                  <!--level 0-->
                  <li> <a href="grid.php">Từ điển</a>
                    <!--<ul class="level0_455" style="display:none">
                      <li> <a href="grid.html"> Shoes </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Flat Shoes </a> </li>
                          <li> <a href="grid.html"> Boots </a> </li>
                          <li> <a href="grid.html"> Heels </a> </li>--> 
                          <!--end for-each -->
                       <!-- </ul>--> 
                        <!--level1--> 
                     <!-- </li>--> 
                      <!--level1-->
                     <!-- <li> <a href="grid.html"> Jewellery </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Bracelets </a> </li>
                          <li> <a href="grid.html"> Necklaces &amp; Pendants </a> </li>
                          <li> <a href="grid.html"> Pins &amp; Brooches </a> </li>--> 
                          <!--end for-each -->
                        <!--</ul>--> 
                        <!--level1--> 
                      <!--</li>--> 
                      <!--level1-->
      <!--                <li> <a href="grid.html"> Dresses </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Casual Dresses </a> </li>
                          <li> <a href="grid.html"> Evening </a> </li>
                          <li> <a href="grid.html"> Designer </a> </li>
                          <li> <a href="grid.html"> Party </a> </li>
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                     <!-- </li>-->
                      <!--level1-->
                      <!--<li> <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Coats </a> </li>
                          <li> <a href="grid.html"> Jackets </a> </li>
                          <li> <a href="grid.html"> Leather Jackets </a> </li>
                          <li> <a href="grid.html"> Blazers </a> </li>-->
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                     <!-- </li>-->
                      <!--level1-->
                      <!--<li> <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Swimsuits </a> </li>
                          <li> <a href="grid.html"> Beach Clothing </a> </li>-->
                          <!--end for-each -->
                      <!--  </ul>-->
                        <!--level1--> 
                     <!-- </li>-->
                      <!--level1-->
                  <!--  </ul>
                    level0 -->
                  </li>
                  <!--level 0-->
                  <li> <a href="grid.php">Truyện tranh</a> 
                    <!--<ul class="level0_482" style="display:none">
                      <li> <a href="grid.html"> Smartphones </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Samsung </a> </li>
                          <li> <a href="grid.html"> Apple </a> </li>
                          <li> <a href="grid.html"> Blackberry </a> </li>
                          <li> <a href="grid.html"> Nokia </a> </li>
                          <li> <a href="grid.html"> HTC </a> </li>-->
                          <!--end for-each -->
                        <!--</ul>-->
                        <!--level1--> 
                     <!-- </li>-->
                      <!--level1-->
                      <!--<li> <a href="grid.html"> Cameras </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> Digital Cameras </a> </li>
                          <li> <a href="grid.html"> Camcorders </a> </li>
                          <li> <a href="grid.html"> Lenses </a> </li>
                          <li> <a href="grid.html"> Filters </a> </li>
                          <li> <a href="grid.html"> Tripod </a> </li>-->
                          <!--end for-each -->
                    <!--    </ul>-->
                        <!--level1--> 
                     <!-- </li>-->
                      <!--level1-->
                      <!--<li> <a href="grid.html"> Accesories </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="grid.html"> HeadSets </a> </li>
                          <li> <a href="grid.html"> Batteries </a> </li>
                          <li> <a href="grid.html"> Screen Protectors </a> </li>
                          <li> <a href="grid.html"> Memory Cards </a> </li>
                          <li> <a href="grid.html"> Cases </a> </li>-->
                          <!--end for-each -->
                       <!-- </ul>-->
                        <!--level1--> 
                      <!--</li>-->
                      <!--level1-->
                    <!--</ul>-->
                    <!--level0--> 
                  </li>
                  <!--level 0-->
                  <li> <a href="grid.php">Tiểu thuyết </a> </li>
                  <!--level 0-->
                  <li class="last"> <a href="grid.php">Đời sống</a> </li>
                  <!--level 0-->
                </ul>
              </div>
              <!--box-content box-category--> 
            </div>
            <div class="block block-layered-nav">
              <div class="block-title"> Browse By </div>
              <div class="block-content">
                <dl id="narrow-by-list2">
                  <dt class="last odd">Category</dt>
                  <dd class="last odd">
                    <ol>
                      <li> <a href="grid.php">Sách giáo khoa</a> (30) </li>
                      <li> <a href="grid.php">Sách tham khảo</a> (30) </li>
                      <li> <a href="grid.php">Sách ngoại ngữ </a> (32) </li>
                      <li> <a href="grid.php">Sách thiếu nhi</a> (30) </li>
                      <li> <a href="grid.php">Sách kinh tế</a> (30) </li>
                      <li> <a href="grid.php">Từ điển</a> (30) </li>
                      <li> <a href="grid.php">Truyện tranh</a> (30) </li>
                      <li> <a href="grid.php">Tiểu thuyết</a> (30) </li>
                      <li> <a href="grid.php">Đời sống</a> (30) </li>
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>
            
           <!-- <div class="block block-layered-nav">
              <div class="block-title">Shop By</div>
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <dl id="narrow-by-list">
                  <dt class="odd">Price</dt>
                  <dd class="odd">
                    <ol>
                      <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                      <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                    </ol>
                  </dd>
                  <dt class="even">Manufacturer</dt>
                  <dd class="even">
                    <ol>
                      <li> <a href="#">TheBrand</a> (9) </li>
                      <li> <a href="#">Company</a> (4) </li>
                      <li> <a href="#">LogoFashion</a> (1) </li>
                    </ol>
                  </dd>
                  <dt class="odd">Color</dt>
                  <dd class="odd">
                    <ol>
                      <li> <a href="#">Green</a> (1) </li>
                      <li> <a href="#">White</a> (5) </li>
                      <li> <a href="#">Black</a> (5) </li>
                      <li> <a href="#">Gray</a> (4) </li>
                      <li> <a href="#">Dark Gray</a> (3) </li>
                      <li> <a href="#">Blue</a> (1) </li>
                    </ol>
                  </dd>
                  <dt class="last even">Size</dt>
                  <dd class="last even">
                    <ol>
                      <li> <a href="#">S</a> (6) </li>
                      <li> <a href="#">M</a> (6) </li>
                      <li> <a href="#">L</a> (4) </li>
                      <li> <a href="#">XL</a> (4) </li>
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>-->
            <div class="block block-banner"><a href="#"><img alt="block-banner" src="images/silde/banner3.png" width="280" height="200"></a></div>
            <div class="block block-banner"><a href="#"><img alt="block-banner" src="images/silde/banner4.png" width="280" height="200"></a></div>
            <!--<div class="block block-cart">
              <div class="block-title ">My Cart</div>
              <div class="block-content">
                <div class="summary">
                  <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                  <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$27.99</span> </p>
                </div>
                <div class="ajax-checkout">
                  <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
                </div>
                <p class="block-subtitle">Recently added item(s) </p>
                <ul>
                  <li class="item"> <a href="product_detail.html" title="Sample Product" class="product-image"><img src="products-images/product1.jpg" alt="Sample Product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                      <p class="product-name"> <a href="product_detail.html">Sample Product</a> </p>
                      <strong>1</strong> x <span class="price">$19.99</span> </div>
                  </li>
                  <li class="item last"> <a href="product_detail.html" title="Sample Product" class="product-image"><img src="products-images/product2.jpg" alt="Sample Product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                      <p class="product-name"> <a href="product_detail.html">Sample Product</a> </p>
                      <strong>1</strong> x <span class="price">$8.00</span> 
                      <!--access clearfix--> 
                   <!-- </div>
                  </li>
                </ul>
              </div>
            </div>-->
           
             <!-- Special Slider -->
  <section class="special-pro">
    <div class="slider-items-products">
      <div class="block-title">
        <h2>Special Products</h2>
      </div>
      <div id="special-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
                       
            <!-- Item -->
            <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.php"> <img alt="Sample Product" src="products-images/product11.jpg"></a>
                    <div class="item-box-hover">
                      <div class="box-inner">                                        
                                        <div class="actions">
                                        <div class="add_cart">
                                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> 
 <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Sample Product" href="product_detail.php"> Sample Product </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:30%" class="rating"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box">
                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span id="old-price-2" class="price"> $567.00 </span> </p>
                          <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-2" class="price"> $456.00 </span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" title="Stablished fact reader" href="#"> <img alt="Stablished fact reader" src="products-images/product12.jpg"></a>
                    <div class="item-box-hover">
                      <div class="box-inner">                                        
                                        <div class="actions">
                                        <div class="add_cart">
                                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> 
 <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Stablished fact reader" href="#">Sample Product</a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:100%" class="rating"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box">
                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span id="old-price-27" class="price"> $100.00 </span> </p>
                          <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-27" class="price"> $90.00 </span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->
            
            <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.php"> <img alt="Sample Product" src="products-images/product13.jpg"> </a>
                    <div class="new-label new-top-left">new</div>
                    <div class="item-box-hover">
                      <div class="box-inner">                                        
                                        <div class="actions">
                                        <div class="add_cart">
                                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> 
 <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Sample Product" href="product_detail.php"> Sample Product </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:80%" class="rating"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span id="product-price-1" class="regular-price"> <span class="price">$125.00</span> </span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
           
            
          </div>
      </div>
    </div>
    </section>
  <!-- End Featured Slider --> 
  
         <!-- <div class="block block-compare">
              <div class="block-title ">Compare Products (2)</div>
              <div class="block-content">
                <ol id="compare-items">
                  <li class="item odd">
                    <input type="hidden" value="2173" class="compare-item-id">
                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>
                  <li class="item last even">
                    <input type="hidden" value="2174" class="compare-item-id">
                    <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>
                </ol>
                <div class="ajax-checkout">
                  <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                  <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                </div>
              </div>
            </div>
            <div class="block block-list block-viewed">
              <div class="block-title"> Recently Viewed </div>
              <div class="block-content">
                <ol id="recently-viewed-items">
                  <li class="item odd">
                    <p class="product-name"><a href="#"> Armchair with Box-Edge Upholstered Arm</a></p>
                  </li>
                  <li class="item even">
                    <p class="product-name"><a href="#"> Pearce Upholstered Slee pere</a></p>
                  </li>
                  <li class="item last odd">
                    <p class="product-name"><a href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a></p>
                  </li>
                </ol>
              </div>
            </div>
            <div class="block block-poll">
              <div class="block-title">Community Poll </div>
              <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                <div class="block-content">
                  <p class="block-subtitle">What is your favorite Magento feature?</p>
                  <ul id="poll-answers">
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                      <span class="label">
                      <label for="vote_5">Layered Navigation</label>
                      </span> </li>
                    <li class="even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                      <span class="label">
                      <label for="vote_6">Price Rules</label>
                      </span> </li>
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                      <span class="label">
                      <label for="vote_7">Category Management</label>
                      </span> </li>
                    <li class="last even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                      <span class="label">
                      <label for="vote_8">Compare Products</label>
                      </span> </li>
                  </ul>
                  <div class="actions">
                    <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="block block-tags">
              <div class="block-title"> Popular Tags</div>
              <div class="block-content">
                <ul class="tags-list">
                  <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>
                  <li><a href="#" style="font-size:145%;">SEXY</a></li>
                  <li><a href="#" style="font-size:75%;">Tag</a></li>
                  <li><a href="#" style="font-size:110%;">Test</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>
                  <li><a href="#" style="font-size:110%;">cool</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">good</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">green</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>
                  <li><a href="#" style="font-size:75%;">laptop</a></li>
                  <li><a href="#" style="font-size:75%;">mobile</a></li>
                  <li><a href="#" style="font-size:75%;">nice</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>
                  <li><a href="#" style="font-size:98.3333333333%;">red</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>
                  <li><a href="#" style="font-size:75%;">trendy</a></li>
                  <li><a href="#" style="font-size:86.6666666667%;">young</a></li>
                </ul>
                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
              </div>
            </div>
          </aside>
        </div>-->
      </div>
    </div>
  </section>
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
        <li><a href="grid.php">Grid</a></li>
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
    <li><a href="grid.php">Sách </a>
      <ul>
        <li> <a href="grid.php" class="">Sách giáo khoa</a>
          <!--<ul>
            <li> <a href="grid.html" class="">Clutch Handbags</a></li>
            <li> <a href="grid.html" class="">Diaper Bags</a></li>
            <li> <a href="grid.html" class="">Bags</a></li>
            <li> <a href="grid.html" class="">Hobo handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách tham khảo</a>
          <!--<ul>
            <li> <a href="grid.html">Beaded Handbags</a></li>
            <li> <a href="grid.html">Fabric Handbags</a></li>
            <li> <a href="grid.html">Handbags</a></li>
            <li> <a href="grid.html">Leather Handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách ngoại ngữ</a>
         <!-- <ul>
            <li> <a href="grid.html">Flat Shoes</a></li>
            <li> <a href="grid.html">Flat Sandals</a></li>
            <li> <a href="grid.html">Boots</a></li>
            <li> <a href="grid.html">Heels</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách thiếu nhi</a>
         <!-- <ul>
            <li> <a href="grid.html">Bracelets</a></li>
            <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
            <li> <a href="grid.html">Pendants</a></li>
            <li> <a href="grid.html">Pins &amp; Brooches</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách kinh tế</a>
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
    <li><a href="grid.php">Truyện tranh</a>
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
    <li><a href="grid.php">Từ điển</a>
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
    <li><a href="grid.php">Tiểu thuyết</a>
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
    <li><a href="grid.php">Đời sống</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>


<!-- End Footer --> 
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/slider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
</body>

<!-- Tieu Long Lanh Kute -->
</html>