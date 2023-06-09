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
            <li class="level0 parent drop-menu"><a href="index.php"><span>Home</span></a>
              <ul class="level1">
                <li class="level1 first parent"><a href="index.php"><span>Home Version 1</span></a></li>
                <li class="level1 parent"><a href="../version_2/index.html"><span>Home Version 2</span></a></li>
                <li class="level1 parent"><a href="../version_3/index.html"><span>Home Version 3</span></a></li>
           
              </ul>
            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Pages</span></a>
              <ul class="level1">
                <li class="level1 first"><a href="show_product.php"><span>Grid</span></a></li>
                <li class="level1 nav-10-2"><a href="list.php"><span>List</span></a></li>
                <li class="level1 nav-10-3"><a href="product_detail.php"><span>Product Detail</span></a></li>
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Shopping Cart</span></a></li>
                <li class="level1 first parent"><a href="checkout.php"><span>Checkout</span></a>
                  
                </li>
                <li class="level1 nav-10-4"><a href="wishlist.html"><span>Wishlist</span></a></li>
                <li class="level1"><a href="dashboard.html"><span>Dashboard</span></a></li>
                <li class="level1"><a href="#"><span>Multiple Addresses</span></a></li>
                <li class="level1"><a href="gioithieu.php"><span>About us</span></a></li>
                <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
                
                <li class="level1"><a href="faq.html"><span>FAQ</span></a></li>
                <li class="level1"><a href="quick_view.php"><span>Quick view </span></a></li>
                <li class="level1"><a href="login.php"><span>Login</span></a></li>
                
                <li class="level1 first parent"><a href="blog.php"><span>Blog</span></a>
                  <ul class="level2 right-sub">
                    <li class="level2 nav-2-1-1 first"><a href="blog_detail.php"><span>Blog Detail</span></a></li>
                  </ul>
                </li>
                <li class="level1"><a href="contact_us.html"><span>Contact us</span></a></li>
                <li class="level1"><a href="404error.html"><span>404 Error Page</span></a></li>
              </ul>
            </li>
            <li class="mega-menu"><a href="show_product.php" class="level-top active"><span>Women</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Stylish Bag</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="show_product.php" class=""><span>Clutch Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php" class=""><span>Diaper Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php" class=""><span>Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php" class=""><span>Hobo handbags</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Material Bag</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Beaded Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Fabric Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Handbags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Leather Handbags</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Shoes</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Flat Shoes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Flat Sandals</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Boots</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Heels</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Jwellery</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Bracelets</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="grid-2.html"><span>Necklaces &amp; Pendent</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Pendants</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Pins &amp; Brooches</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Dresses</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Casual Dresses</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Evening</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Designer</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Party</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Swimwear</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Swimsuits</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/beach-clothing.html"><span>Beach Clothing</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Clothing</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Bikinis</span></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--nav-block nav-block-center-->
                    <div class="col-2">
                      <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                      <div class="menu_image1"><a href="#" title=""><img src="images/menu_image1.jpg" alt="menu_image"></a></div>
                    </div>
                  </div>
                  <!--level0-wrapper2--> </div>
              </div>
            </li>
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Men</span></a>
              <div  style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Shoes</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Sport Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Casual Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Leather Shoes</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>canvas shoes</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Dresses</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Casual Dresses</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Evening</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Designer</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Party</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Jackets</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Coats</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Formal Jackets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Leather Jackets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Blazers</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Watches</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Fasttrack</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Casio</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Titan</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Tommy-Hilfiger</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sunglasses</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Ray Ban</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Fasttrack</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Police</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Oakley</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Accesories</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Backpacks</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Wallets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Laptops Bags</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Belts</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <!--level0-wrapper2-->
                    <div class="nav-add">
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
              </div>
            </li>
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Electronics</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Mobiles</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Samsung</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Nokia</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>IPhone</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Sony</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Accesories</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Mobile Memory Cards</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Cases &amp; Covers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Mobile Headphones</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Bluetooth Headsets</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Cameras</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Camcorders</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Point &amp; Shoot</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Digital SLR</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Camera Accesories</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Audio &amp; Video</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>MP3 Players</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>IPods</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Speakers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Video Players</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Computer</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>External Hard Disk</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Pendrives</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Headphones</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>PC Components</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Appliances</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Vaccum Cleaners</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Indoor Lighting</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Kitchen Tools</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Water Purifier</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--level0-wrapper2-->
                  <div class="nav-add">
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
              </div>
            </li>
            <li class="mega-menu"><a class="level-top" href="show_product.php"><span>Furniture</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                      <ul class="level0">
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Living Room</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Racks &amp; Cabinets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Sofas</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Chairs</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Tables</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Dining &amp; Bar</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Dining Table Sets</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Serving Trolleys</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Bar Counters</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Dining Cabinets</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Bedroom</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Beds</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Chest of Drawers</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="grid-2.html"><span>Wardrobes &amp; Almirahs</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Nightstands</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Kitchen</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Kitchen Racks</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Kitchen Fillings</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Wall Units</span></a></li>
                            <li class="level2 nav-6-1-1"><a href="show_product.php"><span>Benches &amp; Stools</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <!--nav-block nav-block-center-->
                    <div class="nav-block nav-block-right std grid12-4"><a href="#"><img src="images/menu_furniture_2.png" alt="furniture"></a> </div>
                    <!--nav-block nav-block-right std grid12-4--> </div>
                </div>
                <!--level0-wrapper2--> 
              </div>
            </li>
            <li class="level0 nav-8 level-top"><a href="show_product.php" class="level-top"><span>Kids</span></a></li>
            <li class="nav-custom-link mega-menu"> <a class="level-top" href="#"><span>Custom</span></a>
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
            </li>
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#"><span class="hidden-xs">Shopping Cart (2)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><span>View Cart</span></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <li class="item first">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="products-images/product4.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$179.99</span>
                            <p class="product-name"><a href="product_detail.php">Sample Product</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="product_detail.php"><img alt="Sample Product" src="products-images/product3.jpg"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$80.00</span>
                            <p class="product-name"><a href="product_detail.php">Sample Product</a></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
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
            <li class=""> <a title="Go to Home Page" href="show_product.php">Women</a><span>» </span></li>
            <li class="category13"><strong>Tops & Tees</strong></li>
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
              <h2>Tops & Tees</h2></div></div></div>
            </div>
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3">
        <article class="col-main">
          
          <div class="category-image"><img title="Sofas " alt="Sofas " src="images/women_banner.png"> </div>
          <div class="toolbar">
            <div class="sorter">
                <div class="view-mode"> <a href="show_product.php" title="Grid" class="button button-grid">&nbsp;</a>&nbsp; <span title="List" class="button button-active button-list">&nbsp;</span>&nbsp; </div>
              </div>
            <div id="sort-by">
              <label class="left">Sort By: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Position</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
            <div class="pager">
              <div id="limiter">
                <label>View: </label>
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
                <label>Page:</label>
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
            <ol class="products-list" id="products-list">
          <li class="item first">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product1.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:50%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
              </div>
              <div class="desc std">
                <p>Sed volutpat ac massa eget 
                  lacinia.  
                  Aenean volutpat lacus at dolor blandit </p>
                <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                  tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box">
                <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
              </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item even">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product2.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">
                <p>Sed volutpat ac massa eget 
                  lacinia. Suspendisse non purus semper, tellus vel, tristique urna. 
                  Aenean volutpat lacus at dolor blandit. </p>
                <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                  tincidunt mi. Vivamus dignissimm ... <a class="link-learn" title="" href="#">Learn More</a></p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-159"> <span class="price">$99.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item odd">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product3.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.html.html" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">Computer games, digital photo 
                editing and graphic applications will astound you on this huge 30" 
                flat-panel monitor.
                <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                  tincidunt mi. </p>
                <p>Phasellus consequat id purus in convallis. Nulla quis... <a class="link-learn" title="" href="#">Learn More</a></p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-157"> <span class="price">$699.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item even">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product4.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">2 ms response time; 10,000:1 contrast ratio; 300 cd/m² brightness; 1440 x 900 maximum resolution; DVI-D and 15-pin D-sub inputs
                <p>Phasellus consequat id purus 
                  pretium enimnec, tristique... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-156"> <span class="price">$399.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item odd">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product5.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">1 TB - 7200RPM, SATA 3.0Gb/s, 32MB Cache
                <p>Maecenas vehicula volutpat elit, in interdum lacus faucibus sit amet. </p>
                <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                  tincidunt mi. Vivamus dignissim nisl. Donec eget feugiat ante. 
                  Integerarcu libero, dictum nec congue sed, faucibus ... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-155"> <span class="price">$99.00</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item even">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product6.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">1 TB - 7200RPM, SATA 3.0Gb/s, 32MB Cache
                <p>Aenean volutpat lacus at dolor blandit, 
                  vitae lobortisante semper. Ut 
                  bibendum metusfringilla, in interdum lacus faucibus sit amet. </p>
                <p> Donec eget feugiat ante. 
                  Integerarcu libero... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-154"> <span class="price">$299<span class="sub">.00</span></span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item odd">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product7.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">Sample Product 
                Processor BX80574QX9775 - 45nm, 3.20GHz, 12MB Cache, 1600MHz FSB,
                <p>Vivamus dignissim nisl eu euismod ullamcorper. Donec 
                  pellentesque diam id est tristique vestibulum. Donec eget feugiat ante. 
                  Integerarcu libero, dictum nec congue sed, faucibus sit amet lectus. </p>
                <p>Phasellus consequat... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-153"> <span class="price">$2,049.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item even">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product8.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">5 ms response time; 10,000:1 contrast ratio; 400 cd/m² brightness; 1920 x 1200 maximum resolution; DVI-D and 15-pin D-sub inputs
                <p> tellus vel, tristique urna. </p>
                <p>Phasellus consequat id purus in convallis. Nulla quis nunc auctor, 
                  pretium enimnec, tristique magna... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-152"> <span class="price">$699.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item odd">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product9.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="desc std">Our most advanced trackball yet. 
                
                Save space and eliminate desktop clutter.
                <p>Donec eget feugiat ante. 
                  Integerarcu libero, dictum nec congue sed, faucibus sit amet lectus. </p>
                <p>Vivamus vitae arcu faucibus, dictum 
                  magna vel, adipiscing... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-160"> <span class="price">$79.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item last even">
            <div class="product-image"> <a href="product_detail.php" title="Sample Product"> <img class="small-image" src="products-images/product10.jpg" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="Sample Product">Sample Product</a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:80%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
              </div>
              <div class="desc std">Li-Ion powered.
                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, 
                  vitae lobortisante semper. </p>
                <p>Integerarcu libero, dictum nec congue sed, faucibus sit... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price" id="product-price-161"> <span class="price">$239.99</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
        </ol>
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
                  <li> <a class="active" href="#/women.html">Women</a> <span class="subDropdown minus"></span>
                    <ul class="level0_415" style="display:block">
                      <li> <a href="#/women/tops.html"> Tops </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/tops/evening-tops.html"> Evening Tops </a> </li>
                          <li> <a href="#/women/tops/shirts-blouses.html"> Shirts &amp; Blouses </a> </li>
                          <li> <a href="#/women/tops/tunics.html"> Tunics </a> </li>
                          <li> <a href="#/women/tops/vests.html"> Vests </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/women/bags.html"> Bags </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/bags/bags.html"> Bags </a> </li>
                          <li> <a href="#/women/bags/designer-handbags.html"> Designer Handbags </a> </li>
                          <li> <a href="#/women/bags/purses.html"> Purses </a> </li>
                          <li> <a href="#/women/bags/shoulder-bags.html"> Shoulder Bags </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/women/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                          <li> <a href="#/women/shoes/flat-sandals.html"> Flat Sandals </a> </li>
                          <li> <a href="#/women/shoes/boots.html"> Boots </a> </li>
                          <li> <a href="#/women/shoes/heels.html"> Heels </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/women/Jewellery.html"> Jewellery </a>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/Jewellery/bracelets.html"> Bracelets </a> </li>
                          <li> <a href="#/women/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                          <li> <a href="#/women/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/women/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                          <li> <a href="#/women/dresses/evening.html"> Evening </a> </li>
                          <li> <a href="#/women/dresses/designer.html"> Designer </a> </li>
                          <li> <a href="#/women/dresses/party.html"> Party </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/women/lingerie.html"> Lingerie </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/lingerie/bras.html"> Bras </a> </li>
                          <li> <a href="#/women/lingerie/bodies.html"> Bodies </a> </li>
                          <li> <a href="#/women/lingerie/necklaces-pendants.html"> Lingerie Sets </a> </li>
                          <li> <a href="#/women/lingerie/shapewear.html"> Shapewear </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/women/jackets.html"> Jackets </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/jackets/coats.html"> Coats </a> </li>
                          <li> <a href="#/women/jackets/jackets.html"> Jackets </a> </li>
                          <li> <a href="#/women/jackets/leather-jackets.html"> Leather Jackets </a> </li>
                          <li> <a href="#/women/jackets/blazers.html"> Blazers </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/women/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/women/swimwear/swimsuits.html"> Swimsuits </a> </li>
                          <li> <a href="#/women/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                          <li> <a href="#/women/swimwear/bikinis.html"> Bikinis </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                    </ul>
                    <!--level0--> 
                  </li>
                  <!--level 0-->
                  <li> <a href="#/men.html">Men</a> <span class="subDropdown plus"></span>
                    <ul class="level0_455" style="display:none">
                      <li> <a href="#/men/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/men/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                          <li> <a href="#/men/shoes/boots.html"> Boots </a> </li>
                          <li> <a href="#/men/shoes/heels.html"> Heels </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/men/Jewellery.html"> Jewellery </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/men/Jewellery/bracelets.html"> Bracelets </a> </li>
                          <li> <a href="#/men/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                          <li> <a href="#/men/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/men/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/men/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                          <li> <a href="#/men/dresses/evening.html"> Evening </a> </li>
                          <li> <a href="#/men/dresses/designer.html"> Designer </a> </li>
                          <li> <a href="#/men/dresses/party.html"> Party </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/men/jackets.html"> Jackets </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/men/jackets/coats.html"> Coats </a> </li>
                          <li> <a href="#/men/jackets/jackets.html"> Jackets </a> </li>
                          <li> <a href="#/men/jackets/leather-jackets.html"> Leather Jackets </a> </li>
                          <li> <a href="#/men/jackets/blazers.html"> Blazers </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/men/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/men/swimwear/swimsuits.html"> Swimsuits </a> </li>
                          <li> <a href="#/men/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                    </ul>
                    <!--level0--> 
                  </li>
                  <!--level 0-->
                  <li> <a href="#.html">Electronics</a> <span class="subDropdown plus"></span>
                    <ul class="level0_482" style="display:none">
                      <li> <a href="#/smartphones.html"> Smartphones </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/smartphones/samsung.html"> Samsung </a> </li>
                          <li> <a href="#/smartphones/apple.html"> Apple </a> </li>
                          <li> <a href="#/smartphones/blackberry.html"> Blackberry </a> </li>
                          <li> <a href="#/smartphones/nokia.html"> Nokia </a> </li>
                          <li> <a href="#/smartphones/htc.html"> HTC </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/cameras.html"> Cameras </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/cameras/digital-cameras.html"> Digital Cameras </a> </li>
                          <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                          <li> <a href="#/cameras/lenses.html"> Lenses </a> </li>
                          <li> <a href="#/cameras/filters.html"> Filters </a> </li>
                          <li> <a href="#/cameras/tripod.html"> Tripod </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                      <li> <a href="#/accesories.html"> Accesories </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li> <a href="#/accesories/headsets.html"> HeadSets </a> </li>
                          <li> <a href="#/accesories/batteries.html"> Batteries </a> </li>
                          <li> <a href="#/accesories/screen-protectors.html"> Screen Protectors </a> </li>
                          <li> <a href="#/accesories/memory-cards.html"> Memory Cards </a> </li>
                          <li> <a href="#/accesories/cases.html"> Cases </a> </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1--> 
                      </li>
                      <!--level1-->
                    </ul>
                    <!--level0--> 
                  </li>
                  <!--level 0-->
                  <li> <a href="#/digital.html">Digital</a> </li>
                  <!--level 0-->
                  <li class="last"> <a href="#/fashion.html">Fashion</a> </li>
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
                      <li> <a href="#/stylish-bag.html">Stylish Bag</a> (30) </li>
                      <li> <a href="#/material-bag.html">Material Bag</a> (30) </li>
                      <li> <a href="#/shoes.html">Shoes</a> (32) </li>
                      <li> <a href="#/jwellery.html">Jwellery</a> (30) </li>
                      <li> <a href="#/dresses.html">Dresses</a> (30) </li>
                      <li> <a href="#/swimwear.html">Swimwear</a> (30) </li>
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>
            
            <div class="block block-layered-nav">
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
            </div>
            <div class="block block-banner"><a href="#"><img alt="block-banner" src="images/RHS-banner-img.jpg"></a></div>
            <div class="block block-cart">
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
                  <li class="item"> <a href="product_detail.php" title="Sample Product" class="product-image"><img src="products-images/product1.jpg" alt="Sample Product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                      <p class="product-name"> <a href="product_detail.php">Sample Product</a> </p>
                      <strong>1</strong> x <span class="price">$19.99</span> </div>
                  </li>
                  <li class="item last"> <a href="product_detail.php" title="Sample Product" class="product-image"><img src="products-images/product2.jpg" alt="Sample Product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                      <p class="product-name"> <a href="product_detail.php">Sample Product</a> </p>
                      <strong>1</strong> x <span class="price">$8.00</span> 
                      <!--access clearfix--> 
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="block block-compare">
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
        </div>
    </div>
  </div>
</section>
<!-- Main Container End --> 
 <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
          <div class="top-b-text"><strong>Designer Shoes</strong> For Women</div></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col free-shipping"><strong>Free Shipping</strong> on order over $199</div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
        <div class="col add-banner2">
          <div class="top-b-text"><strong>Luxury Handbags</strong>2015 New Arrive</div>
          </div>
                  
          
          
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col last offer"><strong>New Collection</strong> Lorem ipsum dolor.</div>
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
        <li><a href="checkout.php">Checkout</a>
          
        </li>
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
    <li><a href="show_product.php">Women</a>
      <ul>
        <li> <a href="show_product.php" class="">Stylish Bag</a>
          <ul>
            <li> <a href="show_product.php" class="">Clutch Handbags</a></li>
            <li> <a href="show_product.php" class="">Diaper Bags</a></li>
            <li> <a href="show_product.php" class="">Bags</a></li>
            <li> <a href="show_product.php" class="">Hobo handbags</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Material Bag</a>
          <ul>
            <li> <a href="show_product.php">Beaded Handbags</a></li>
            <li> <a href="show_product.php">Fabric Handbags</a></li>
            <li> <a href="show_product.php">Handbags</a></li>
            <li> <a href="show_product.php">Leather Handbags</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Shoes</a>
          <ul>
            <li> <a href="show_product.php">Flat Shoes</a></li>
            <li> <a href="show_product.php">Flat Sandals</a></li>
            <li> <a href="show_product.php">Boots</a></li>
            <li> <a href="show_product.php">Heels</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Jwellery</a>
          <ul>
            <li> <a href="show_product.php">Bracelets</a></li>
            <li> <a href="show_product.php">Necklaces &amp; Pendent</a></li>
            <li> <a href="show_product.php">Pendants</a></li>
            <li> <a href="show_product.php">Pins &amp; Brooches</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Dresses</a>
          <ul>
            <li> <a href="show_product.php">Casual Dresses</a></li>
            <li> <a href="show_product.php">Evening</a></li>
            <li> <a href="show_product.php">Designer</a></li>
            <li> <a href="show_product.php">Party</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Swimwear</a>
          <ul>
            <li> <a href="show_product.php">Swimsuits</a></li>
            <li> <a href="show_product.php">Beach Clothing</a></li>
            <li> <a href="show_product.php">Clothing</a></li>
            <li> <a href="show_product.php">Bikinis</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="show_product.php">Men</a>
      <ul>
        <li> <a href="show_product.php" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="show_product.php">Sport Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Casual Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Leather Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">canvas shoes</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="show_product.php">Casual Dresses</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Evening</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Designer</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Party</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="show_product.php">Coats</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Formal Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Leather Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Blazers</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="show_product.php">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Casio</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Titan</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Tommy-Hilfiger</a></li>
          </ul>
        </li>
        <li> <a href="#/sunglasses.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="show_product.php">Ray Ban</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Police</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Oakley</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="show_product.php">Backpacks</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Wallets</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Laptops Bags</a></li>
            <li class="level2 nav-6-1-1"><a href="show_product.php">Belts</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="show_product.php">Electronics</a>
      <ul>
        <li> <a href="show_product.php"><span>Mobiles</span></a>
          <ul>
            <li> <a href="show_product.php"><span>Samsung</span></a></li>
            <li> <a href="show_product.php"><span>Nokia</span></a></li>
            <li> <a href="show_product.php"><span>IPhone</span></a></li>
            <li> <a href="show_product.php"><span>Sony</span></a></li>
          </ul>
        </li>
        <li> <a href="show_product.php" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="show_product.php"><span>Mobile Memory Cards</span></a></li>
            <li> <a href="show_product.php"><span>Cases &amp; Covers</span></a></li>
            <li> <a href="show_product.php"><span>Mobile Headphones</span></a></li>
            <li> <a href="show_product.php"><span>Bluetooth Headsets</span></a></li>
          </ul>
        </li>
        <li> <a href="show_product.php"><span>Cameras</span></a>
          <ul>
            <li> <a href="show_product.php"><span>Camcorders</span></a></li>
            <li> <a href="show_product.php"><span>Point &amp; Shoot</span></a></li>
            <li> <a href="show_product.php"><span>Digital SLR</span></a></li>
            <li> <a href="show_product.php"><span>Camera Accesories</span></a></li>
          </ul>
        </li>
        <li> <a href="show_product.php"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="show_product.php"><span>MP3 Players</span></a></li>
            <li> <a href="show_product.php"><span>IPods</span></a></li>
            <li> <a href="show_product.php"><span>Speakers</span></a></li>
            <li> <a href="show_product.php"><span>Video Players</span></a></li>
          </ul>
        </li>
        <li> <a href="show_product.php"><span>Computer</span></a>
          <ul>
            <li> <a href="show_product.php"><span>External Hard Disk</span></a></li>
            <li> <a href="show_product.php"><span>Pendrives</span></a></li>
            <li> <a href="show_product.php"><span>Headphones</span></a></li>
            <li> <a href="show_product.php"><span>PC Components</span></a></li>
          </ul>
        </li>
        <li> <a href="show_product.php"><span>Appliances</span></a>
          <ul>
            <li> <a href="show_product.php"><span>Vaccum Cleaners</span></a></li>
            <li> <a href="show_product.php"><span>Indoor Lighting</span></a></li>
            <li> <a href="show_product.php"><span>Kitchen Tools</span></a></li>
            <li> <a href="show_product.php"><span>Water Purifier</span></a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="show_product.php">Furniture</a>
      <ul>
        <li> <a href="show_product.php">Living Room</a>
          <ul>
            <li> <a href="show_product.php">Racks &amp; Cabinets</a></li>
            <li> <a href="show_product.php">Sofas</a></li>
            <li> <a href="show_product.php">Chairs</a></li>
            <li> <a href="show_product.php">Tables</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php" class="">Dining &amp; Bar</a>
          <ul>
            <li> <a href="show_product.php">Dining Table Sets</a></li>
            <li> <a href="show_product.php">Serving Trolleys</a></li>
            <li> <a href="show_product.php">Bar Counters</a></li>
            <li> <a href="show_product.php">Dining Cabinets</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Bedroom</a>
          <ul>
            <li> <a href="show_product.php">Beds</a></li>
            <li> <a href="show_product.php">Chest of Drawers</a></li>
            <li> <a href="show_product.php">Wardrobes &amp; Almirahs</a></li>
            <li> <a href="show_product.php">Nightstands</a></li>
          </ul>
        </li>
        <li> <a href="show_product.php">Kitchen</a>
          <ul>
            <li> <a href="show_product.php">Kitchen Racks</a></li>
            <li> <a href="show_product.php">Kitchen Fillings</a></li>
            <li> <a href="show_product.php">Wall Units</a></li>
            <li> <a href="show_product.php">Benches &amp; Stools</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="show_product.php">Kids</a></li>
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
</body>

<!-- Tieu Long Lanh Kute -->
</html>